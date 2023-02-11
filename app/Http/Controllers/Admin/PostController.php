<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Http\Requests\{StorePostRequest, UpdatePostRequest};
use App\Models\{Categorie, Tag, Post, Image};

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->with('tags', 'category', 'user')->paginate(10);
        return view('auth.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::get();
        $tags = Tag::get();
        return view('auth.posts.create',[
            'categories'=>$categories,
            'tags'=>$tags,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // return $request->all();
        $validated = $request->validated();
        $random = rand(10000, 100000);

        $post = Post::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category,
            'slug' => Str::random(8),
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'date' => date('Y-m-d'),
        ]);


        if ($request->hasFile('image')) {
            $postImg = new Image();
            $image = $request->file('image');
            $imageName = $random.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images');
            $image->move($destinationPath, $imageName);

            $postImg->url = 'assets/images/'.$imageName??'No image';
            $post->image()->save($postImg);
        }else{
            $post->image->url = 'No image';
            $post->image->save($postImg);
        }

        $categories = Categorie::find($request->category);
        $categories->status = 1;
        $categories->save();
        foreach($request->tags as $tag){
            $post->tags()->attach($tag);
        }
        return to_route('posts.index')->with('message', 'Post has uploaded');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return 'hi';
        $post = Post::find($id);
        $categories = Categorie::get();
        $tags = Tag::get();
        return view('auth.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $validated = $request->validated();
        // return $post;
        if($request->hasFile('image'))
        {
            $destinationPath = public_path($post->image->url);
            if ($post->image->url != null) {
                if (file_exists($destinationPath)) {
                    unlink($destinationPath);
                }
            }
            $random = rand(10000, 100000);
            $image = $request->file('image');
            $imageName = $random.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('assets/images');
            $image->move($destinationPath, $imageName);
            $post->image->url = 'assets/images/'.$imageName??'No image';
            $post->image->save();
        }

        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'category_id' => $request->category,
        ]);

        $post->tags()->detach();
        foreach($request->tags as $tag){
            $post->tags()->attach($tag);
        }
        return to_route('posts.index')->with('message', 'Post has updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id);
        $destinationPath = base_path($post->image->url);
        if ($post->image->url != 'No image') {
            if (file_exists($destinationPath)) {
                unlink($destinationPath);
            }
        }
        $post->image->delete();
        $post->tags()->detach();
        $post->delete();
        return back()->with('message', 'Post has deleted');
    }
}

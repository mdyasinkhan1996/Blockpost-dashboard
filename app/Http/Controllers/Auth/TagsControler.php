<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagsControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'desc')->get();
        return view('auth.tag.index', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tags' => 'required|array',
            'tags.*' => 'required|string'
        ]);
        foreach($request->tags as $tag){
            Tag::create([
                'name' => $tag,
                'month' => date('Y-m'),
            ]);
        }
        return back()->with('message', 'Tags has uploaded');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return back()->with('message', 'Tag has deleted.');
    }
}

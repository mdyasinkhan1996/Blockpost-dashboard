<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Categorie, Post};

class CategoriesControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::with('posts')->orderBy('id', 'desc')->paginate();
        return view('auth.category.index', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->category;
        $request->validate([
            'category' => 'required|min:3'
        ]);
        Categorie::create([
            'name' => $request->category,
            'status' => 0,
            'month' => date('Y-m'),
        ]);
        return back()->with('message', 'Caregory has uploaded');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $Category)
    {
        // return $request->all();
        $Category->update([
            'name' => $request->category
        ]);
        return back()->with('message', 'Category has updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Categorie::find($id);
        $category->delete();
        return back()->with('message', 'Category has deleted.');
    }
}

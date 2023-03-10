<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Post;

class BlogController extends Controller
{
    public function welCome(){

        $blogsbannars = Post::where('status', 1)->orderBy('post_viewcount', 'desc')->take(3)->get();
        $blogsPopulars = Post::where('status', 1)->orderBy('post_viewcount', 'desc')->skip(3)->take(5)->inRandomOrder()->get();
        $blogsRecents = Post::where('status', 1)->limit(5)->get();
        $blogsTrends =Post::whereBetween('created_at', [Carbon::now()->subDays(30), Carbon::now()->subDays(10)])->orderBy('post_viewcount', 'desc')->limit(4)->get();
        $blogsfeatures = Post::where('status', 1)->orderBy('id', 'asc')->skip(8)->take(14)->inRandomOrder()->get();
        $blogsLetests = Post::where('status', 1)->orderBy('post_viewcount', 'asc')->limit(4)->get();

        return view('welcome', [
            'blogsbannars'=>$blogsbannars,
            'blogsPopulars'=>$blogsPopulars,
            'blogsRecents'=>$blogsRecents,
            'blogsTrends'=>$blogsTrends,
            'blogsfeatures'=>$blogsfeatures,
            'blogsLetests'=>$blogsLetests,
        ]);
    }
    public function index(){
        return view('public.blogindex');
    }
    // public function home(){
    //     return view('panel.auth.login');
    // }
    public function show($slug){
        return view('public.blogshow');
    }
    // public function Thirdslidelabel(){
    //     return view('public.blogshow');
    // }
}

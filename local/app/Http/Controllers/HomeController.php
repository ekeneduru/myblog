<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('User')->orderBy('created_at', 'desc')->paginate(9);
        $categories=Category::all();
        return view('home.home', ['blogs' => $blogs,'categories'=>$categories]);
    }
    public function category($id)
    {
        $blogs = Blog::where('category_id', $id)->with('User')->orderBy('created_at', 'desc')->paginate(9);
        $categories=Category::all();
        return view('home.category', ['blogs' => $blogs,'categories'=>$categories]);
    }
    public function Detail($id){
        $blog = Blog::where('id', $id)->with('User')->first();
       
        $categories=Category::all();
        return view('home.detail', ['blog' => $blog,'categories'=>$categories]);

    }
}

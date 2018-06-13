<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;



class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(){

        $blogs = Blog::orderBy('created_at', 'desc')->paginate(20);
        return view('blog.index', ['blogs' => $blogs]);
      
    }
    public function Create(){
 
        $categories=Category::all();
        return view("blog.create",['categories' => $categories]);
    }

    public function PostCreate(Request $request){
      
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'photourl'=>'required',
            'category'=>'required'
        ]);

        $file = $request->file('photourl');
        $filename= $file->getClientOriginalName();
       $ext= pathinfo($filename,PATHINFO_EXTENSION);
       $newfilename= $this->GUID().'.'.$ext;
        $user=\Auth::user();
        $ispublished=$request->has('ispublished')?true:false;
        
        $blog= new Blog([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'photourl'=>$newfilename,
            'category_id'=>$request->input('category'),
            'user_id'=>$user->id,
            'createdby_id'=>$user->id,
            'modifyby_id'=>$user->id,
            'IsPublished'=>$ispublished,
        ]);
        $file->move('uploads', $newfilename);
        $blog->save();
        return redirect()->route('blog.index');
    }

    public function GUID()
    {
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }
    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
   }
}

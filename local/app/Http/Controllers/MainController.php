<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index()
    {
    
        return view('main.index');
    }

    public function create()
    {
        return view('main.create');
    }
    public function PostCreate(Request $request)
    {
        $user= User::create([
            'firstname' =>  $request->input('firstname'),
            'lastname'=> $request->input('lastname'),
            'email' =>  $request->input('email'),
            'password' => Hash::make( $request->input('password')),
        ]);

        $user->roles()->attach(Role::where('name', 'Administrator')->first());
       

        return redirect()->route("main.index");
    }
}

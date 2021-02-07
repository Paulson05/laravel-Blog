<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //


    public function home(){
        $posts=Post::all();
        return view('home.home')->with([
            'posts'=>$posts,
        ]);
        return view ('home');
    }
}

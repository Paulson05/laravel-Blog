<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    



public function store(Request $request){
  
    $array=collect($request->only(['news_heading','news','read_more', 'image']))->all();
    Post::create($array);
     return redirect()->back()
                      ->with('info', 'you are signed up!');
}
}

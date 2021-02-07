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


public function edit($id){
    $posts =Post::findOrFail($id);
    return view ('admin.edit')->withPost($posts);
  }
  
  public function update(Request $request, $id){
    
    $posts =Post::findOrFail($id)
                     ->where('id', $id)
                     ->update([
                        'news_heading' => "$request->news_heading",
                        'news'  => " $request->news",
                        'read_more'   => "$request->read_more",
                         'image'     => "$request->image"
                     ]);
 
                     return redirect()->route('admin.index')
                      ->with('info', 'you are signed up!');
  }


  public function delete(Request $request, Post $id){
    // $posts =Post::delete()
    // ->where('id', $id);
    //  return redirect()->route('admin.index');



    
   
    $id->delete();
        return redirect()->route('admin.index');

  }

  public function show(Post  $id){
    return view('admin.show')->with([
      'post'=>$id,
    ]);

  }

}

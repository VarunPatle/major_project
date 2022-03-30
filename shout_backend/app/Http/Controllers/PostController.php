<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return Post::all();
    }
    // public function store(Request $request)
    // {
    //     return Post::create($request->all());
    // }
    
  
    public function destroy($id)
    {
        return post::destroy($id);
    }
    public function search($name){
        return post::where('name', 'like', '%'.$name.'%')->get();
    }
    public function create(){
        $photos = post::all();
        return view('post',compact('photos'));
    }
    public function store(Request $request){
        // $size=$request->file('postContent')->getSize();
        $name=$request->file('postContent')->getClientOriginalName();
        return $name;
        $request->file('postContent')->storeAs('public/images/',$name);
        $post = new Post();
        $post->name = $name;
        // $post->size = $size;
        $post->save();
        return redirect()->back();
    }

}

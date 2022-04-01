<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        return Post::all();
    }
    public function store(Request $request)
    {
        return Post::create($request->all());
    }


    public function destroy($id)
    {
        return Post::destroy($id);
    }
    public function show($id)
    {
        return Post::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return $post;
    }


    // search for a name
    public function search($name){
        return Post::where('name', 'like', '%'.$name.'%')->get();
    }


}

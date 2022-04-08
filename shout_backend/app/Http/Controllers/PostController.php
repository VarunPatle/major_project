<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Dotenv\Validator;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\PostDec;

class PostController extends Controller
{
    //
    public function index()
    {
        return Post::all();
    }
    public function create(){
        $photos = Post::all();
        return view('view',compact('photos'));
    }
    public function store(Request $request)
    {

        $image =time() . "_" . $request->file('image')->getClientOriginalName();
        $request->file('image')->move('public/images/',$image);
        $photo = new Post();
        $photo->user_id=$request->user_id;
        $photo->description=$request->description;
        $photo->image=$image;
        $photo->save();
        return response()->json([
            "successs"=>true,
            "message"=>"file uploaded",
            "image"=>$image
        ]);
        // return Post::create($request->all());
    //    return $name;
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
    public function getImages(){
        $path='/home/snehajad/Desktop/Project/newFolder/major_project/shout_backend/storage/app/public/images/';
        $post = DB::table('posts')
        ->select('image','description')
        ->get();
        return $post;
        // $post = Post::find($id);
        // $image=$post->image;
        // return response()->download($path.$image);

    }

    public function getReports($id){
        return Post::find($id)->reports->get();
    }





}

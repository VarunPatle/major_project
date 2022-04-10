<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $posts = Post::all();
         return view('admin1', compact('users','posts')); 
       
    }
    public function index2()
    {
        $users = User::all();
        $posts = Post::all();
         return view('view', compact('users','posts')); 
       
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from users where id = ?',[$id]);
        return redirect('/user');
    }

    public function destroy1($id)
    {
        DB::delete('delete from posts where id = ?',[$id]);
        return redirect('/user');
    }

    public function update(Request $request, $id)
    {
        // $user = User::find($id);
       
       DB::table('users')->where('id',$id)
        ->update(['authenticated' => 1 ]);
        
        return redirect('/user');

    }



    
}

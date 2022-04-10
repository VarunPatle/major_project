<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Report;
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
        $userCount = User::count();
        $users = User::all();
        $posts = Post::all();
        $postCount = Post::count();
        return view('admin1', compact('users','posts', 'userCount', 'postCount'));

    }
    public function index2()
    {
        $userCount = User::count();
    
        $posts = Post::all();
        $postCount = Post::count();
        return view('post', compact('posts', 'userCount', 'postCount'));

    }
    public function index3()
    {
        $userCount = User::count();
    
        $reports = Report::all();
        $postCount = Post::count();
        return view('report', compact('reports', 'userCount', 'postCount'));

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

    public function destroy2($id)
    {
        DB::delete('delete from reports where id = ?',[$id]);
        return redirect('/user');
    }

    public function update(Request $request, $id)
    {

       DB::table('users')->where('id',$id)
        ->update(['authenticated' => 1 ]);

        return redirect('/user');

    }




}

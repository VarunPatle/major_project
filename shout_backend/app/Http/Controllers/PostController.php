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

}

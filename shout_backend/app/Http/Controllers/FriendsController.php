<?php

namespace App\Http\Controllers;
use App\Models\friends;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    //
    public function index()
    {
        return friends::all();
    }
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return friends::create($request->all());
    }

    public function search($name){
        return friends::where('name', 'like', '%'.$name.'%')->get();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments; 


class CommentsController extends Controller
{
    public function index()
    {
        return Comments::all();
    }
    public function store(Request $request)
    {
        return Comments::create($request->all());
    }
    public function destroy($id)
    {
        return Comments::destroy($id);
    }
    public function search($id){
        return Comments::where('name', 'like', '%'.$id.'%')->get();
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Friend;
class FriendController extends Controller
{
    public function index()
    {
        return Friend::all();
    }

}

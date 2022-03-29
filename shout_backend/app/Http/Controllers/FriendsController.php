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
}

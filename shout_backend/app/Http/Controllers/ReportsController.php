<?php

namespace App\Http\Controllers;

use App\Models\reports;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function index()
    {
        return reports::all();
    }
    public function store(Request $request)
    {
        return reports::create($request->all());
    }
}

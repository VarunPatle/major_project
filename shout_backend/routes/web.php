<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin1');
});

Route::get('/', [AdminController::class, 'index']);

Route::get('/delete/{id}', [AdminController::class, 'destroy']);
Route::get('/delete1/{id}', [AdminController::class, 'destroy1']);
Route::put('/users/{id}', [AdminController::class, 'update']);
Route::resource('user',AdminController::class);

// Route::get('/post',[PostController::class,'create']);
// Route::post('/post',[PostController::class,'storeImage']);
// Route::get('/getImage',[PostController::class,'getImage']);
Route::get('/reports{id}', function () {
    return view('welcome');
});
Route::get('/reports-on-post/{id}', [PostController::class, 'getReports']);
Route::resource('reports', ReportController::class);


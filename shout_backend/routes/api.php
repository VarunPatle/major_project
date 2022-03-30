<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ReportsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('user',UserController::class);
// Route::resource('post',PostController::class);
Route::resource('comments',CommentsController::class);
Route::resource('friends',FriendsController::class);
Route::resource('reports',ReportsController::class);



Route::delete('user/{id}',[UserController::class,'destroy']);
Route::delete('post/{id}',[PostController::class,'destroy']);
Route::delete('friends/{id}',[FriendsController::class,'destroy']);
Route::delete('comments/{id}',[CommentsController::class,'destroy']);




Route::get('/user/search/{name}', [UserController::class, 'search']);
Route::get('/comments/search/{id}', [CommentsController::class, 'search']);



// // Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
// //     return $request->user();
// });
// Route::middleware('auth:sanctum')->get('/comments', function (Request $request) {
    // return $request->comments();
// });


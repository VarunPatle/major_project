<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReportController;

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
// Route::resource('users',UserController::class);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/search/{name}', [UserController::class, 'search']);
Route::get('/users/posts/{id}', [UserController::class, 'getPostsByUser']);
Route::get('/users/friends/{id}', [UserController::class, 'getFriendsByUser']);
Route::post('/add_friend/{id}', [UserController::class, 'makeFriend']);


// Posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // user
    Route::put('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

    // posts
    Route::put('/posts/{id}', [PostController::class, 'update']);

});
// Route::resource('post',PostController::class);
Route::resource('friends', FriendController::class);
Route::resource('comments', CommentController::class);
Route::resource('reports', ReportController::class);
// Route::resource('posts',PostController::class);










// // Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
// //     return $request->user();
// });
// Route::middleware('auth:sanctum')->get('/comments', function (Request $request) {
    // return $request->comments();
// });


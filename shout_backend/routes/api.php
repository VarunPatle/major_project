<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AuthController;
use Illuminate\Contracts\Cache\Store;

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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'index']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::get('/users/search/{name}', [UserController::class, 'search']);
Route::get('/friends/user/{id}', [UserController::class, 'getFriendsByUser']);
Route::post('/add_friend', [UserController::class, 'addFriend']);


// Posts
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/posts/user/{id}', [UserController::class, 'getPostsByUser']);
Route::get('/posts/user_friend/{id}', [UserController::class, 'getFriendsPosts']);
Route::get('/posts/getImages', [PostController::class, 'getImages']);
Route::get('/posts/{id}', [PostController::class, 'destroy']);



//Route::get('/posts',[PostController::class,'create']);
//Route::post('/posts',[PostController::class,'store']);
// Route::get('/getImage/{id}',[PostController::class,'getImage']);


// user
Route::post('/logout', [AuthController::class, 'logout']);

// posts
Route::post('/posts', [PostController::class, 'store']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    

});
// Route::resource('post',PostController::class);
// Route::resource('friends', FriendController::class);
Route::resource('comments', CommentController::class);
Route::resource('reports', ReportController::class);
// Route::resource('posts',PostController::class);










// // Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
// //     return $request->user();
// });
// Route::middleware('auth:sanctum')->get('/comments', function (Request $request) {
    // return $request->comments();
// });


<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        if($user){
            $response['status'] = 0;
            $response['message'] = 'Eamil already exists';
            $response['code'] = 409;
        }else{
            $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'phone' => $request->phone,
            'city' => $request->city
            ]);
        $response['status'] = 1;
        $response['message'] = 'User created successfully';
        $response['code'] = 200;
        }



        return response()->json($response);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return User::destroy($id);
    }

    // search for a name
    public function search($name){
        return User::where('name', 'like', '%'.$name.'%')->get();
    }

    public function getPostsByUser($id){
        return User::find($id)->getPosts;
    }

    public function getFriendsByUser($id){
        // $ids = User::find($id)->getFriends;
        $posts = DB::table('posts')
        ->join('friends', 'friends.friend_id', '=', 'posts.user_id')
        ->join('users', 'friends.user_id', '=', 'users.id')
        ->where('users.id', '=', $id)
        ->get();

    return $posts;

    }
    // friends
    public function makeFriend(Request $request, $id){
        return Friend::create([
            'user_id' => $id,
            'friend_id' => $request->friend_id
        ]);
    }
}

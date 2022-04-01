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

<<<<<<< HEAD
=======
    public function store(Request $request)
    {
        return Friend::create($request->all());
    }


    public function destroy($id)
    {
        return Friend::where('friend_id',$id)->delete();
    }
    public function show($id)
    {
        return Friend::find($id);
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
        $friend = Friend::find($id);
        $friend->update($request->all());
        return $friend;
    }


    // search for a name
    public function search($name){
        return Friend::where('name', 'like', '%'.$name.'%')->get();
    }

    // public function getFriends(){
    //     $user->friends()->get();
    //     return $user;
    // }

>>>>>>> 1ce23d41b7ef1611cb20d4592a6f8386b20cca69
}

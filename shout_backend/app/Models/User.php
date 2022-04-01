<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class User extends Model
{
    use HasFactory, HasApiTokens;
    protected $fillable = [
        'name',
        'email',
        'dob',
        'password',
        'gender',
        'city'
    ];
    public function getPosts(){
        return $this->hasMany('App\Models\Post');
    }

<<<<<<< HEAD
    public function friends(){
        return $this->belongsToMany('App\Models\User',table: 'friends', foreignPivotKey: 'user_id', relatedPivotKey: 'friend_id');
    }
=======
    // public function friends(){
    //     return $this->belongsToMany('App\Models\User',table: 'friends', foreignPivotKey: 'user_id', relatedPivotKey: 'friend_id');
    // }

    public function friends(){
        return $this->hasMany('App\Models\Friend');
    }

>>>>>>> 1ce23d41b7ef1611cb20d4592a6f8386b20cca69

    
}



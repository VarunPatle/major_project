<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'user_id', 'friend_id', 'status'
    ];

    // function friends(){
    //     return $this->belongsToMany('user', 'friends', 'user_id', 'friend_id');
    //         // if you want to rely on accepted field, then add this:
    //         // ->wherePivot('accepted', '=', 1);
    // }
}

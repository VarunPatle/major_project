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
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // const CREATED_AT = "created_at";
    // public $timestamps = false;
    protected $fillable = [
        'image',
        'user_id',
        'description'

    ];
}

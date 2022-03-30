<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    // public $timestamps = false;
    protected $primaryKey = 'commentId';
    protected $fillable = [
        'commentDate',
        'postId',
        'userId',
        'commentContent'
    ];
}

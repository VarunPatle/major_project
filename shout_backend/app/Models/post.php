<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    const CREATED_AT = "created_at";
    // public $timestamps = false;
    protected $primaryKey = 'postId';
    protected $fillable = [
        'postContent',
        'userId',
        
    ];
}

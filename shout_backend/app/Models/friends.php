<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class friends extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'friendsId';
    protected $fillable = [
        'userId'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reports extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'reportId';
    protected $fillable = [
        'userId',
        'postId',
        'postedDate',
        // 'reportedCmmentContent'

    ];
}

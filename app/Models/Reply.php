<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'post_id',
        'comment',
        'parent_reply_id'
    ];
}

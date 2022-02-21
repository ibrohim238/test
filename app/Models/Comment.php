<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'nickname',
        'content'
    ];

    protected $casts = [
      'created_at' => 'datetime:H:i d-m-Y'
    ];

}

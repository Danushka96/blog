<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titile', 'body',
    ];
    protected $hidden = [
        'id', 'created_at',
    ];
}

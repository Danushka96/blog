<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
	protected $primaryKey = 'role_id';
	
    protected $fillable = [
        'name',
    ];
}

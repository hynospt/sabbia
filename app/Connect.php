<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connect extends Model
{
	protected $table = 'connect';
    protected $fillable = [
    	'id',
    	'title',
    	'content',
    	'bgImage',
    	'created_at',
    	'updated_at',
    ];
}

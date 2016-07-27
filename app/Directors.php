<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directors extends Model
{
    protected $fillable = [
    	'id',
    	'boardId',
    	'fullname',
    	'role',
    	'text',
    	'created_at',
    	'updated_at'
    ];
}

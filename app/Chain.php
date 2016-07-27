<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chain extends Model
{
    protected $fillable = [
    	'id',
    	'title1',
    	'content1',
    	'image1',
    	'title2',
    	'content2',
    	'image2',
    	'created_at',
    	'updated_at',
    ];
}

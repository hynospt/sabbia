<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    protected $fillable = [
    	'id',
    	'title',
    	'mainTitle',
    	'subTitle1',
    	'subTitle2',
    	'subContent1',
    	'subContent2',
    	'image1',
    	'image2',
    	'created_at',
    	'updated_at',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceIcons extends Model
{
    protected $fillable = [
    	'id',
    	'serviceId',
    	'bgImage',
    	'coverImage',
    	'created_at',
    	'updated_at'
    ];
}

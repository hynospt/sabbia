<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceIcons extends Model
{
	protected $table = 'serviceIcons';
    protected $fillable = [
    	'id',
    	'serviceId',
    	'bgImage',
    	'coverImage',
    	'created_at',
    	'updated_at'
    ];
}

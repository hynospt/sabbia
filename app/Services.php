<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $fillable = [
    	'serviceId',
    	'title',
    	'subTitle',
    	'created_at',
    	'updated_at',
    ];

    public function serviceIcons(){
    	return $this->hasMany('App\ServiceIcons');
    }
}

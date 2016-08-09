<?php

namespace App;


class Services extends ExtendedModel
{
    protected $table = 'services';
    protected $primaryKey = 'serviceId';
    protected $fillable = [
    	'serviceId',
    	'title',
    	'subTitle',
    	'created_at',
    	'updated_at',
    ];

     public static $rules = [
        'title'=>'required',
        'subTitle'=>'required',
    ];

    public static $custom_attributes = [

    ];

    public function serviceIcons(){
    	return $this->hasMany('App\ServiceIcons');
    }
}

<?php

namespace App;

class ServiceIcons extends ExtendedModel
{
	protected $table = 'service_icon';
	protected $foreignKey = 'services_id';
    protected $fillable = [
    	'id',
    	'services_id',
    	'bgImage',
    	'coverImage',
    	'created_at',
    	'updated_at'
    ];

    public static $rules = [
        'bgImage' => 'required|mimes:png,jpg,jpeg',
        'coverImage' => 'required|mimes:png,jpg,jpeg',
        'tag' => 'required',
    ];

    public static $custom_attributes = [
        'bgImage' => 'Background Image',
        'coverImage' => 'Cover Image',
    ];

    public function services(){
        return $this->belongsTo('App\Services');
    }
}

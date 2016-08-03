<?php

namespace App;


class Directors extends ExtendedModel
{
	protected $table = 'directors';

    protected $fillable = [
    	'id',
    	'board_id',
    	'fullname',
    	'role',
        'text',
    	'photo',
    	'created_at',
    	'updated_at'
    ];


    public static $rules = [
        'fullname'=>'required',
        'text'=>'required',
        'role'=>'required',
    ];

    public static $custom_attributes = [
        'fullname' => 'Full Name'
    ];

     public function board()
    {
        return $this->belongsTo('App\Board');
    }
}

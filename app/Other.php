<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    protected $fillable = [
    	'id',
    	'copyright',
    	'footerAddress',
    	'created_at',
    	'updated_at',
    ];

    public function designpartners(){
    	return $this->hasMany('App\DesignPartner');
    }
}
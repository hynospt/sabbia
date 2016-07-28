<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignPartner extends Model
{
	protected $table ='design_partners';
    protected $fillable = [
    	'id',
    	'pageId',
    	'image',
    	'created_at',
    	'created_at',
    ];
}

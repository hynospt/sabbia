<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
    	'boardId',
    	'mainTag',
    	'mainBgImage',
    	'mainLogo',
    	'titleRow2',
    	'titleRow3',
    	'contentRow3',
    	'videoUrl1',
    	'videoUrl2',
    	'videoCaption1',
    	'videoCaption2',
    	'text2Row2',
    	'philosophyImg',
    	'philosophyTitle',
    	'philosophyContent',
    	'created_at',
    	'updated_at',
    	'type'
    ];

    public function directors(){
    	return $this->hasMany('App\Directors');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
    	'id',
    	'headerRow1',
    	'text1Row1',
    	'text2Row1',
    	'videoIcon',
    	'videoText',
    	'videoUrl',
    	'bgImageRow1',
    	'productPrice',
    	'productName',
    	'unitType',
    	'text1Row2',
    	'text2Row2',
    	'bgImageRow2',
    	'portfolioTag',
    	'portfolioImage',
    	'created_at',
    	'updated_at',
    	'type'
    ];
}

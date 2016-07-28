<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioPage extends Model
{
    protected $fillable = [
    	'pageId',
    	'title',
    	'bgImage',
    	'logo',
    	'lastRowTitle',
        'partners',
    	'type',
    	'created_at',
    	'updated_at',
    ];

    public function portfolios(){
    	return $this->hasMany('App\Portfolios');
    }
}

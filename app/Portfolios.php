<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolios extends Model
{
    protected $fillable = [
    	'id',
    	'pageId',
    	'partnerLogo',
    	'partnerCompanyName',
    	'partnerContent',
    	'partnerBackgroundImage',
    	'created_at',
    	'updated_at',
    ];

    public function portfolio_page(){
        return $this->belongsTo('App\PortfolioPage');
    }
}

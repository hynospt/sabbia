<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceIcons extends Model
{
	protected $table = 'service_icon';
	protected $foreignKey = 'serviceId';
    protected $fillable = [
    	'id',
    	'services_id',
    	'bgImage',
    	'coverImage',
    	'created_at',
    	'updated_at'
    ];

    public function services(){
        return $this->belongsTo('App\Services');
    }
}

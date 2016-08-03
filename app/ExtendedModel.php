<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Validator;

class ExtendedModel extends Model{
	public static $rules;
	public static $custom_messages = [
        // 'required' => ':attribute isi kolom ini'
    ];
    public static $custom_attributes;
	public static function validate($input){
		$validator =  Validator::make($input, static::$rules, static::$custom_messages, static::$custom_attributes);
		if ($validator->fails()) {
			return $validator->messages();
		}

		return true;
	}

	 public static function create(array $attributes = []){
	 	if(($msg = static::validate($attributes)) instanceOf \Illuminate\Support\MessageBag){
	 		return $msg;
	 	}
	 	return parent::create($attributes);
	 }

	 public function update(array $attributes = [] , array $options = []){
	 	if(($msg = static::validate($attributes)) instanceOf \Illuminate\Support\MessageBag){
	 		return $msg;
	 	}
	 	return parent::update($attributes, $options);
	 }
}
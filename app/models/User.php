<?php

class User extends Eloquent {

	protected $table = 'users';

	public $timestamps = false;

	public static function validate($input) {

		$rules = array(
			'real_name' => 'Required|Min:3|Max:80|Regex:/^([a-z0-9- ])+$/i',
		    'email'  	=> 'Required|Between:3,64|Email|Unique:users',
		    'age'   	=> 'Integer|Min:18',
			'password'	=>'Required|AlphaNum|Between:4,8|Confirmed',
			'password_confirmation'=>'Required|AlphaNum|Between:4,8'
		);

		return Validator::make($input, $rules);
	}

}
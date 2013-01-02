<?php

Route::get('/', function() {
	return View::make('signup');
});

Route::post('signup', function() {
	$v = User::validate(Input::all());

	if ( $v->passes() ) {
		User::create(array(
			'real_name'=>	Input::get('real_name'),
			'email'=> 		Input::get('email'),
			'password'=> 	Hash::make(Input::get('password')),
			'age'=> 		Input::has('age') ? intval(Input::get('age')) : null,
		));

		return 'Thanks for registering!';
	} else {
		return Redirect::to('/')->withErrors($v->getMessages());
	}
});
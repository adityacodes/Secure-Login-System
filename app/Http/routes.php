<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Authentication Routes */
	Route::get('/', 'Auth\AuthController@getLogin');
	Route::post('login', 'LoginController@postLogin');
	Route::get('logout', 'Auth\AuthController@logout');
	 
	// Password Reset Routes...
	Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'Auth\PasswordController@reset');
	 
	// Registration routes...
	Route::get('register', 'Auth\AuthController@showRegistrationForm');
	Route::post('register', 'RegistrationController@postRegister');
	Route::get('register/verify/{confirmationCode}', 'RegistrationController@confirm');

	Route::put('captcha','RegistrationController@captcha');


/* Main Routes */
	Route::get('contact-us', 'MainController@getContact');
	Route::post('contact-us', 'MainController@postContact');

	
/* Admin Routes */
	Route::get('gtpadmin', 'AdminController@index');
	Route::resource('admin/contactus', 'Admin\ContactUsController');

/* User Routes */
	Route::get('dashboard', array(
		'as' => 'dashboard',
		'uses' => 'UserController@getDashboard'
	));
	Route::get('mavro', array(
		'as' => 'mavro',
		'uses' => 'UserController@getMavro'
	));
	Route::get('participants', 'UserController@getParticipants');
	Route::get('referals', 'UserController@getReferals');

	Route::get('profile', 'UserController@getProfile');
	
	Route::get('letter-of-happiness', 'UserController@getHappiness');
	Route::get('promo-tasks', 'UserController@getPromo');


	Route::get('accounts', 'User\AccountController@index');

	Route::get('user/provide-help', 'UserController@getProvideHelp');

	Route::get('notices', 'UserController@getNotices');
	Route::get('news', 'UserController@getNews');
	Route::get('faq', 'UserController@getFaq');
	Route::get('promotion-materials', 'UserController@getPromotionMaterials');
	Route::get('webnairs', 'UserController@getWebnair');
	Route::get('support', 'UserController@getSupport');
	Route::get('web-task-archive', 'UserController@getWebTask');
	Route::get('instructions', 'UserController@getInstructions');


	// Route::resource('users/account', 'User\AccountController');
	Route::resource('users/assignment', 'User\AssignmentController');





	


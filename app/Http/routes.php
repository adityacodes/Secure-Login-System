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
	Route::get('login', 'Auth\AuthController@getLogin');
	Route::post('login', 'LoginController@postLogin');
	Route::get('logout', 'Auth\AuthController@logout');
	 
	// Password Reset Routes...
	Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'Auth\PasswordController@reset');
	 
	// Registration routes...
	Route::get('register', 'RegistrationController@showRegistrationForm');
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
	
	Route::get('user/provide-help', 'UserController@getProvideHelp');

	Route::controller('user', 'User\AccountController');
	Route::controller('/', 'UserController');
	// Route::resource('users/account', 'User\AccountController');
	Route::resource('users/assignment', 'User\AssignmentController');


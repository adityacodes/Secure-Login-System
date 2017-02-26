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

	
	Route::get('dashboard', 'UserController@getDashboard');
	Route::get('participants', 'UserController@getParticipants');
	Route::get('mavro', 'UserController@getMavro');
	Route::get('referals', 'UserController@getReferals');
	Route::get('profile', 'UserController@getProfile');
	Route::get('letter-of-happiness', 'UserController@getHappiness');
	Route::get('accounts', 'UserController@getAccounts');
	Route::get('provide-help', 'UserController@getProvideHelp');
	Route::get('get-help', 'UserController@getGetHelp');
	Route::get('notices', 'UserController@getNotices');
	Route::get('news', 'UserController@getNews');
	Route::get('faq', 'UserController@getFaq');
	Route::get('support', 'UserController@getSupport');
	Route::get('messages', 'UserController@getMessages');

	// Route::controller('user', 'User\ParticipantsController');
	/* USER ACCOUNTS */

	 Route::group(['namespace' => 'User'], function() {

	 	Route::resource('users/assignment', 'AssignmentController');
	 	Route::get('mmmuser/accounts', 'ManageAccountController@getAccounts');
	 	Route::post('mmmuser/account', 'ManageAccountController@storeAccount');
	 	Route::put('mmmuser/account/{account}', 'ManageAccountController@updateAccount');
	 	Route::delete('mmmuser/account/{account}', 'ManageAccountController@destroyAccount');
    });
		


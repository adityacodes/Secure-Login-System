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
	Route::get('adminpanel', 'AdminController@index');
	Route::resource('admin/contactus', 'Admin\ContactUsController');

/* User Routes */
	
	Route::get('user/provide-help', 'UserController@getProvideHelp');
	Route::get('dashboard',[
			'as'=>'dashboard', 
			'uses' => 'UserController@getDashboard'
	]);

	// Route::group(array('middleware' => 'forceSSL'), function() {
		Route::get('participants', 'UserController@getParticipants');
		Route::get('mavro', 'UserController@getMavro');
		Route::get('referals', 'UserController@getReferals');
		Route::get('profile', 'UserController@getProfile');
		Route::get('letter-of-happiness', 'UserController@getHappiness');
		Route::get('accounts', 'UserController@getAccounts');
		
		Route::get('notices', 'UserController@getNotices');
		Route::get('news', 'UserController@getNews');
		Route::get('faq', 'UserController@getFaq');
		Route::get('support', 'UserController@getSupport');
		Route::get('messages', 'UserController@getMessages');
	// });

	// Route::controller('user', 'User\ParticipantsController');
	/* USER ACCOUNTS */
		Route::get('mmmuser/news', 'UserController@populateNews');
    Route::group(['namespace' => 'User', 'prefix' => 'mmmuser'], function() {
	 	Route::resource('assignment', 'AssignmentController');
	 	Route::put('assignment/cancel/{assignment}', 'AssignmentController@cancel');
	 	Route::get('accounts', 'ManageAccountController@getAccounts');
	 	Route::post('account', 'ManageAccountController@storeAccount');
	 	Route::put('account/{account}', 'ManageAccountController@updateAccount');
	 	Route::delete('account/{account}', 'ManageAccountController@destroyAccount');
	 	Route::get('ordersofuser','OrderController@getOrdersByUserId');
	 	Route::get('getprofile', 'ProfileController@getProfileData');
	 	Route::post('saveprofile', 'ProfileController@saveProfile');
	 	Route::post('saveProfieInfo', 'ProfileController@saveProfileInfo');
	 	Route::get('saveTicket', 'TicketController@saveTicket');	
	 	Route::get('participantstree', 'ParticipantsController@participantsTree');
	 	
	 	Route::get('provide-help', 'UserController@getProvideHelp');
    });

	// 
    // Route::get('participants', 'AdminController@getParticipants');
    // Route::get('assignments', 'AdminController@getAssignments');

    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
        Route::get('assignments', 'AssignmentController@getIndex');
        Route::resource('news', 'NewsController');
        Route::resource('orders', 'OrderController');
        Route::resource('support', 'SupportController');
        Route::resource('users', 'UserController');

    });



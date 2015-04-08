<?php

Route::get('/', 'HomeController@getIndex');

Route::get('login', 'LoginController@getLogin');

Route::post('login', 'LoginController@postLogin');

Route::get('logout', 'LoginController@getLogout');

Route::get('sign-up', 'LoginController@getSignup');

Route::post('sign-up', 'LoginController@postSignup');

//Site pages

Route::get('docs', 'DocController@getDoc');

Route::group(['middleware' => 'auth'], function(){

	//if the user is logged in it goes in here. If they are a super_user they go inside the admin middleware.
	Route::get('dashboard', 'DashboardController@getIndex');

	Route::get('dashboard/edit/{user_id}', 'UserController@getStandardEdit');

	Route::post('dashboard/edit/{user_id}', 'UserController@postStandardEdit');

});

// Route group
Route::group(['middleware' => 'admin'], function() {
	Route::get('admin/dashboard', 'AdminController@getIndex');

	Route::get('admin/dashboard/users', 'UserController@getIndex');

	Route::get('admin/dashboard/users/create', 'UserController@getCreate');

	Route::post('admin/dashboard/users/create', 'UserController@postCreate');

	Route::get('admin/dashboard/users/edit/{user_id}', 'UserController@getEdit');

	Route::post('admin/dashboard/users/edit/{user_id}', 'UserController@postEdit');

	Route::get('admin/dashboard/users/delete/{id}', 'UserController@deleteUser');

});
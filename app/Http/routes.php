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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['domain' => 'local-api.prex.io', 'domain' => 'api.prex.io'], function() {
  // All API routes
});

Route::group(['domain' => 'local-webhooks.prex.io', 'domain' => 'webhooks.prex.io'], function() {
  // All Webhooks routes
});

Route::group(['domain' => 'local-admin.prex.io', 'domain' => 'admin.prex.io'], function() {
  // All Admin routes
});

Route::group(['domain' => 'local.prex.io', 'domain' => 'prex.io'], function() {
  // All Site routes
});
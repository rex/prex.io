<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'key' => '',
		'secret' => '',
	],

	'soundcloud' => [
		'client_id' => env('SOUNDCLOUD_CLIENT_ID'),
		'client_secret' => env('SOUNDCLOUD_CLIENT_SECRET'),
		'user_id' => env('SOUNDCLOUD_USER_ID'),
		'callback_url' => '',
		'cache_namespace' => 'services:soundcloud',
		'cache_ttl' => 86400
	],

	'twitter' => [
		'screen_name' => env('TWITTER_HANDLE'),
		'cache_namespace' => 'services:twitter',
		'cache_ttl' => 86400
	],

	'digitalocean' => [
		'cache_namespace' => 'services:digitalocean',
		'cache_ttl' => 3600
	],

	'instagram' => [
		'cache_namespace' => 'services:instagram',
		'cache_ttl' => 86400,
		'user_id' => env('INSTAGRAM_USER_ID')
	],

	'mixcloud' => [
		'cache_namespace' => 'services:mixcloud',
		'cache_ttl' => 86400,
		'handle' => env('MIXCLOUD_HANDLE')
	],

	'npm' => [
		'username' => env('NPM_USERNAME')
	]
];

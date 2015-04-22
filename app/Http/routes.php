<?php

function route_listing($namespace) {
  return response()->json( App\Helpers\LoadedRoutes::listing([
    'routes' => Route::getRoutes(),
    'namespace' => $namespace,
    'as_array' => true
  ]) );
};

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

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

/**
 *  In order to make multiple subdomain groups possible, declare all routes
 *  in separate function blocks and then map them to each group.
 */
$api_routes = function() {
  Route::get('/', 'Api\RootController@index');
  Route::group(['prefix' => 'digitalocean'], function() {
    Route::get('/', 'Api\DigitaloceanController@index');
    Route::get('/droplets', 'Api\DigitaloceanController@droplets');
    Route::get('/droplets/{droplet_id}', 'Api\DigitaloceanController@droplet');
  });

  Route::get('/routes', function() { return route_listing('\Api'); });
  Route::get('/routes_2', function() {
    return App\Helpers\LoadedRoutes::namespaceRoutes('\Api');
  });
};

$webhook_routes = function() {
  //
};

$admin_routes = function() {
  //
};

$site_routes = function() {
  Route::get('/', 'HomeController@index');
  //
};

// API Routes
if(env('APP_ENV') == 'local') {
  Route::group(['domain' => 'local-api.prex.io'], $api_routes);
  Route::group(['domain' => 'local-webhooks.prex.io'], $webhook_routes);
  Route::group(['domain' => 'local-admin.prex.io'], $admin_routes);
  Route::group(['domain' => 'local.prex.io'], $site_routes);
}

if(env('APP_ENV') == 'production') {
  Route::group(['domain' => 'api.prex.io'], $api_routes);
  Route::group(['domain' => 'webhooks.prex.io'], $webhook_routes);
  Route::group(['domain' => 'admin.prex.io'], $admin_routes);
  Route::group(['domain' => 'prex.io'], $site_routes);
}
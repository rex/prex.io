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
    Route::get('/droplets/{droplet_id}', 'Api\DigitaloceanController@droplet');
    Route::get('/droplets', 'Api\DigitaloceanController@droplets');
    Route::get('/', 'Api\DigitaloceanController@index');
  });

  Route::group(['prefix' => 'mixcloud'], function() {
    Route::get('/users/{user_id}', 'Api\MixcloudController@user');
    Route::get('/users', 'Api\MixcloudController@users');
    Route::get('/cloudcasts/{cloudcast_id}', 'Api\MixcloudController@cloudcast');
    Route::get('/cloudcasts', 'Api\MixcloudController@cloudcasts');
    Route::get('/', 'Api\MixcloudController@index');
  });

  Route::group(['prefix' => 'linkedin'], function() {
    Route::get('/users/{user_id}', 'Api\LinkedinController@user');
    Route::get('/users', 'Api\LinkedinController@users');
    Route::get('/positions/{position_id}', 'Api\LinkedinController@position');
    Route::get('/positions', 'Api\LinkedinController@positions');
    Route::get('/', 'Api\LinkedinController@index');
  });

  Route::group(['prefix' => 'instagram'], function() {
    Route::get('/users/{user_id}', 'Api\InstagramController@user');
    Route::get('/users', 'Api\InstagramController@users');
    Route::get('/posts/{post_id}', 'Api\InstagramController@post');
    Route::get('/posts', 'Api\InstagramController@posts');
    Route::get('/', 'Api\InstagramController@index');
  });

  Route::group(['prefix' => 'soundcloud'], function() {
    Route::get('/users/{user_id}', 'Api\SoundcloudController@user');
    Route::get('/users', 'Api\SoundcloudController@users');
    Route::get('/tracks/{track_id}', 'Api\SoundcloudController@track');
    Route::get('/tracks', 'Api\SoundcloudController@tracks');
    Route::get('/playlists/{playlist_id}', 'Api\SoundcloudController@playlist');
    Route::get('/playlists', 'Api\SoundcloudController@playlists');
    Route::get('/', 'Api\SoundcloudController@index');
  });

  Route::group(['prefix' => 'itunes'], function() {
    Route::get('/albums/{album_id}', 'Api\ItunesController@album');
    Route::get('/albums', 'Api\ItunesController@albums');
    Route::get('/tracks/{track_id}', 'Api\ItunesController@track');
    Route::get('/tracks', 'Api\ItunesController@tracks');
    Route::get('/wishlist_items/{wishlist_item_id}', 'Api\ItunesController@wishlist_item');
    Route::get('/wishlist_items', 'Api\ItunesController@wishlist_items');
    Route::get('/', 'Api\ItunesController@index');
  });

  Route::group(['prefix' => 'twitter'], function() {
    Route::get('/users/{user_id}', 'Api\TwitterController@user');
    Route::get('/users', 'Api\TwitterController@users');
    Route::get('/tweets/{tweet_id}', 'Api\TwitterController@tweet');
    Route::get('/tweets', 'Api\TwitterController@tweets');
    Route::get('/media_objects/{media_object_id}', 'Api\TwitterController@media_object');
    Route::get('/media_objects', 'Api\TwitterController@media_objects');
    Route::get('/', 'Api\TwitterController@index');
  });

  Route::group(['prefix' => 'lastfm'], function() {
    Route::get('/nowplaying', 'Api\LastfmController@nowplaying');
    Route::get('/users/{user_id}', 'Api\LastfmController@user');
    Route::get('/users', 'Api\LastfmController@users');
    Route::get('/scrobbles/{scrobble_id}', 'Api\LastfmController@scrobble');
    Route::get('/scrobbles', 'Api\LastfmController@scrobbles');
    Route::get('/tracks/{track_id}', 'Api\LastfmController@track');
    Route::get('/tracks', 'Api\LastfmController@tracks');
    Route::get('/artists/{artist_id}', 'Api\LastfmController@artist');
    Route::get('/artists', 'Api\LastfmController@artists');
    Route::get('/albums/{album_id}', 'Api\LastfmController@album');
    Route::get('/albums', 'Api\LastfmController@albums');
    Route::get('/', 'Api\LastfmController@index');
  });

  Route::group(['prefix' => 'github'], function() {
    Route::get('/users/{user_id}', 'Api\GithubController@user');
    Route::get('/users', 'Api\GithubController@users');
    Route::get('/repos/{repo_id}', 'Api\GithubController@repo');
    Route::get('/repos', 'Api\GithubController@repos');
    Route::get('/pushes/{push_id}', 'Api\GithubController@push');
    Route::get('/pushes', 'Api\GithubController@pushes');
    Route::get('/commits/{commit_id}', 'Api\GithubController@commit');
    Route::get('/commits', 'Api\GithubController@commits');
    Route::get('/gists/{gist_id}', 'Api\GithubController@gist');
    Route::get('/gists', 'Api\GithubController@gists');
    Route::get('/issues/{issue_id}', 'Api\GithubController@issue');
    Route::get('/issues', 'Api\GithubController@issues');
    Route::get('/organizations/{organization_id}', 'Api\GithubController@organization');
    Route::get('/organizations', 'Api\GithubController@organizations');
    Route::get('/events/{event_id}', 'Api\GithubController@event');
    Route::get('/events', 'Api\GithubController@events');
    Route::get('/', 'Api\GithubController@index');
  });

  Route::get('/routes', function() { return dd( Route::getRoutes() ); });

  Route::any('{catchall}', function($page) {
    dd("404! $page requested!");
  })->where('catchall', '(.*)');
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
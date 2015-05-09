<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Services\Traits\JsonService;
use App\Models\Soundcloud\User;
use App\Models\Soundcloud\Track;
use App\Models\Soundcloud\Playlist;
use Config;
use Log;

class Soundcloud extends BaseService {
  public function __construct() {
    parent::__construct();
    $this->cache_namespace = Config::get('services.soundcloud.cache_namespace');
    $this->cache_ttl = Config::get('services.soundcloud.cache_ttl');
    $this->http_client_options = [
      'base_url' => 'https://api.soundcloud.com/',
      'defaults' => [
        'query' => [
          'client_id' => Config::get('services.soundcloud.client_id')
        ]
      ]
    ];
  }

  public function card() {
    $me = $this->getUserId();

    return [
      'user' => $this->user($me),
      'tracks' => $this->tracks($me),
      'playlists' => $this->playlists($me)
    ];
  }

  public function users() {
    //
  }

  public function user($user_id) {
    $user_id = $this->getUserId($user_id);

    return $this->fetchAndCache("/users/$user_id.json", [
      "cache_key" => "/users/$user_id"
    ]);
  }

  public function tracks($user_id) {
    $user_id = $this->getUserId($user_id);

    return $this->fetchAndCache("/users/$user_id/tracks.json", [
      "cache_key" => "/users/$user_id/tracks"
    ]);
  }

  public function track($track_id) {
    return $this->fetchAndCache("/tracks/$track_id.json", [
      "cache_key" => "/tracks/$track_id"
    ]);
  }

  public function playlists($user_id) {
    $user_id = $this->getUserId($user_id);

    return $this->fetchAndCache("/users/$user_id/playlists.json", [
      "cache_key" => "/users/$user_id/playlists"
    ]);
  }

  public function playlist($playlist_id) {
    return $this->fetchAndCache("/playlists/$playlist_id.json", [
      "cache_key" => "/playlists/$playlist_id"
    ]);
  }

  private function getUserId($user_id = null) {
    if($user_id == null || $user_id == "self")
      return Config::get('services.soundcloud.user_id');
    else
      return $user_id;
  }
}
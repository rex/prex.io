<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Services\Traits\JsonService;
use App\Models\Soundcloud\User;
use App\Models\Soundcloud\Track;
use App\Models\Soundcloud\Playlist;

class Soundcloud {
  use JsonService;

  public static function users() {
    //
  }

  public static function user($user_id) {
    return self::fetchJson("/users/$user_id.json");
  }

  public static function tracks($user_id) {
    return self::fetchJson("/users/$user_id/tracks.json");
  }

  public static function track($track_id) {
    return self::fetchJson("/tracks/$track_id.json");
  }

  public static function playlists($user_id) {
    return self::fetchJson("/users/$user_id/playlists.json");
  }

  public static function playlist($playlist_id) {
    return self::fetchJson("/playlists/$playlist_id.json");
  }

  private static function client() {
    return new Http([
      'base_url' => 'https://api.soundcloud.com/',
      'defaults' => [
        'query' => [
          'client_id' => env('SOUNDCLOUD_CLIENT_ID')
        ]
      ]
    ]);
  }
}
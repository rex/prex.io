<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Services\Traits\JsonService;

class Instagram {
  use JsonService;

  public static function users() {
    //
  }

  public static function user($user_id) {
    if($user_id == "self")
      $user_id = env('INSTAGRAM_USER_ID');

    return self::fetchJson("users/$user_id", "data");
  }

  public static function posts($user_id) {
    if($user_id == "self")
      $user_id = env('INSTAGRAM_USER_ID');

    return self::fetchJson("users/$user_id/media/recent", "data");
  }

  public static function post($post_id) {
    return self::fetchJson("media/$post_id", "data");
  }

  private static function client() {
    return new Http([
      'base_url' => 'https://api.instagram.com/v1/',
      'defaults' => [
        'query' => [
          'access_token' => env('INSTAGRAM_ACCESS_TOKEN')
        ]
      ]
    ]);
  }
}
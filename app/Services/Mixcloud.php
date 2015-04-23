<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Models\Mixcloud\User;
use App\Models\Mixcloud\Cloudcast;

class Mixcloud {
  /**
   * @param $endpoint String The URI for the desired endpoint
   * @param $response_key String If a nested response, return this key from the response array
   */
  public static function fetchJson($endpoint, $response_key = null) {
    $response = self::client()->get($endpoint);

    if($response_key)
      return $response->json()[$response_key];
    else
      return $response->json();
  }

  public static function users() {
  }

  public static function user($username) {
    return self::fetchJson($username);
  }

  public static function cloudcasts($username) {
    return self::fetchJson("$username/cloudcasts", "data");
  }

  public static function cloudcast($username, $cloudcast_slug) {
    return self::fetchJson("$username/$cloudcast_slug");
  }

  private static function client() {
    return new Http(['base_url' => "http://api.mixcloud.com/"]);
  }
}
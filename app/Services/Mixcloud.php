<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Services\Traits\JsonService;
use App\Models\Mixcloud\User;
use App\Models\Mixcloud\Cloudcast;

class Mixcloud {
  use JsonService;

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
<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Services\Traits\JsonService;

class RubyGems {
  use JsonService;

  public static function gems() {
    return self::fetchJson("gems.json");
  }

  public static function gem($gem_name) {
    return self::fetchJson("gems/$gem_name.json");
  }

  private static function client() {
    return new Http([
      'base_url' => 'https://rubygems.org/api/v1/',
      'defaults' => [
        'headers' => [
          'Authorization' => env('RUBYGEMS_ACCESS_TOKEN')
        ]
      ]
    ]);
  }
}
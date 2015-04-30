<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Services\Traits\JsonService;

class Npm {
  use JsonService;

  public function modules() {
    $username = env('NPM_USERNAME');

    return self::fetchJson("-/_view/browseAuthors?group_level=3&start_key=%5B%22$username%22%5D&end_key=%5B%22$username%22,%7B%7D%5D", 'rows', function($module) {
      return self::fetchJson($module['key'][1]);
    });
  }

  public function module($package_name) {
    return self::fetchJson($package_name);
  }

  public function client() {
    return new Http([
      'base_url' => 'http://registry.npmjs.org/'
    ]);
  }


}
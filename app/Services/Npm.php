<?php namespace App\Services;

use Config;

class Npm extends BaseService {
  public function __construct() {
    parent::__construct();
    $this->cache_namespace = Config::get('services.npm.cache_namespace');
    $this->cache_ttl = Config::get('services.npm.cache_ttl');
    $this->http_client_options = [
      'base_url' => 'http://registry.npmjs.org/'
    ];
  }

  public function modules() {
    $username = Config::get('services.npm.username');

    return self::fetchAndCache("-/_view/browseAuthors?group_level=3&start_key=%5B%22$username%22%5D&end_key=%5B%22$username%22,%7B%7D%5D", [
      "response_key" => 'rows',
      "cache_key" => "users:$username:modules",
      "transform_result" => function($module) {
        return self::fetchJsonEndpoint($module['key'][1]);
      }
    ]);
  }

  public function module($package_name) {
    return self::fetchAndCache($package_name);
  }
}
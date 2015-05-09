<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Services\Traits\JsonService;
use Config;

class RubyGems extends BaseService {
  public function __construct() {
    parent::__construct();
    $this->cache_namespace = Config::get('services.rubygems.cache_namespace');
    $this->cache_ttl = Config::get('services.rubygems.cache_ttl');
    $this->http_client_options = [
      'base_url' => 'https://rubygems.org/api/v1/',
      'defaults' => [
        'headers' => [
          'Authorization' => env('RUBYGEMS_ACCESS_TOKEN')
        ]
      ]
    ];
  }

  public function card() {
    return [
      'gems' => $this->gems()
    ];
  }

  public function gems() {
    return self::fetchAndCache("gems.json", [
      'cache_key' => 'gems'
    ]);
  }

  public function gem($gem_name) {
    return self::fetchAndCache("gems/$gem_name.json", [
      'cache_key' => 'gems'
    ]);
  }
}
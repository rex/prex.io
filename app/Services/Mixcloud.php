<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Services\Traits\JsonService;
use App\Models\Mixcloud\User;
use App\Models\Mixcloud\Cloudcast;
use Config;

class Mixcloud extends BaseService {
  public function __construct() {
    parent::__construct();
    $this->cache_namespace = Config::get('services.mixcloud.cache_namespace');
    $this->cache_ttl = Config::get('services.mixcloud.cache_ttl');
    $this->http_client_options = [
      'base_url' => "http://api.mixcloud.com/"
    ];
  }

  public function card() {
    $me = $this->getUsername();

    return [
      'user' => $this->user($me),
      'cloudcasts' => $this->cloudcasts($me)
    ];
  }

  public function users() {
    //
  }

  public function user($username) {
    $username = $this->getUsername($username);

    return $this->fetchAndCache($username, [
      'cache_key' => "users:$username"
    ]);
  }

  public function cloudcasts($username) {
    $username = $this->getUsername($username);

    return $this->fetchAndCache("$username/cloudcasts", [
      "response_key" => "data"
    ]);
  }

  public function cloudcast($username, $cloudcast_slug) {
    return $this->fetchAndCache("$username/$cloudcast_slug", [
      'cache_key' => "$username/cloudcasts/$cloudcast_slug"
    ]);
  }

  private function getUsername($username = null) {
    if($username == null || $username == "self")
      return Config::get('services.mixcloud.handle');
    else
      return $username;
  }
}
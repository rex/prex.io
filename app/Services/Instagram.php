<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Services\Traits\JsonService;
use Config;
use Carbon;

class Instagram extends BaseService {
  public function __construct() {
    parent::__construct();
    $this->cache_namespace = Config::get('services.instagram.cache_namespace');
    $this->cache_ttl = Config::get('services.instagram.cache_ttl');
    $this->http_client_options = [
      'base_url' => 'https://api.instagram.com/v1/',
      'defaults' => [
        'query' => [
          'access_token' => env('INSTAGRAM_ACCESS_TOKEN')
        ]
      ]
    ];
  }

  public function users() {
    //
  }

  public function user($user_id) {
    $user_id = $this->getUserId($user_id);

    return $this->fetchAndCache("users/$user_id", [
      "response_key" => "data"
    ]);
  }

  public function posts($user_id) {
    $user_id = $this->getUserId($user_id);

    return $this->fetchAndCache("users/$user_id/media/recent", [
      "response_key" => "data"
    ]);
  }

  public function latestPost($user_id) {
    $user_id = $this->getUserId($user_id);

    return $this->fetchAndCache("users/$user_id/media/recent", [
      "response_key" => "data",
      "single_item_array" => true,
      "http_options" => [
        "query" => [
          "count" => 1
        ]
      ],
      "cache_key" => "users:$user_id:media:latest"
    ]);
  }

  public function post($post_id) {
    return $this->fetchAndCache("media/$post_id", [
      "response_key" => "data"
    ]);
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

  private function getUserId($user_id) {
    if($user_id == null || $user_id == "self")
      return Config::get('services.instagram.user_id');
    else
      return $user_id;
  }
}
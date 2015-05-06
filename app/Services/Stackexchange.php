<?php namespace App\Services;

use Config;

class Stackexchange extends BaseService {
  public function __construct() {
    parent::__construct();
    $this->cache_namespace = Config::get('services.stackexchange.cache_namespace');
    $this->cache_ttl = Config::get('services.stackexchange.cache_ttl');
    $this->http_client_options = [
      'base_url' => 'https://api.stackexchange.com/2.2/'
    ];
  }

  public function allAccounts() {
    $account_map = Config::get('services.stackexchange.user_ids');
    $accounts = [];

    foreach($account_map as $site_name => $user_id) {
      array_push($accounts, $this->siteAccount($user_id, $site_name));
    }

    return $accounts;
  }

  public function siteAccount($user_id, $site_name) {
    $cache_key = "sites:$site_name:users:$user_id:full";

    $site_info = [
      'site' => $site_name,
      'user_id' => $user_id,
      'user' => $this->user($user_id, $site_name),
      'badges' => $this->badges($user_id, $site_name),
      'questions' => $this->questions($user_id, $site_name),
      'answers' => $this->answers($user_id, $site_name)
    ];

    return $site_info;
  }

  public function user($user_id, $site_name) {
    return $this->fetchAndCache("users/$user_id", [
      "response_key" => "items",
      "single_item_array" => true,
      "cache_key" => "sites:$site_name:users:$user_id",
      "http_options" => [
        "query" => [
          "site" => $site_name
        ]
      ]
    ]);
  }

  public function badges($user_id, $site_name) {
    return $this->fetchAndCache("users/$user_id/badges", [
      "response_key" => "items",
      "http_options" => [
        "query" => [
          "site" => $site_name
        ]
      ]
    ]);
  }

  public function questions($user_id, $site_name) {
    return $this->fetchAndCache("users/$user_id/questions", [
      "response_key" => "items",
      "http_options" => [
        "query" => [
          "site" => $site_name
        ]
      ]
    ]);
  }

  public function question($question_id, $site_name) {
    return $this->fetchAndCache("questions/$question_id", [
      "response_key" => "items",
      "single_item_array" => true,
      "http_options" => [
        "query" => [
          "site" => $site_name
        ]
      ]
    ]);
  }

  public function answers($user_id, $site_name) {
    return $this->fetchAndCache("users/$user_id/answers", [
      "response_key" => "items",
      "http_options" => [
        "query" => [
          "site" => $site_name
        ]
      ],
      "transform_result" => function($answer) use ($site_name) {
        $answer["question"] = $this->question($answer['question_id'], $site_name);
        return $answer;
      }
    ]);
  }

  public function answer($answer_id, $site_name) {
    return $this->fetchAndCache("answers/$answer_id", [
      "response_key" => "items",
      "single_item_array" => true,
      "http_options" => [
        "query" => [
          "site" => $site_name
        ]
      ]
    ]);
  }
}
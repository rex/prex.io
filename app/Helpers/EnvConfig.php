<?php namespace App\Helpers;

class EnvConfig {
  public static final function get() {
    if(\App::environment('local')) {
      $endpoints = [
        'api_root' => 'http://local-api.prex.io/',
        'webhooks_root' => 'http://local-webhooks.prex.io',
        'admin_root' => 'http://local-admin.prex.io'
      ];
    } else if($app->environment('production')) {
      $endpoints = [
        'api_root' => 'http://api.prex.io/',
        'webhooks_root' => 'http://webhooks.prex.io',
        'admin_root' => 'http://admin.prex.io'
      ];
    } else {
      throw new Exception("Invalid environment configuration!");
    }

    return $endpoints;
  }
}
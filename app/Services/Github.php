<?php namespace App\Services;

use GuzzleHttp\Client as Http;
use App\Services\Traits\JsonService;

class Github {
  use JsonService;

  public function users() {
    //
  }

  public function user($username) {
    return fetchJson("users/$username");
  }

  public function repos($username) {
    return fetchJson("users/$username/repos");
  }

  public function repo($username, $repo_name) {
    return fetchJson("repos/$username/$repo_name");
  }

  public function gists($username) {
    return fetchJson("users/$username/gists");
  }

  public function gist($gist_id) {
    return fetchJson("gists/$gist_id");
  }

  public function client() {
    return new Http([
      'base_url' => 'https://api.github.com/'
    ]);
  }
}
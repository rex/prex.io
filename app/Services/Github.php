<?php namespace App\Services;

use Config;

class Github extends BaseService {
  public function __construct() {
    parent::__construct();
    $this->cache_namespace = Config::get('services.github.cache_namespace');
    $this->cache_ttl = Config::get('services.github.cache_ttl');
    $this->http_client_options = [
      'base_url' => 'https://api.github.com/',
      'headers' => [
        'Accept' => 'application/vnd.github.moondragon+json'
      ]
    ];
  }

  public function users() {
    //
  }

  public function user($username) {
    $username = $this->getUsername($username);
    return $this->fetchAndCache("users/$username");
  }

  public function repos($username) {
    $username = $this->getUsername($username);
    return $this->fetchAndCache("users/$username/repos", [
      'http_options' => [
        'query' => [
          'sort' => 'pushed',
          'direction' => 'desc'
        ]
      ]
    ]);
  }

  public function repo($username, $repo_name) {
    return $this->fetchAndCache("repos/$username/$repo_name");
  }

  public function repoLanguages($username, $repo_name) {
    $username = $this->getUsername($username);
    return $this->fetchAndCache("repos/$username/$repo_name/languages");
  }

  public function gists($username) {
    $username = $this->getUsername($username);
    return $this->fetchAndCache("users/$username/gists");
  }

  public function gist($gist_id) {
    return $this->fetchAndCache("gists/$gist_id");
  }

  public function gistComments($gist_id) {
    return $this->fetchAndCache("gists/$gist_id/comments");
  }

  public function organizations($username) {
    $username = $this->getUsername($username);
    return $this->fetchAndCache("/users/$username/orgs");
  }

  public function organization($organization_name) {
    return $this->fetchAndCache("/orgs/$organization_name");
  }

  public function organizationRepos($organization_name) {
    return $this->fetchAndCache("/orgs/$organization_name/repos");
  }

  public function organizationMembers($organization_name) {
    return $this->fetchAndCache("/orgs/$organization_name/public_members");
  }

  private function getUsername($username) {
    if($username == null || $username == "self")
      return Config::get('services.github.handle');
    else
      return $username;
  }
}
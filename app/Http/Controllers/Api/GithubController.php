<?php namespace App\Http\Controllers\Api;

use App\Services\Github;

class GithubController extends ApiController {
  public $route_namespace = "\Api\Github";

  public function __construct() {
    $this->github = new Github();
  }

  public function index() {
    return $this->endpointRoot();
  }

  public function users() {
    //
  }

  public function user($username) {
    return $this->respond( $this->github->user($username) );
  }

  public function repos($username) {
    return $this->respond( $this->github->repos($username) );
  }

  public function repo($username, $repo_name) {
    return $this->respond( $this->github->repo($username, $repo_name) );
  }

  public function repoLanguages($username, $repo_name) {
    return $this->respond( $this->github->repoLanguages($username, $repo_name) );
  }

  public function gists($username) {
    return $this->respond( $this->github->gists($username) );
  }

  public function gist($gist_id) {
    return $this->respond( $this->github->gist($gist_id) );
  }

  public function gistComments($gist_id) {
    return $this->respond( $this->github->gistComments($gist_id) );
  }

  public function organizations($username) {
    return $this->respond( $this->github->organizations($username) );
  }

  public function organization($organization_name) {
    return $this->respond( $this->github->organization($organization_name) );
  }

  public function organizationRepos($organization_name) {
    return $this->respond( $this->github->organizationRepos($organization_name) );
  }

  public function organizationMembers($organization_name) {
    return $this->respond( $this->github->organizationMembers($organization_name) );
  }
}
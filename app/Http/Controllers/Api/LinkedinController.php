<?php namespace App\Http\Controllers\Api;

use App\Services\Linkedin;

class LinkedinController extends ApiController {
  public $route_namespace = "\Api\Linkedin";

  public function index() {
    return $this->endpointRoot();
  }

  public function card() {
    return $this->respond( $this->linkedin->card() );
  }
}
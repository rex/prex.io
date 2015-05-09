<?php namespace App\Http\Controllers\Api;

use App\Services\Itunes;

class ItunesController extends ApiController {
  public $route_namespace = "\Api\Itunes";

  public function index() {
    return $this->endpointRoot();
  }

  public function card() {
    return $this->respond( $this->itunes->card() );
  }
}
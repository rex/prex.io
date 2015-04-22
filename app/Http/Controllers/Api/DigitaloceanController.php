<?php namespace App\Http\Controllers\Api;

use App\Services\Digitalocean;

class DigitaloceanController extends ApiController {
  public $route_namespace = "\Api\Digitalocean";

  public function index() {
    return $this->endpointRoot();
  }

  public function droplets() {
    return $this->respond( Digitalocean::droplets() );
  }

  public function droplet($droplet_id) {
    return $this->respond( Digitalocean::droplet($droplet_id) );
  }
}
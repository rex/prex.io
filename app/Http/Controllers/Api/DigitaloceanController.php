<?php namespace App\Http\Controllers\Api;

use App\Services\Digitalocean;

class DigitaloceanController extends ApiController {
  public $route_namespace = "\Api\Digitalocean";

  public function __construct() {
    $this->digitalocean = new Digitalocean();
  }

  public function index() {
    return $this->endpointRoot();
  }

  public function card() {
    return $this->respond( $this->digitalocean->card() );
  }

  public function droplets() {
    return $this->respond( $this->digitalocean->droplets() );
  }

  public function droplet($droplet_id) {
    return $this->respond( $this->digitalocean->droplet($droplet_id) );
  }
}
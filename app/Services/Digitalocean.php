<?php namespace App\Services;

use GrahamCampbell\DigitalOcean\Facades\DigitalOcean as DOFacade;
use App\Models\Digitalocean\Droplet;

class Digitalocean {
  public static function droplets() {
    return DOFacade::droplet()->getAll();
  }

  public static function droplet($droplet_id) {
    return DOFacade::droplet()->getById($droplet_id);
  }
}
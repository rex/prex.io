<?php namespace App\Services;

use GrahamCampbell\DigitalOcean\Facades\DigitalOcean as DOFacade;
use App\Models\Digitalocean\Droplet;
use Config;
use Carbon;

class Digitalocean extends BaseService {
  public function __construct() {
    parent::__construct();
    $this->cache_namespace = Config::get('services.digitalocean.cache_namespace');
    $this->cache_ttl = Config::get('services.digitalocean.cache_ttl');
  }

  public function card() {
    return [
      'droplets' => $this->droplets()
    ];
  }

  public function droplets() {
    $cache_key = "droplets";

    if($this->isCached($cache_key))
      return $this->cachedObject($cache_key);

    $droplets = DOFacade::droplet()->getAll();

    return $this->cacheObject($cache_key, $droplets);
  }

  public function droplet($droplet_id) {
    $cache_key = "droplets:$droplet_id";

    if($this->isCached($cache_key))
      return $this->cachedObject($cache_key);

    $droplet = DOFacade::droplet()->getById($droplet_id);

    return $this->cacheObject($cache_key, $droplet);
  }
}
<?php namespace App\Services;

use Vinkla\Instagram\Facades\Instagram as InstagramFacade;

class Instagram {
  public static function likes() {
    return InstagramFacade::getUserLikes();
  }
}
<?php namespace App\Http\Controllers\Api;

use App\Services\Stackexchange;

class StackexchangeController extends ApiController {
  public $route_namespace = "\Api\Stackexchange";

  public function __construct() {
    $this->stackexchange = new Stackexchange();
  }

  public function index() {
    return $this->endpointRoot();
  }

  public function accounts() {
    return $this->respond( $this->stackexchange->allAccounts() );
  }

  public function users() {
    //
  }

  public function user($user_id) {
    return $this->respond( $this->stackexchange->user($user_id) );
  }

  public function questions($user_id) {
    return $this->respond( $this->stackexchange->questions($user_id) );
  }

  public function question($question_id) {
    return $this->respond( $this->stackexchange->question($question_id) );
  }

  public function badges($user_id) {
    return $this->respond( $this->stackexchange->badges($user_id) );
  }

  public function badge($badge_id) {
    return $this->respond( $this->stackexchange->badge($badge_id) );
  }
}
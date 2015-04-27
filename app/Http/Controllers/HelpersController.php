<?php namespace App\Http\Controllers;

class HelpersController extends Controller {
  public function __construct() {}

  public function patterns($pattern = null) {
    $data = [
      'pattern' => $pattern,
      'patterns' => [
        'batthern',
        'cubes',
        'escheresque_ste',
        'gridme',
        'noisy_grid',
        'random_grey_variations',
        'tex2res4',
        'triangular',
        'bo_play_pattern',
        'cutcube',
        'gplaypattern',
        'hexellence',
        'purty_wood',
        'retina_wood',
        'tileable_wood_texture',
        'bright_squares',
        'diamond_upholstery',
        'graphy',
        'inflicted',
        'pyramid',
        'struckaxiom',
        'tiny_grid'
      ],
      'single_pattern' => ($pattern != null)
    ];

    return view('helpers.patterns', $data);
  }
}
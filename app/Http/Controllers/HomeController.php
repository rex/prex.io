<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() { }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subtle_patterns = [
			'batthern',
			'cubes',
			'escheresque_ste',
			'gridme',
			'noisy_grid',
			'random_grey_variations',
			// 'tex2res4',
			'triangular',
			// 'bo_play_pattern',
			'cutcube',
			'gplaypattern',
			'hexellence',
			// 'purty_wood',
			// 'retina_wood',
			// 'tileable_wood_texture',
			'bright_squares',
			'diamond_upholstery',
			'graphy',
			'inflicted',
			'pyramid',
			'struckaxiom',
			'tiny_grid'
		];

		return view('home', ['subtle_patterns' => $subtle_patterns]);
	}

}

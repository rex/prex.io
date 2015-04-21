<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Digitalocean\Droplet;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('DigitaloceanSeeder');
	}

}

class UserTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		User::create(['email' => 'foo@bar.com']);
	}
}

class DigitaloceanSeeder extends Seeder {
	public function run() {
		$attr = [
			'foo' => 'bar',
			'bar' => 'baz',
			'baz' => [
				'quux' => 12345
			]
		];

		DB::table('social_digitalocean_droplets')->delete();
		Droplet::create(['digitalocean_id' => 12345, 'meta' => json_encode($attr)]);
	}
}
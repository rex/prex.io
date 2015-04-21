<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoundcloudTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_soundcloud_users', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('soundcloud_id');
			$table->string('username');
			$table->json('meta');
			$table->timestamps();
		});

		Schema::create('social_soundcloud_tracks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('soundcloud_id');
			$table->string('slug');
			$table->json('meta');
			$table->timestamps();
		});

		Schema::create('social_soundcloud_playlists', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('soundcloud_id');
			$table->json('meta');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('social_soundcloud_users');
		Schema::drop('social_soundcloud_tracks');
		Schema::drop('social_soundcloud_playlists');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLastfmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_lastfm_users', function(Blueprint $table) {
		  $table->increments('id');
		  $table->integer('lastfm_id');
		  $table->json('meta');
		  $table->timestamps();
		});

		Schema::create('social_lastfm_scrobbles', function(Blueprint $table) {
		  $table->increments('id');
		  $table->integer('lastfm_id');
		  $table->json('meta');
		  $table->timestamps();
		});

		Schema::create('social_lastfm_tracks', function(Blueprint $table) {
		  $table->increments('id');
		  $table->integer('lastfm_id');
		  $table->json('meta');
		  $table->timestamps();
		});

		Schema::create('social_lastfm_artists', function(Blueprint $table) {
		  $table->increments('id');
		  $table->integer('lastfm_id');
		  $table->json('meta');
		  $table->timestamps();
		});

		Schema::create('social_lastfm_albums', function(Blueprint $table) {
		  $table->increments('id');
		  $table->integer('lastfm_id');
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
		Schema::drop('social_lastfm_users');
		Schema::drop('social_lastfm_scrobbles');
		Schema::drop('social_lastfm_tracks');
		Schema::drop('social_lastfm_artists');
		Schema::drop('social_lastfm_albums');
	}

}

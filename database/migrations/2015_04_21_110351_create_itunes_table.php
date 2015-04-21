<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItunesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_itunes_tracks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('itunes_id');
			$table->json('meta');
			$table->timestamps();
		});

		Schema::create('social_itunes_albums', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('itunes_id');
			$table->json('meta');
			$table->timestamps();
		});

		Schema::create('social_itunes_wishlist_items', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('itunes_id');
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
		Schema::drop('social_itunes_tracks');
		Schema::drop('social_itunes_albums');
		Schema::drop('social_itunes_wishlist_items');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTwitterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_twitter_users', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('twitter_id');
			$table->string('screen_name');
			$table->json('meta');
			$table->timestamps();
		});

		Schema::create('social_twitter_tweets', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('twitter_id');
			$table->integer('twitter_user_id');
			$table->json("meta");
			$table->timestamps();
		});

		Schema::create('social_twitter_media_objects', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('twitter_id');
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
		Schema::drop('social_twitter_users');
		Schema::drop('social_twitter_tweets');
		Schema::drop('social_twitter_media_objects');
	}

}

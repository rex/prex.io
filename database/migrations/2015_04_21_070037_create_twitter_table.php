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
		Schema::create('twitter_users', function($table) {
			$table->increments('id');
			$table->integer("twitter_id");
			$table->string("twitter_id_str");
			$table->string("profile_sidebar_fill_color", 6);
			$table->string("profile_sidebar_border_color", 6);
			$table->string("profile_text_color", 6);
			$table->string("profile_link_color", 6);
			$table->string("profile_background_color", 6);
			$table->string("name");
			$table->string("profile_image_url");
			$table->string("profile_image_url_https");
			$table->string("profile_background_image_url");
			$table->string("profile_background_image_url_https");
			$table->string("created_at");
			$table->string("location");
			$table->boolean("follow_request_sent");
			$table->boolean("default_profile");
			$table->boolean("contributors_enabled");
			$table->integer("favourites_count");
			$table->string("url");
			$table->integer("utc_offset");
			$table->boolean("profile_use_background_image");
			$table->integer("listed_count");
			$table->string("lang", 2);
			$table->integer("followers_count");
			$table->boolean("protected");
			$table->boolean("notifications");
			$table->boolean("verified");
			$table->boolean("geo_enabled");
			$table->string("time_zone");
			$table->string("description");
			$table->boolean("default_profile_image");
			$table->integer("statuses_count");
			$table->integer("friends_count");
			$table->boolean("following");
			$table->string("screen_name");
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('twitter_users');
		Schema::drop('twitter_tweets');
		Schema::drop('twitter_media_objects');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstagramTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_instagram_users', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('instagram_id');
			$table->json('meta');
			$table->timestamps();
		});

		Schema::create('social_instagram_posts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('instagram_id');
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
		Schema::drop('social_instagram_users');
		Schema::drop('social_instagram_posts');
	}

}

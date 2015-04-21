<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMixcloudTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_mixcloud_users', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('mixcloud_id');
			$table->string('username');
			$table->json('meta');
			$table->timestamps();
		});

		Schema::create('social_mixcloud_cloudcasts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('mixcloud_id');
			$table->string('slug');
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
		Schema::drop('social_mixcloud_users');
		Schema::drop('social_mixcloud_cloudcasts');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkedinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('social_linkedin_users', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('linkedin_id');
			$table->json('meta');
			$table->timestamps();
		});

		Schema::create('social_linkedin_positions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('linkedin_id');
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
		Schema::drop('social_linkedin_users');
		Schema::drop('social_linkedin_positions');
	}

}

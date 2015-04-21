<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGithubTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	  Schema::create('social_github_users', function(Blueprint $table) {
	    $table->increments('id');
	    $table->integer('github_id');
	    $table->string('username');
	    $table->json('meta');
	    $table->timestamps();
	  });

	  Schema::create('social_github_repos', function(Blueprint $table) {
	    $table->increments('id');
	    $table->integer('github_id');
	    $table->json('meta');
	    $table->timestamps();
	  });

	  Schema::create('social_github_pushes', function(Blueprint $table) {
	    $table->increments('id');
	    $table->integer('github_id');
	    $table->json('meta');
	    $table->timestamps();
	  });

	  Schema::create('social_github_commits', function(Blueprint $table) {
	    $table->increments('id');
	    $table->integer('github_id');
	    $table->json('meta');
	    $table->timestamps();
	  });

	  Schema::create('social_github_gists', function(Blueprint $table) {
	    $table->increments('id');
	    $table->integer('github_id');
	    $table->json('meta');
	    $table->timestamps();
	  });

	  Schema::create('social_github_issues', function(Blueprint $table) {
	    $table->increments('id');
	    $table->integer('github_id');
	    $table->json('meta');
	    $table->timestamps();
	  });

	  Schema::create('social_github_organizations', function(Blueprint $table) {
	    $table->increments('id');
	    $table->integer('github_id');
	    $table->json('meta');
	    $table->timestamps();
	  });

	  Schema::create('social_github_events', function(Blueprint $table) {
	    $table->increments('id');
	    $table->integer('github_id');
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
		Schema::drop('social_github_users');
		Schema::drop('social_github_repos');
		Schema::drop('social_github_pushes');
		Schema::drop('social_github_commits');
		Schema::drop('social_github_gists');
		Schema::drop('social_github_issues');
		Schema::drop('social_github_organizations');
		Schema::drop('social_github_events');
	}

}

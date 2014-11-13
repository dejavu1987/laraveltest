<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdeaRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('idea_rating', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('idea_id')->unsigned()->index();
			$table->foreign('idea_id')->references('id')->on('ideas')->onDelete('cascade');
			$table->integer('rating_id')->unsigned()->index();
			$table->foreign('rating_id')->references('id')->on('ratings')->onDelete('cascade');
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
		Schema::drop('idea_rating');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVotesToIdeaRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('idea_rating', function(Blueprint $table)
		{
			// votes
			$table->integer('votes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('idea_rating', function(Blueprint $table)
		{
			//drop column votes
			$table->dropColumn('votes');
		});
	}

}

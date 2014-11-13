<?php


class RatingTableSeeder extends Seeder {

	public function run()
	{
		
			Rating::insert(array([
				'title'=> "Affordability", 
				'body' => "How affordable is it?"
			],[
				'title'=> "Sustainability", 
				'body' => "How sustainable is it?"
			],[
				'title'=> "Acceptability", 
				'body' => "How acceptable is it?"
			],[
				'title'=> "Availability", 
				'body' => "How available is it?"
			],[
				'title'=> "Feasibility", 
				'body' => "How feasible is it?"
			]));
		
	}

}
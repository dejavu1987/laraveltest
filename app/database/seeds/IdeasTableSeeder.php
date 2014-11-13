<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class IdeasTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Idea::create([
					'title' => $faker->sentence(6),
					'body' => $faker->text,
			]);
		}
	}

}
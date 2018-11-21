<?php

use Illuminate\Database\Seeder;

class airports extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
		$limit = 10;
		
		for ($i = 0; $i< $limit; $i++){
			DB::table('airplane')->insert([
			'nama' => $faker->name,
			'email' => $faker->unique()->email,//email update
			'nohp' => $faker->phoneNumber,
			'alamat' => $faker->address,
			]);
		}
    }
}

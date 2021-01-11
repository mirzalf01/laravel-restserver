<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use Faker\Factory as Faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i <20 ; $i++) { 
            Movie::create([
                'title' => ucwords($faker->sentence),
                'description' => $faker->paragraph
            ]);
        }
    }
}

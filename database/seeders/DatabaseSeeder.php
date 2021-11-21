<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $genres=\App\Models\Genre::factory(10)->create();
        $films=\App\Models\Film::factory(20)->create();
        $genres_id=$genres->pluck('id');
        $films->each(function($film)use($genres_id){
            $film->genres()->attach($genres_id->random(3));

        });
    }
}

<?php

namespace Database\Seeders;

use App\Models\Anime;
use App\Models\Genre;
use App\Models\User;
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
//        User::truncate();
//        Anime::truncate();
//        Genre::truncate();

         \App\Models\Anime::factory(10)->create();
    }
}

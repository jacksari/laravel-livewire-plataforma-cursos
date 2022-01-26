<?php

namespace Database\Seeders;

use App\Models\Platform;
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
        $this->call(UserSeeder::class);

        $this->call(LevelSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(CategorySeeder::class);

        $this->call(Platform::class);

        $this->call(CourseSeeder::class);



    }
}

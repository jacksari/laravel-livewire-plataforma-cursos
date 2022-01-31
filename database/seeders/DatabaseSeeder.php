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
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(TeacherSeder::class);

        $this->call(LevelSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(CategorySeeder::class);

        $this->call(PlatformSeeder::class);

        $this->call(CourseSeeder::class);



    }
}

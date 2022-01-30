<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jack Sari',
            'email' => 'janasarii@gmail.com',
            'password' => bcrypt('12345678'),
            'profile_photo_path' => 'https://ui-avatars.com/api/?name=J+S',
            'slug' => 'jack-sari'
        ]);

        User::factory(99)->create();
    }
}

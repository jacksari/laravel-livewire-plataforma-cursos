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
        $user = User::create([
            'name' => 'Jack Sari',
            'email' => 'janasarii@gmail.com',
            'password' => bcrypt('12345678'),
            'profile_photo_path' => 'https://ui-avatars.com/api/?name=J+S',
            'slug' => 'jack-sari'
        ]);

        $user->assignRole('Admin');

        $user = User::create([
            'name' => 'Jack Sari v2',
            'email' => 'janasarii1@gmail.com',
            'password' => bcrypt('12345678'),
            'profile_photo_path' => 'https://ui-avatars.com/api/?name=J+S',
            'slug' => 'jack-sari-v2'
        ]);


        User::factory(99)->create();
    }
}

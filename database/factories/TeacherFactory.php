<?php

namespace Database\Factories;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::all()->random();

        return [
            'title' => $this->faker->sentence(),
            'image' => 'https://res.cloudinary.com/mikunaalli/image/upload/v1635936042/azwm3abvxplpnqo3pnau.png',
            'content' => $this->faker->paragraph(),
            'website' => 'https://www.jacksari.com/',
            'facebook' => 'https://www.facebook.com/jack.sari.37/',
            'twitter' => 'https://twitter.com/ssari1212',
            'linkedin' => 'https://www.linkedin.com/in/jacksari/',
            'youtube' => 'https://www.youtube.com/channel/UCUH2MeUHk0Vg7LGGz2v_Q5w',
            'user_id' => $user->id,
            'slug' => $user->slug,
        ];
    }
}

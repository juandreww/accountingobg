<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;
// use \Illuminate\Foundation\Auth\User

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'post_text' => $this->faker->text(5000),
            'user_id' => User::inRandomOrder()->first(),
            'created_at' => $this->faker->dateTimeBetween('-4 week', 'now')
        ];
    }
}

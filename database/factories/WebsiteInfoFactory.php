<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WebsiteInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'history' => $this->faker->text(500),
            'mission' => $this->faker->text(500),
            'vision' => $this->faker->text(500),
            'about' => $this->faker->text(400),
            'objectives' => $this->faker->text(400),
            'user_id' => User::all()->random()->id,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->text(20),
            'description' => $this->faker->text(120),
            'url' => $this->faker->unique()->url(),
            'encoded_by' => User::all()->random()->id
        ];
    }
}

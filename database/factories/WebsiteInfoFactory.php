<?php

namespace Database\Factories;

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
            'history' => $this->faker->text(200),
            'mission' => $this->faker->text(150),
            'vision' => $this->faker->text(150),
            'about' => $this->faker->text(200),
            'objectives' => $this->faker->text(100)
        ];
    }
}

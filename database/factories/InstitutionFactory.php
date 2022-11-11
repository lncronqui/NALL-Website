<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InstitutionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $letters = strtoupper($this->faker->unique()->lexify('???'));
        return [
            'name' => $letters,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Institution;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Root Administrator',
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'institution_id' => null,
            'role_id' => 3,
            'password' => bcrypt('N@11W3b5ite'), // password,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

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
        $institution = Institution::all()->pluck('id')->toArray();
        $role = Role::all()->pluck('id')->toArray();
        return [
            'name' => $this->faker->unique()->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'institution_id' => $this->faker->randomElement($institution),
            'role_id' => $this->faker->randomElement($role),
            'password' => bcrypt('12345678'), // password,
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

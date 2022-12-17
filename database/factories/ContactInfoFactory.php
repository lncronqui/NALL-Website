<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactInfo>
 */
class ContactInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'address_1' => $this->faker->streetName(),
            'address_2' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'zip_code' => $this->faker->postcode(),
            'tel_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'fb_page' => $this->faker->url(),
            'website' => $this->faker->url(),
            'user_id' => User::all()->random()->id,
        ];
    }
}

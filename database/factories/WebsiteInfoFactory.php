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
            'history' => $this->faker->text(200),
            'mission' => $this->faker->text(150),
            'vision' => $this->faker->text(150),
            'about' => $this->faker->text(200),
            'objectives' => $this->faker->text(100),
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

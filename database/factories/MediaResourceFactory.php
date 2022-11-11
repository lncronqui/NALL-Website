<?php

namespace Database\Factories;

use App\Models\AccessType;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MediaResource>
 */
class MediaResourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'abstract' => $this->faker->text(100),
            'date' => $this->faker->date(),
            'access_type_id' => AccessType::all()->random()->id,
            'institution_id' => Institution::all()->random()->id,
            'encoded_by' => User::all()->random()->name,
        ];
    }
}

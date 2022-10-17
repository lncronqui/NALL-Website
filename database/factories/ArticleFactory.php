<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Institution;
use App\Models\PubType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use function PHPSTORM_META\map;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'abstract' => $this->faker->sentences(5, true),
            'date' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'doi' => $this->faker->url(),
            'institution_id' => Institution::all()->random()->id,
            'page' => $this->faker->numberBetween(100, 500),
            'pub_type_id' => PubType::all()->random()->id,
            'url' => $this->faker->url(),
            'encoded_by' => User::all()->random()->id,
            'journal_title' => $this->faker->sentence()
        ];
    }
}

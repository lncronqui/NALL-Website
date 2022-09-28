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
        $author = Author::all()->pluck('id')->toArray();
        $institution = Institution::all()->pluck('id')->toArray();
        $pubType = PubType::all()->pluck('id')->toArray();
        $user = User::all()->pluck('id')->toArray();
        return [
            'title' => $this->faker->sentence(),
            'abstract' => $this->faker->sentences(5, true),
            'author_id' => $this->faker->randomElement($author),
            'date' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'doi' => $this->faker->url(),
            'institution_id' => $this->faker->randomElement($institution),
            'page' => $this->faker->numberBetween(100, 500),
            'pub_type_id' => $this->faker->randomElement($pubType),
            'url' => $this->faker->url(),
            'user_id' => $this->faker->randomElement($user)
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\MediaResource;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MediaResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        for($i=0; $i < 15; $i++)
        {
            MediaResource::factory(1)->create([
                'resource_type_id' => 1,
                'subject_id' => Subject::all()->random()->id,
                'page' => 100
            ]);

            MediaResource::factory(1)->create([
                'resource_type_id' => 2,
                'subject_id' => Subject::all()->random()->id,
                'page' => 100,
                'url' => $this->faker->unique()->url(),
                'doi' => $this->faker->unique()->url(),

            ]);

            MediaResource::factory(1)->create([
                'resource_type_id' => 3,
                'subject_id' => Subject::all()->random()->id,
                'url' => $this->faker->unique()->url(),
                'doi' => $this->faker->unique()->url(),
            ]);

            MediaResource::factory(1)->create([
                'resource_type_id' => 4,
                'subject_id' => Subject::all()->random()->id,
                'url' => $this->faker->unique()->url(),
                'doi' => $this->faker->unique()->url(),
            ]);
        }

        foreach(MediaResource::all() as $media)
        {
            $authors = Author::all()->random(rand(1,3))->pluck('id')->toArray();
            $media->authors()->sync($authors);
        }

        foreach(User::all() as $user)
        {
            $media = MediaResource::all()->random(rand(1,4))->pluck('id')->toArray();
            $user->requests()->sync($media);
        }
    }
}

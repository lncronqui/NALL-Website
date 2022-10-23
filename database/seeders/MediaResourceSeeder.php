<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\JournalTitle;
use App\Models\MediaResource;
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
        for($i=0; $i < 10; $i++)
        {
            MediaResource::factory(1)->create([
                'resource_type_id' => 1,
                'journal_title_id' => JournalTitle::all()->random()->id,
                'page' => 100
            ]);

            MediaResource::factory(1)->create([
                'resource_type_id' => 2,
                'journal_title_id' => JournalTitle::all()->random()->id,
                'page' => 100,
                'url' => $this->faker->unique()->url(),
                'doi' => $this->faker->unique()->url(),

            ]);

            MediaResource::factory(1)->create([
                'resource_type_id' => 3,
                'url' => $this->faker->unique()->url(),
                'doi' => $this->faker->unique()->url(),
            ]);

            MediaResource::factory(1)->create([
                'resource_type_id' => 4,
                'url' => $this->faker->unique()->url(),
                'doi' => $this->faker->unique()->url(),
            ]);
        }

        foreach(MediaResource::all() as $media)
        {
            $authors = Author::all()->random(rand(1,3))->pluck('id')->toArray();
            $media->authors()->sync($authors);
        }
    }
}

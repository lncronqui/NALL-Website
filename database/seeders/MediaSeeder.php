<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Media;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::factory(10)->create();

        foreach(Media::all() as $media)
        {
            $authors = Author::find(rand(1,3))->pluck('id');
            $media->authors()->attach($authors);
        }
    }
}

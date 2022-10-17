<?php

namespace Database\Seeders;

use App\Models\MediaType;
use Illuminate\Database\Seeder;

class MediaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaType::create([
            'name' => 'Print'
        ]);

        MediaType::create([
            'name' => 'Video'
        ]);
    }
}

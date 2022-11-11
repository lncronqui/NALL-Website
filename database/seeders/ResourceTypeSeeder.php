<?php

namespace Database\Seeders;

use App\Models\ResourceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ResourceType::create([
            'name' => 'Print'
        ]);

        ResourceType::create([
            'name' => 'Electronic'
        ]);

        ResourceType::create([
            'name' => 'Video'
        ]);

        ResourceType::create([
            'name' => 'Audio'
        ]);
    }
}

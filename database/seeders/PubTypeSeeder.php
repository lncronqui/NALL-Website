<?php

namespace Database\Seeders;

use App\Models\PubType;
use Illuminate\Database\Seeder;

class PubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PubType::create([
            'name' => 'Original Research'
        ]);

        PubType::create([
            'name' => 'Short Reports or Letters'
        ]);

        PubType::create([
            'name' => 'Review Articles'
        ]);

        PubType::create([
            'name' => 'Case Studies'
        ]);

        PubType::create([
            'name' => 'Methodologies'
        ]);
    }
}

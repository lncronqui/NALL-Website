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
        PubType::factory(5)->create();
    }
}

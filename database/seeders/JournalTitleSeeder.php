<?php

namespace Database\Seeders;

use App\Models\JournalTitle;
use Illuminate\Database\Seeder;

class JournalTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JournalTitle::factory(10)->create();
    }
}

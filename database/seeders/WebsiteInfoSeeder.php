<?php

namespace Database\Seeders;

use App\Models\WebsiteInfo;
use Illuminate\Database\Seeder;

class WebsiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebsiteInfo::factory(1)->create();
    }
}

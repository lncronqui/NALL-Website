<?php

namespace Database\Seeders;

use App\Models\AccessRequest;
use Illuminate\Database\Seeder;

class AccessRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccessRequest::factory(10)->create();
    }
}

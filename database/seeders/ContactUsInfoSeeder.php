<?php

namespace Database\Seeders;

use App\Models\ContactUsInfo;
use Illuminate\Database\Seeder;

class ContactUsInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactUsInfo::factory(10)->create();
    }
}

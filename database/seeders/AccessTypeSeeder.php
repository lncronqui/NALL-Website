<?php

namespace Database\Seeders;

use App\Models\AccessType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccessType::create([
            'public' => false
        ]);

        AccessType::create([
            'public' => true
        ]);
    }
}

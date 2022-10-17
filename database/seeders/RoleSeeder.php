<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Member',
            'is_admin' => false
        ]);

        Role::create([
            'name' => 'University Administrator',
            'is_admin' => true
        ]);

        Role::create([
            'name' => 'Overall Administrator',
            'is_admin' => true
        ]);
    }
}

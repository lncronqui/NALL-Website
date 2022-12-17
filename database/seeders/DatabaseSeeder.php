<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(app()->environment() == 'production'){

        } else {
            $this->call([
                ContactUsInfoSeeder::class,
                RoleSeeder::class,
                InstitutionSeeder::class,
                UserSeeder::class,
                WebsiteInfoSeeder::class,
                AuthorSeeder::class,
                AccessTypeSeeder::class,
                SubjectSeeder::class,
                ResourceTypeSeeder::class,
                MediaResourceSeeder::class,
                BookmarkGroupSeeder::class,
                ContactInfoSeeder::class,
            ]);
        }
    }
}

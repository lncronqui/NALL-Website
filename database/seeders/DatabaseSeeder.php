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
                InstitutionSeeder::class,
                RoleSeeder::class,
                UserSeeder::class,
                AuthorSeeder::class,
                MediaTypeSeeder::class,
                PubTypeSeeder::class,
                ArticleSeeder::class,
                BookmarkSeeder::class,
                AccessRequestSeeder::class,
                WebsiteInfoSeeder::class,
                ContactUsInfoSeeder::class
            ]);
        }
    }
}

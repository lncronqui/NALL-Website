<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Author;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory(10)->create();

        foreach(Article::all() as $article)
        {
            $authors = Author::find(rand(1,3))->pluck('id');
            $article->authors()->attach($authors);
        }
    }
}

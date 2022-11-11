<?php

namespace Database\Seeders;

use App\Models\BookmarkGroup;
use App\Models\MediaResource;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmarkGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(User::where('role_id', '1')->pluck('id') as $user)
        {
            BookmarkGroup::factory(3)->create([
                'user_id' => $user
            ]);
            foreach(BookmarkGroup::where('user_id', $user)->get() as $bookmark_group)
            {
                $media_resources = MediaResource::all()->random(rand(1,3))->pluck('id')->toArray();
                $bookmark_group->media_resources()->sync($media_resources);
            }
        }
    }
}

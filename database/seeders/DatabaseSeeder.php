<?php

namespace Database\Seeders;
use App\Models\Tweet;
use App\Models\Post;
use App\Models\Facebook_message;
use App\Models\Instagram_post;

use App\Models\Publication;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tweet::factory()->count(10)->create();
        Facebook_message::factory()->count(10)->create();
        Instagram_post::factory()->count(10)->create();
        Publication::factory()->count(10)->create();
        \App\Models\User::factory(10)->create();
        Post::factory()->count(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

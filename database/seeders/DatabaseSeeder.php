<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {
    
        // Category::truncate();
        // Post::truncate();
        // User::truncate();
        // Comment::truncate();
      

        $user = User::factory()->create([
            'name' => 'Cândido da Silva'
        ]);

        Post::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}

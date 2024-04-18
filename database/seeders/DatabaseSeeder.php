<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         Category::create([
             'title' => 'sport',
         ]);
         Category::create([
             'title' => 'politic',
         ]);
         Post::create([
             'title' => 'post1',
             'category_id' => 1,
             'body' => "lorem ipsum",
         ]);
    }
}

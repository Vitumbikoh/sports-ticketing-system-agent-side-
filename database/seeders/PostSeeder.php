<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        // Clear the posts table before seeding (optional)
        DB::table('posts')->truncate();

        // Add sample blog posts
        DB::table('posts')->insert([
            'title' => 'Sample Post 1',
            'content' => 'This is the content of Sample Post 1.',
        ]);

        DB::table('posts')->insert([
            'title' => 'Sample Post 2',
            'content' => 'This is the content of Sample Post 2.',
        ]);

        // Add more posts as needed
    }
}


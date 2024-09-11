<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        public function showTotalPosts()
    {
        // Count the total number of blog posts
        $totalPosts = Post::count();

        // Pass the count to the view and render it
        return view('posts.total', ['totalPosts' => $totalPosts]);
    }
}

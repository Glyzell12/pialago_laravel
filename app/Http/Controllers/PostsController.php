<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function getAllPosts(){
        $posts = Post::all();
        return response()->json($posts);
    }
}

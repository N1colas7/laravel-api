<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        $posts = Post::with('technologies', 'type')->paginate(9);

        return response()->json([
            'success' => true,
            'posts' => $posts
        ]);
    }
    public function show($slug){

    }
}

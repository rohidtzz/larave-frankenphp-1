<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {

        $posts = Cache::remember('posts_list', 600, function () {
            return Post::limit(100)->get();
        });

        return response()->json([
            'message' => 'Hello World',
            'status' => 200,
            'data' => $posts,
        ]);
    }
}

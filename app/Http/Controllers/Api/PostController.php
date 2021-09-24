<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
class PostController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {

        $posts = Post::get();
        return $this->apiResponse($posts, 'ok', 200);

    }
}

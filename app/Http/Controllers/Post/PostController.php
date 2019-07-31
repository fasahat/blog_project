<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        $posts =  Post::all();
        return response()->json(array(
            'Status' => true,
            'posts' => $posts,
            200
        ));
    }
}

<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StorePost;
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

    public function store(Request $request,Post $post){
        $title = $request['title'];
        $body = $request['body'];
        $post->title = $title;
        $post->body = $body;
        $post->save();

        return response()->json($post, 201);



    }
}

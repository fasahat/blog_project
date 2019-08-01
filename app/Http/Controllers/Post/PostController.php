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
//            $post = Post::create($request->all());

        return response()->json($post, 201);


//        return 'test';



//        $post = Post::create($request->all());
//        return $post;
//        return response()->json($post, 201);
//        $validated = $request->validated();
//        return $validated;
//        $post = ($request->all());
//        $array_data = (array)$post;
//RETURN $request;
        $validator = Validator::make([
            'title' => $title,
            'body' => $body,
            ] ,[
            'title' => 'required|min:3',
            'body'  => 'required'
        ]);
//return 'OK';
        if ($validator->fails())
        {
            return 'ok';
            $post->title = $title;
            $post->body = $body;
            $post->save();
//            $post = Post::create($request->all());
            return response()->json($post, 201);
        } else {
            return 'bad';
            return response()->json(null,204);
        }
    }
}

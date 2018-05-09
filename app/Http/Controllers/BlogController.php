<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function index() {

        $posts = Post::where('published','Опубликовано')->paginate(3);
        return view('blog.index',[
            'posts' => $posts
        ]);
    }

    public function show($id) {

        $post = Post::where('id', $id)->first();

        return view('blog.show',[
            'post' => $post
        ]);
    }


}

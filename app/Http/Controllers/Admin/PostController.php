<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(7);
        $postsCount = Post::count();
        $usersCount = User::count();
        $commentsCount = Comment::count();

        return view('admin.index',[
            'posts'=> $posts,
            'usersCount'=>$usersCount,
            'commentsCount' =>$commentsCount,
            'postsCount' =>$postsCount
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create($request->all());

        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postsCount = Post::count();
        $usersCount = User::count();
        $commentsCount = Comment::count();
        $post = Post::where('id', $id)->first();

        return view('admin.show',[
            'post' => $post,
            'postsCount'=> $postsCount,
            'usersCount'=>$usersCount,
            'commentsCount'=>$commentsCount
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.edit',[
            'post'   =>  $post,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->except('id'));

        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->comments()->delete();
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}

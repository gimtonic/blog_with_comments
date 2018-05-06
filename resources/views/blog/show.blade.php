@extends('blog.partials.blogheader')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
            @endif
        </div>
        <div class="current_posts">
            @if($post)
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->long_description }}</p>
            @else
                Article not found
            @endif
        </div>
</div>
</body>
</html>
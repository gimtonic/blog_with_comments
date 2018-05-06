@extends('layouts.app')

@section('content')
        <div class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Текущие посты этого сайта</h1>
                    </div>

                        @foreach ($posts as $post)
                    <div class="col-md-4">
                            <a href="{{ route ('blog.show',$post->id) }}" class="text-center">
                                <h1>{{ $post->title }}</h1>
                            </a>
                    </div>
                    <div class="col-md-8">
                                <p>{{ $post->short_description }}</p>

                    </div>
                        @endforeach;
                </div>

                </div>
            </div>
@endsection
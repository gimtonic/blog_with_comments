@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="jimbotron">
                                <p class="text-center"><span class="label label-primary">Кол-во пользователей: {{$users->count()}}</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="jimbotron">
                                <p class="text-center"><span class="label label-primary">Кол-во постов: {{$posts->count()}}</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="jimbotron">
                                <p class="text-center"><span class="label label-primary">Кол-во комментариев</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">





                    <div class="current_posts">
                        @if($post)
                            <h1>{{ $post->title }}</h1>
                            <p>{{ $post->long_description }}</p>
                        @else
                            Article not found
                        @endif
                    </div>




            </div>
        </div>
    </div>
@endsection
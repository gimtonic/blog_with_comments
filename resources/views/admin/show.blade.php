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
                                <p class="text-center"><span class="label label-primary">Кол-во комментариев: {{$post->comments->count() }}</span></p>
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
                    <div class="text-center panel panel-default">
                            <div class="row">
                                @if( $post->comments->count() )

                                    <div class="col-md-12">
                                        <h1>Комментарии:</h1>
                                    </div>
                                    <div class="col-md-12">
                                        <table class="table">
                                            <tr>
                                                <th class="text-center">Имя</th>
                                                <th class="text-center">Описание</th>
                                                <th class="text-right">Действие</th>
                                            </tr>

                                            @foreach ($post->comments as $comment)
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $comment->name }}
                                                    </td>
                                                    <td class="text-center">{{$comment->description}}</td>
                                                    <td class="text-right">
                                                        <form onsubmit="if(confirm('Delete?')){return true}else{ return false }" action="{{route('comment.destroy',
                        $comment)}}" method="post">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            {{ csrf_field() }}

                                                            <a class="btn btn-default" href="{{route('comment.edit',$comment)}}"><i class="fa fa-edit"></i></a>

                                                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach;
                                        </table>
                                    </div>
                                @endif;
                            </div>
                    </div>
@endsection
@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">
        <div class="current_post">
            @if($post)
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->long_description }}</p>
            @else
                Article not found
            @endif
        </div>

    <div class="text-center">
        <div class="container">
            <div class="row">
       @if( $comments->count() )

                    <div class="col-md-12">
                        <h1>Комментарии:</h1>
                    </div>

                    <table class="table">
                        <tr>
                            <th class="text-center">Имя</th>
                            <th class="text-center">Описание</th>
                        </tr>

                            @foreach ($comments as $comment)
                                <tr>
                                    <td class="text-center">
                                            {{ $comment->name }}
                                    </td>
                                    <td class="text-center">{{$comment->description}}</td>
                                </tr>
                            @endforeach;
                    </table>
        @endif;
        <div class="col-md-12">
             <h1>Напишите комментарий:</h1>
        </div>
            <form action="{{ route('comment.store') }}" method="post">
                {{ csrf_field() }}

            <label for="">Имя</label>
            <input type="text" class="form-control" name="name" placeholder="Заголовок новости" value="{{$post->title or ""}}" required>

            <label for="">Краткое описание</label>
            <textarea name="short_description" id="short_description" class="form-control">{{$post->short_description or ""}}</textarea>
            </form>
    </div>
   </div>
 </div>
@endsection
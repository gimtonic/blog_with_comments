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
       @if( $post->comments->count() )

                    <div class="col-md-12">
                        <h1>Комментарии:</h1>
                    </div>

                    <table class="table">
                        <tr>
                            <th class="text-center">Имя</th>
                            <th class="text-center">Описание</th>
                        </tr>

                            @foreach ($post->comments as $comment)
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
           <div class="col-md-12">
               <form action="{{ route('comment.store') }}" method="post">
                   <input type="hidden" name="post_id" value="{{$post->id or ''}}">
               {{ csrf_field() }}
                   <fieldset class="form-horizontal">
                       <div class="form-group">
                           <label class="control-label">Ваше имя</label>
                           <input type="text" class="form-control" name="name" placeholder="Ваше имя"  required>
                           <label class="control-label">Комментарий</label>
                           <textarea name="description" id="description" class="form-control" placeholder="Ваш комментарий"></textarea>
                       </div>
                       <div class="form-group">
                           <button class="btn btn-primary" type="submit">Опубликовать</button>
                       </div>
                   </fieldset>
               </form>

           </div>
    </div>
   </div>
 </div>
@endsection
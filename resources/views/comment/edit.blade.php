@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        <h3>Комментарий к статье: {{$comment->posts->title or ''}}</h3>
    </div>
    <div class="col-md-12">

        <form action="{{ route('comment.update',$comment) }}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <fieldset class="form-horizontal">
                <div class="form-group">
                    <label class="control-label">Ваше имя</label>
                    <input type="text" class="form-control" name="name" value="{{$comment->name or ''}}" required>
                    <label class="control-label">Комментарий</label>
                    <textarea name="description" id="description" class="form-control" >{{$comment->description or ''}}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Сохранить</button>
                </div>
            </fieldset>
        </form>
    </div>

@endsection
@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- Check if current user is logged-in or a guest --}}
        @if (Auth::guest())

            <p class="mt-5">Please <a href="/login/">login</a> to add a new post.</p>

        @else

            <div class="blog-header">
                <h1 class="blog-title">Создание поста</h1>
            </div>

            <div class="row">
                <div class="push-md-2 col-md-8">

                    <form action="{{ route('admin.store') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="created_by" value="{{ Auth::id() }}" />

                        <label for="">Статус</label>
                        <select class="form-control" name="published">
                            @if (isset($post->id))
                                <option value="0" @if ($post->published == "Не опубликовано") selected="" @endif>Не опубликовано</option>
                                <option value="1" @if ($post->published == "Опубликовано") selected="" @endif>Опубликовано</option>
                            @else
                                <option value="0">Не опубликовано</option>
                                <option value="1">Опубликовано</option>
                            @endif
                        </select>
                        <label for="">ID</label>
                        <input type="text" class="form-control" name="id" placeholder="ID" value="{{$post->id or ""}}" required>

                        <label for="">Заголовок</label>
                        <input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$post->title or ""}}" required>

                        <label for="">Краткое описание</label>
                        <textarea name="description_short" id="short_description" class="form-control">{{$post->short_description or ""}}</textarea>

                        <label for="">Полное описание</label>
                        <textarea name="description" id="long_description" class="form-control">{{$post->long_description or ""}}</textarea>

                        <hr />

                        <input class="btn btn-primary" type="submit" value="Сохранить">


                    </form>

                </div>
            </div>

        @endif

    </div>

@endsection
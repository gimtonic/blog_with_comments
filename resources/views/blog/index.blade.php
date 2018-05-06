@extends('layouts.app')

@section('content')
        <div class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Текущие посты этого сайта</h1>
                    </div>

                    <table class="table">
                        <tr>
                            <th class="text-center">Заголовок</th>
                            <th class="text-center">Короткое описание</th>
                        </tr>

                        {{-- Blade if and else --}}

                        @if( $posts->count() )

                            @foreach ($posts as $post)
                                <tr>
                                    <td class="text-center">
                                        <a href="{{ route ('blog.show',$post->id) }}" class="text-center">
                                            <h1>{{ $post->title }}</h1>
                                        </a>
                                    </td>
                                    <td class="text-center">{{$post->short_description}}</td>

                            @endforeach;

                        @else
                            <tr>
                                <td colspan="5" class="text-center"><h1>Постов нет</h1></td>
                            </tr>
                        @endif

                    </table>

                </div>

                </div>
            </div>
@endsection
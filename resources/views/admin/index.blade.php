@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="jimbotron">
                                <p class="text-center"><span class="label label-primary">Кол-во пользователей: {{$usersCount}} </span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="jimbotron">
                                <p class="text-center"><span class="label label-primary">Кол-во постов:   {{$postsCount}}</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="jimbotron">
                                <p class="text-center"><span class="label label-primary">Кол-во комментариев: {{$commentsCount}}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">

                    <table class="table">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Дата изменения</th>
                            <th class="text-center">Статус публикации</th>
                            <th class="text-center">Заголовок</th>
                        </tr>

                            {{-- Blade if and else --}}

                            @if( $posts->count() )

                                @foreach ($posts as $post)
                                <tr>
                                    <td class="text-center">
                                        <a href="{{ route ('admin.post.show',$post->id) }}" >
                                            {{ $post->id }}
                                        </a>
                                    </td>
                                    <td class="text-center">{{$post->modified_at}}</td>
                                    <td class="text-center">{{ $post->getStatus()}}</td>
                                    <td class="text-center">{{$post->title}}</td>
                                    <td class="text-right">
                                        <form onsubmit="if(confirm('Delete?')){return true}else{ return false }" action="{{route('admin.post.destroy',
                        $post)}}" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}

                                            <a class="btn btn-default" href="{{route('admin.post.edit',$post)}}"><i class="fa fa-edit"></i></a>

                                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach;

                            @else
                            <tr>
                                <td colspan="5" class="text-center"><h1>Постов нет</h1></td>
                            </tr>
                            @endif
                        <tfoot>
                        <tr>
                            <td colspan="3">
                                <ul class="pagination pull-right">
                                    {{$posts->links()}}
                                </ul>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-md-12 text-center">
                    <a class="btn btn-primary btn-lg" href="{{route('admin.post.create')}}" role="button" >Создать пост</a>
                </div>
            </div>
        </div>
    </div>
@endsection
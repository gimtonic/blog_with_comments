@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="jimbotron">
                                <p class="text-center"><span class="label label-primary">Кол-во пользователей</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="jimbotron">
                                <p class="text-center"><span class="label label-primary">Кол-во постов</span></p>
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

                    <table class="table">
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Дата изменения</th>
                            <th class="text-center">Статус публикации</th>
                            <th class="text-center">Заголовок</th>
                        </tr>
                        <tr>
                            {{-- Blade if and else --}}

                            @if( $posts->count() )

                                <td class="text-center">ID</td>
                                <td class="text-center">Дата изменения</td>
                                <td class="text-center">Статус публикации</td>
                                <td class="text-center">Заголовок</td>

                            @else

                                <td colspan="5" class="text-center"><h1>Постов нет</h1></td>

                            @endif
                        </tr>
                    </table>
                </div>
                <div class="col-md-12 text-center">
                    <a class="btn btn-primary btn-lg" href="{{route('admin.create')}}" role="button" >Создать пост</a>
                </div>
            </div>
        </div>
    </div>
@endsection
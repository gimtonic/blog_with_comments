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

                    <form action="{{ route('admin.post.store') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="created_by" value="{{ Auth::id() }}" />
                        {{--<input type="hidden" name="modified_by" value="{{Auth::id()}}">--}}

                        @include('admin.partials.form')


                    </form>

                </div>
            </div>

        @endif

    </div>

@endsection
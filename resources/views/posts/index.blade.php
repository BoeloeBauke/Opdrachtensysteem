@extends('layouts.app')

@section('content')

    <div class="container">

    <h1 style="text-align: center">Hier vind je je opdrachten</h1>

    @foreach($posts as $post)

            <a href="/profile/{{ $post->user->id }}">
                <button class="btn btn-primary">Profiel leerkracht</button>
            </a>
     <h3 style =" padding-top: 25px;">{{ $post->title }}</h3>
    <div class="text" style="text-align: left; padding-bottom: 50px;">
        {{ $post->description }}
    </div>

    @endforeach

    <div class="row">
        <div class="col-12">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection

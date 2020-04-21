@extends('layouts.app')

@section('content')
    <h4><a href="/profile/{{ $post->user->id }}" style="padding-left: 150px">Terug naar profiel</a></h4>
<div class="container">
    <h1 style="text-align: left">{{ $post->title }}</h1>
    <div class="text" style="padding-top: 50px"> {{ $post->description }}</div>
</div>

@endsection

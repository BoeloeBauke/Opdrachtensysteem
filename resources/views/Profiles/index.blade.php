@extends('layouts.app')

@section('content')
<div class="container">
    <div class="" style="text-align: center;">
        <img src="https://cdn3.iconfinder.com/data/icons/users-outline/60/50_-Blank_Profile-_user_people_group_team-512.png "class="rounded-circle" style="max-height: 100px" >

    </div>
    <div class="" style="text-align: center; padding-top: 50px;">
        <div>
            <h1>{{$user->username}}</h1>
            <a href="/p/create">Voeg een opdracht toe</a>
        </div>
        <div class="">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
    <div class="col-4">
        @foreach($user->posts as $post)
            <a href="/p/{{ $post->id }}">
                <button>Post</button>
            </a>
        @endforeach
    </div>
    </div>
</div>
@endsection

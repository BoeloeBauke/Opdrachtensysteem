@extends('layouts.app')

@section('content')
<div class="container">
    <div class="" style="text-align: center;">
        <img src="https://cdn3.iconfinder.com/data/icons/users-outline/60/50_-Blank_Profile-_user_people_group_team-512.png "class="rounded-circle" style="max-height: 100px" >

    </div>
    <div class="" style="text-align: center; padding-top: 50px;">
        <div>
            <h1>{{$user->username}}</h1>


        </div>

        <div class="">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <br>
        @can('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Bewerk je profiel</a>
        @endcan
        <br>
        @can('update', $user->profile)
            <a href="/p/create">Voeg een opdracht toe</a>
        @endcan

        <h3 style="text-align: center">Opdrachten van deze persoon</h3>

    <div class="col-7 pt-5 pr-10" >
        @foreach($user->posts as $post)
            <a href="/p/{{ $post->id }}">
                <button class="btn btn-primary">{{$post->title}}</button>
            </a>
        @endforeach
    </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf
        @method('PATCH')
    <h1 style="text-align: center">Bewerk Profiel</h1>
    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label "><h5>Titel</h5></label>


        <input id="title"
               type="text"
               class="form-control @error('title') is-invalid @enderror"
               name="title"
               value="{{ old('title') ?? $user->profile->title}}" required autocomplete="title" autofocus>

        @error('title')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label "><h5>Beschrijving</h5></label>


            <input id="description"
                   type="text"
                   class="form-control @error('description') is-invalid @enderror"
                   name="description"
                   value="{{ old('description') ?? $user->profile->description}}" required autocomplete="description" autofocus>
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

    <div class="row pt-4" >
        <button class="btn btn-primary" style="">Bewerk profiel</button>

    </div>
    </form>
</div>
@endsection

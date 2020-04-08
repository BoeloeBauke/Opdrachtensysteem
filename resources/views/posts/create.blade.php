@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <h1 style="text-align: center">Maak een opdracht</h1>
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label "><h5>Titel Opdracht</h5></label>


            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('name') }}" required autocomplete="title" autofocus>

            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="row">
            <label for="description" class="col-md-4 col-form-label "><h5>Uitleg Opdracht</h5></label>

            <textarea type="text" class="form-control-plaintext" id="description" name="description"></textarea>

            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="row pt-4" >
            <button class="btn btn-primary" style="">Voeg Opdracht toe</button>

        </div>
    </form>
    </div>
@endsection

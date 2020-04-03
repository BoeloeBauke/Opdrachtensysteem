@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('titel') }}</label>

        <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('name') }}" required autocomplete="title" autofocus>

            @error('title')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>
</div>
@endsection

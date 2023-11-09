@extends('layout')

@section('content')
    <h1>Contactez nous</h1>

    @if(!session()->has('message'))

    <form action="/contact" method="post">
        <div class="form-group my-2">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                placeholder="Votre pseudo ...." value="{{ old('name') }}">
            {{-- placeholder="Votre pseudo ...." value="{{ old('name') ?? $message->name }}"> --}}

            @error('name')
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                placeholder="Votre email ...." value="{{ old('email') }}">
            {{-- placeholder="Votre email ...." value="{{ old('email') ?? $message->email }}"> --}}

            @error('email')
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <textarea name="message" cols="30" rows="10" class="form-control @error('message') @enderror"
                placeholder="Votre message...">{{ old('message') }}</textarea>
            @error('message')
                <div class="invalid-feedback">
                    {{ $errors->first('message') }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Send message</button>
    </form>

    @endif
@endsection

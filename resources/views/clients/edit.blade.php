@extends('layout')

@section('content')
    <h1>Modify {{$client->name}} informations</h1>
    <hr>
    <form action="/clients/{{$client->id}}" method="POST">

        @method('PATCH')
        @include('includes.form')
        <button type="submit" class="btn btn-primary">Save editing</button>
        
    </form>
@endsection

@extends('layout')

@section('content')
    <h1>About client</h1>
    <hr>
    <h3>{{ $client->name }}</h3>
    <a href="/clients/{{ $client->id }}/edit" class="btn btn-secondary">Modify</a>
    <form action="/clients/{{ $client->id }}" method="POST" style="display: inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <p><strong>Email:</strong>{{ $client->email }}</p>
    <p><strong>Entreprise:</strong>{{ $client->entreprise->name }}</p>
@endsection

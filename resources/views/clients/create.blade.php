@extends('layout')

@section('content')
<h1>Create client</h1>
<hr>
<form action="{{ route('clients.store') }}" method="POST">
            @include('includes.form')
            <button type="submit" class="btn btn-primary">Ajouter le client</button>
        </form>


@endsection

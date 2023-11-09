@extends('layout')

@section('content')
    <div class="container">

        <h1>Clients</h1>
        <hr>
        <a href="/clients/create" class="btn btn-primary my-1">Add a new client</a>
        <ul>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Entreprise</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <th scope="row">{{ $client->id }}</th>
                            <td><a href="/clients/{{$client->id}}">{{ $client->name }}</a></td>
                            <td>{{ $client->status  }}</td>
                            <td>{{ $client->entreprise->name }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </ul>


    </div>
@endsection

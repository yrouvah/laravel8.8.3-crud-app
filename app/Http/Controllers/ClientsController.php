<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function index()
    {
        $clients = Client::all();

        return view('clients.index', compact('clients'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required|integer'
        ]);

        Client::create($data);

        return back();
    }

    public function create()
    {
        $entreprises = Entreprise::all();
        $client = new Client();

        return view('clients.create', compact('entreprises', 'client'));
    }

    public function edit(Client $client)
    {
        $entreprises = Entreprise::all();

        return view('clients.edit', compact('client', 'entreprises'));
    }

    public function show(Client $client)
    {
        // $client= Client::where('id', $client)->firstOrFail();

        return view('clients.show', compact('client'));
    }


    public function update(Client $client)
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required|integer'
        ]);

        $client->update($data);

        return redirect('clients/' . $client->id);
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('clients');
    }
}

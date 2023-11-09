<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact.create');
    }
    public function create()
    {
        // $messages = Message::all();
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'pseudo' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('user@gmail.com')->send(new ContactMail($data));

        //Message flash
        // session()->flash('message', 'Votre message a bien été envoyé.');

        return redirect('contact')->with('message', 'Votre message a bien été envoyé.');


    }
}

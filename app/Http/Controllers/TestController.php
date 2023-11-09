<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\TestMarkdownMail;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('bar');
    }

    public function foo()
    {
        if (!Gate::allows('access-admin')){
            abort('403');
        }

        return view('test.foo');
    }

    public function bar()
    {
        // $user= ['email'=>'yrouvah@gmail.com', 'name'=>'Monsieur Truc'];

        // Mail::to($user['email'])->send(new TestMail($user));

        Mail::to('yrouvah@gmail.com')->send(new TestMarkdownMail());

        return view('test.bar');
    }
}

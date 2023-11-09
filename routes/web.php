<?php

use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactController;

Route::resource('clients', ClientsController::class);

// Route::resource('mails', TestController::class);
Route::get('/foo', '\App\Http\Controllers\TestController@foo');
Route::get('/bar', '\App\Http\Controllers\TestController@bar');


// Contact
 Route::resource('contact', ContactController::class);
//Route::get('contact/create', [ContactController::class, 'create'])->name('create');
//Route::get('contact/store', [ContactController::class, 'store'])->name('store');

// Post
// Route::get('/', 'App\Http\Controllers\PostController@index');
Route::get('/', [PostController::class, 'index']);


Route::view('a-propos', 'a-propos');

<?php

use App\Http\Controllers\contactUs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {
    return view('emails.contact');
});
Route::post('/send' , [contactUs::class , 'send'])->name('send.email');
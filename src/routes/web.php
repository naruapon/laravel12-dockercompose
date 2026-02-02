<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

Route::get('/send-email', function () {
    Mail::to('receiver@email.com')->send(new TestMail);
    return "Email Sent Successfully!";
});
// Test Redis
Route::get('/store', function () {
    Redis::set('Bangkok', 'Krung Thep Maha Nakhon');
});
Route::get('/retrieve', function () {
    return Redis::get('Bangkok');
});
Route::get('/', function () {
    return view('welcome');
});

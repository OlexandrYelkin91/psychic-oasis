<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});

Route::get('/crm', function () {
    return view('crm');
});
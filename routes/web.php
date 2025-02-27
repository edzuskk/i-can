<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/mac', function () {
    return view('mac');
});

Route::get('/iPad', function () {
    return view('iPad');
});

Route::get('/iPhone', function () {
    return view('iPhone');
});

Route::get('/Watch ', function () {
    return view('Watch');
});

Route::get('/Vision', function () {
    return view('Vision');
});

Route::get('/Airpods', function () {
    return view('Airpods');
});


Route::get('/TVandHome', function () {
    return view('TVandHome');
});

Route::get('/Ent', function () {
    return view('Ent');
});


Route::get('/acc', function () {
    return view('acc');
});

Route::get('/support', function () {
    return view('support');
});


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/flashcards', function () {
    return view('flashcards.view');
});


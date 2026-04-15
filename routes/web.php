<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/library',[LibraryController::class,'index'])->name('library');
Route::get('/real-estate/sales-person/illinois/version',[LibraryController::class,'questions'])->name('exam-questions');
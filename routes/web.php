<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Flashcards\FlashcardsController;

Route::get('/', function () {
    return view('index');
});

// Flash Card Routes
Route::get('/flashcards',[FlashcardsController::class,'index'])->name('flashcards');


// Library Routes
Route::get('/library',[LibraryController::class,'index'])->name('library');
Route::get('/real-estate/sales-person/illinois/version',[LibraryController::class,'questions'])->name('exam-questions');
Route::post('/exam-question',[LibraryController::class,'examAnswers']);
Route::get('/next-question/{question_id}',[LibraryController::class,'nextQuestion']);

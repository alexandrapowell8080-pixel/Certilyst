<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Flashcards\FlashcardsController;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

// Library Routes
Route::get('/library', [LibraryController::class, 'index'])->name('library');
Route::post('/exam-question', [LibraryController::class, 'examAnswers']);
Route::get('/next-question/{question_id}', [LibraryController::class, 'nextQuestion']);

// Flash Card Routes 
Route::get('/{school}/{subject}/flashcards', [FlashcardsController::class, 'index'])->name('flashcards');

// Exam Route
Route::get('/{school}/{course}/{exam}', [LibraryController::class, 'questions'])->name('exam-questions');
<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Flashcards\FlashcardsController;
use App\Http\Controllers\QuestionsController;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

// Library Routes
Route::get('/library', [LibraryController::class, 'index'])->name('library');
Route::post('/exam-question', [QuestionsController::class, 'examAnswers']);
Route::get('/next-question/{question_id}', [QuestionsController::class, 'nextQuestion']);

// Flash Card Routes 
Route::get('/{school}/{subject}/flashcards', [FlashcardsController::class, 'index'])->name('flashcards');

// Exam Route
Route::get('/{school}/{course}/{exam}', [QuestionsController::class, 'questions'])->name('exam-questions');
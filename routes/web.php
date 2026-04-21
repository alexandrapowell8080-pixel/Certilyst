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
Route::get('/previous-question/{exam_id}/{question_id}', [QuestionsController::class, 'previousQuestion']);

// Flash Card Routes 
Route::get('/{school}/{subject}/flashcards', [FlashcardsController::class, 'index'])->name('flashcards');

// Exam Route
Route::get('/{school}/{course}/{exam}', [QuestionsController::class, 'questions'])->name('exam-questions');


// --- SYSTEM UTILS ---
Route::get('/clear-cache/{secret}', function($secret) {
    $your_secret = '85c749007239f3e0597a77dd09459e44';
    if ($secret !== $your_secret) abort(403, 'Unauthorized action.');
    
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cache cleared!";
});
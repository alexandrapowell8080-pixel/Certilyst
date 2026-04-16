<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/flashcards', function () {
    return view('flashcards.view');
})->name('flashcards');


Route::get('/library',[LibraryController::class,'index'])->name('library');
Route::post('/exam-question',[LibraryController::class,'examAnswers']);
Route::get('/next-question/{question_id}',[LibraryController::class,'nextQuestion']);
Route::get('/{school}/{course}/{exam}',[LibraryController::class,'questions'])->name('exam-questions');

<?php

use App\Http\Controllers\AdminContentManagerController;
use App\Http\Controllers\Flashcards\FlashcardsController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\QuestionsController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy.policy');

Route::get('/terms-of-service', function () {
    return view('terms');
});
/*
|--------------------------------------------------------------------------
| Admin Content Manager
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/content-manager', [AdminContentManagerController::class, 'index'])
        ->name('content.manager');

    Route::put('/content-manager/questions/{question}', [AdminContentManagerController::class, 'updateQuestion'])
        ->name('content.manager.questions.update');

    Route::patch('/content-manager/questions/{question}/toggle-mark', [AdminContentManagerController::class, 'toggleQuestionMark'])
        ->name('content.manager.questions.toggle-mark');

    Route::put('/content-manager/flashcards/{flashcard}', [AdminContentManagerController::class, 'updateFlashcard'])
        ->name('content.manager.flashcards.update');

    Route::patch('/content-manager/flashcards/{flashcard}/toggle-mark', [AdminContentManagerController::class, 'toggleFlashcardMark'])
        ->name('content.manager.flashcards.toggle-mark');
});

// Library Routes
Route::get('/library', [LibraryController::class, 'index'])->name('library');
Route::post('/exam-question', [QuestionsController::class, 'examAnswers']);
Route::get('/next-question/{question_id}', [QuestionsController::class, 'nextQuestion']);
Route::get('/single-question/{question_id}', [QuestionsController::class, 'singleQuestion']);
Route::get('/previous-question/{exam_id}/{question_id}', [QuestionsController::class, 'previousQuestion']);

// Individual questions
Route::get('/question/{url}', [QuestionsController::class, 'individualQuestions'])->name('individual_questions');

// Individual flashcards
Route::get('/flashcard/{resource_url}', [FlashcardsController::class, 'show'])->name('flashcard.show');

// Flash Card Routes
Route::get('/{school}/{subject}/flashcards', [FlashcardsController::class, 'index'])->name('flashcards');

// Exam Route
Route::get('/{school}/{course}/{exam}', [QuestionsController::class, 'questions'])->name('exam-questions');

// --- SYSTEM UTILS ---
Route::get('/clear-cache/{secret}', function ($secret) {
    $your_secret = '85c749007239f3e0597a77dd09459e44';

    if ($secret !== $your_secret) {
        abort(403, 'Unauthorized action.');
    }

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return 'Cache cleared!';
});

<?php

namespace App\Http\Controllers\Flashcards;

use App\Http\Controllers\Controller;
use App\Models\Subject;

class FlashcardsController extends Controller
{
    public function index($school, $slug)
    {
        // 1. Find the subject by its slug
        $subject = Subject::where('slug', $slug)->firstOrFail();

        // 2. Fetch the flashcards 
        $flashcards = $subject->flashcards->map(function ($card) {
            return [
                'id'     => $card->id,
                'q'      => $card->question,
                'hint'   => $card->hint ?? 'No hint available',
                'a'      => $card->answer,
                'status' => 'new',
            ];
        });

        // 3. Pass the subject, flashcards, and the school string to the view
        return view('flashcards.view', compact('subject', 'flashcards', 'school'));
    }
}
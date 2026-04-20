<?php

namespace App\Http\Controllers\Flashcards;

use App\Http\Controllers\Controller;
use App\Models\Subject;

class FlashcardsController extends Controller
{
    public function index($school, $slug)
    {
        // 1. Find the subject by its slug and load relationships
        $subject = Subject::with('course.school')->where('slug', $slug)->firstOrFail();

        // Extract dynamic variables for the meta content
        $subject_name = $subject->name;
        $course_name = $subject->course->name ?? '';
        $school_name = $subject->course->school->name ?? '';
        $subject_slug = $subject->slug;
        $school_slug = $school;

        // 2. Fetch the flashcards 
        $flashcards = $subject->flashcards()->get()->map(function ($card) {
            return [
                'id'      => $card->id,
                'q'       => $card->question,
                'hint'    => $card->hint ?? 'No hint available',
                'a'       => $card->answer,
                'status'  => 'new',
                'is_hard' => $card->is_hard, 
            ];
        });

        // 3. Pass the subject, flashcards, and school to the view
        return view('flashcards.view', compact(
            'subject', 
            'flashcards', 
            'school',
            'subject_name',
            'course_name',
            'school_name',
            'subject_slug',
            'school_slug'
        ));
    }
}
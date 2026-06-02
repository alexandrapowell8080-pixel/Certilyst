<?php

namespace App\Http\Controllers\Flashcards;

use App\Http\Controllers\Controller;
use App\Models\Flashcard;
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
    public function show($resource_url)
    {

        $flashcard = Flashcard::with('subject.course.school')
            ->where('resource_url', $resource_url)
            ->firstOrFail();

        $subject = $flashcard->subject;

        $subject_name = $subject->name ?? '';
        $course_name = $subject->course->name ?? '';
        $school_name = $subject->course->school->name ?? '';

        $related_flashcards = Flashcard::where('subject_id', $subject->id)
            ->where('id', '>', $flashcard->id)
            ->whereNotNull('resource_url')
            ->orderBy('id', 'asc')
            ->limit(10)
            ->get();

        if ($related_flashcards->count() < 10) {
            $shortfall = 10 - $related_flashcards->count();

            $more_flashcards = Flashcard::where('subject_id', $subject->id)
                ->where('id', '<', $flashcard->id)
                ->whereNotNull('resource_url')
                ->orderBy('id', 'asc')
                ->limit($shortfall)
                ->get();
            $related_flashcards = $related_flashcards->concat($more_flashcards);
        }

        return view('flashcards.show', compact(
            'flashcard',
            'related_flashcards',
            'subject',
            'subject_name',
            'course_name',
            'school_name'
        ));
    }
}

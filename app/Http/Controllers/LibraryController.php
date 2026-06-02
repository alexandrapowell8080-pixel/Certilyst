<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\school;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class LibraryController extends Controller
{
    /**
     * Libary Page
     */
    public function index(): View
    {
        $start = microtime(true);
        $schools = school::select('id', 'name','slug')
            ->with([
                'course:id,school_id,name,slug',
                'course.subject:id,course_id,name,slug', // Added this to prevent lazy loading
                'course.subject.exam:id,subject_id,name,slug', // Added this to prevent lazy loading
                'course.subject.exam' => function ($query) {
            $query->select('id', 'subject_id', 'name', 'slug') // select columns
                  ->withCount('questions');                   // add questions_count
        },
            ])->get();

        $responseTime = round((microtime(true) - $start) * 1000, 2);
        // logger('responseTime: '.$responseTime);
        // dd($schools);
        return view('library.index', compact('schools'));
    }
}

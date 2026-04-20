<?php

namespace App\Http\Controllers;

use App\Models\school;
use Illuminate\View\View;

class LibraryController extends Controller
{
    /**
     * Libary Page
     */
    public function index(): View
    {
        $start = microtime(true);
        $schools = school::with(['course.subject.exam' => function ($query) {
            $query->withCount('questions');
        }])->get();
        $responseTime = round((microtime(true) - $start) * 1000, 2);
        logger('responseTime: '.$responseTime);

        return view('library.index', compact('schools'));
    }
}

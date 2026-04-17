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
        $schools = school::with(['course.subject.exam' => function($query){
            $query->withCount('questions');
        }])->get();

        return view('library.index', compact('schools'));
    }

}

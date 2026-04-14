<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LibraryController extends Controller
{
    /**
     * Libary Page
     *
     * @return View
     */
    public function index():View{
        return view('library.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LibraryController extends Controller
{
    /**
     * Libary Page
     */
    public function index(): View
    {
        $data = [
            'math' => [
                'chapters' => [
                    [
                        'title' => 'Chapter 1',
                        'topics' => [
                            ['title' => 'Topic 1', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                            ['title' => 'Topic 2', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                            ['title' => 'Topic 3', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                        ],
                    ],
                    [
                        'title' => 'Chapter 2',
                        'topics' => [
                            ['title' => 'Topic 1', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                            ['title' => 'Topic 2', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                            ['title' => 'Topic 3', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                        ],
                    ],
                    [
                        'title' => 'Chapter 3',
                        'topics' => [
                            ['title' => 'Topic 1', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                            ['title' => 'Topic 2', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                            ['title' => 'Topic 3', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                        ],
                    ],
                ],
            ],

            'english' => [
                'chapters' => [
                    [
                        'title' => 'Chapter 1',
                        'topics' => [
                            ['title' => 'Grammar', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                            ['title' => 'Comprehension', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                            ['title' => 'Writing', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                        ],
                    ],
                ],
            ],

            'science' => [
                'chapters' => [
                    [
                        'title' => 'Chapter 1',
                        'topics' => [
                            ['title' => 'Biology Basics', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                            ['title' => 'Chemistry Intro', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                            ['title' => 'Physics Intro', 'subtopics' => [
                                ['title' => 'Subtopic 1'],
                                ['title' => 'Subtopic 2'],
                            ]],
                        ],
                    ],
                ],
            ],
        ];

        return view('library.index', compact('data'));
    }

    public function questions():View
    {
        return view('library.exam.questions');
    }
}

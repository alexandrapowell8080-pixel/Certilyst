<x-library-layout>
    @section('title', 'Cerilyst Learning Library')
    @section('description',
        'Ace your '.$course_name.' using '.  $exam_name )
   

    @section('keywords', $school_name . ', ' . $course_name . ', ' . $subject_name . ', ' . $exam_name)

@section('canonical', url($school_slug . '/' . $course_slug . '/' . $exam_slug))


    @push('schema')
         <script type="application/ld+json">
        {
        "@@context": "https://schema.org",
        "@@type": "BreadcrumbList",
        "itemListElement": [
                    {
                        "@@type": "ListItem",
                        "position": 1,
                        "name": "Exam name",
                        "item": "{{ url($school_slug . '/' . $course_slug . '/' . $exam_slug) }}"
                    },
                    {
                        "@@type": "ListItem",
                        "position": 2,
                        "name": "Library",
                        "item": "{{ url('/library') }}"
                    },
                    {
                        "@@type": "ListItem",
                        "position": 3,
                        "name": "Home",
                        "item": "{{ url('/') }}"
                    }
            ]
        }
</script>
    @endpush




    {{-- NAVBAR --}}
    <div class="bg-white border-b sticky top-0 z-40" style="border-color: rgb(233, 236, 239);">
        <div class="sm:max-w-4xl mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center gap-3"><a href="{{ route('library') }}"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-chevron-left w-4 h-4 mr-1">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg> Exit</button></a>
                <div class="hidden sm:block">
                    <h2 class="font-poppins font-semibold text-sm" style="color: rgb(33, 37, 41);"
                        id="exam_id_{{ $question->exam_id }}">Texas</h2>
                </div>
            </div>
            <div class="flex items-center gap-2"><span class="font-mono text-sm font-semibold px-3 py-1 rounded-full"
                    style="background: rgb(245, 240, 255); color: rgb(106, 13, 173);">1 of 10</span><span
                    class="hidden sm:flex items-center gap-1 text-xs font-medium px-3 py-1 rounded-full"
                    style="background: rgb(255, 243, 205); color: rgb(133, 100, 4);">Trial: 1/5</span></div>
            <div class="flex items-center gap-3">
                <div class="hidden items-center gap-1.5 text-sm" style="color: rgb(108, 117, 125);"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-clock w-4 h-4">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg><span class="font-mono">02:28</span></div><a class="hidden sm:block"
                    href="{{ route('flashcards', ['school' => $school, 'subject' => $subject_slug]) }}"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-layers w-4 h-4 mr-1">
                            <path
                                d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z">
                            </path>
                            <path d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12"></path>
                            <path d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17"></path>
                        </svg> Flashcards</button></a><button
                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-8 rounded-md px-3 text-xs"
                    style="background: rgb(106, 13, 173); color: rgb(255, 255, 255);"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-send w-4 h-4 mr-1">
                        <path
                            d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z">
                        </path>
                        <path d="m21.854 2.147-10.94 10.939"></path>
                    </svg> Submit</button>
            </div>
        </div>
    </div>

    {{-- CONTENT --}}
    <div class="flex justify-between">
        {{-- left bar --}}
        <div class="hidden lg:block w-64 bg-card border-r border-border p-5 overflow-auto">
            <div class="mb-5">
                <div class="text-xs text-muted-foreground mb-2">Progress</div>
                <div aria-valuemax="100" aria-valuemin="0" role="progressbar" data-state="indeterminate" data-max="100"
                    class="relative w-full overflow-hidden rounded-full bg-primary/20 h-2 mb-2">
                    <div data-state="indeterminate" data-max="100"
                        class="h-full w-full flex-1 bg-primary transition-all" style="transform: translateX(-100%);">
                    </div>
                </div>
                <div class="text-xs text-muted-foreground"> <span class="answered_questions">0</span>
                    /{{ $questions_count }} answered</div>
            </div>
            <div class="mb-5 space-y-2 text-xs">
                <div class="flex justify-between"><span class="text-muted-foreground">Answered</span><span
                        class="font-semibold text-emerald-600 " id="answered_questions">0</span></div>
                <div class="flex justify-between"><span class="text-muted-foreground">Flagged</span><span
                        class="font-semibold text-amber-600">0</span></div>
                <div class="flex justify-between"><span class="text-muted-foreground">Remaining</span><span
                        class="font-semibold remaining_questions">{{ $questions_count }}</span></div>
            </div>
            <div class="text-xs text-muted-foreground mb-2">Questions</div>
            <div class="grid grid-cols-5 gap-1.5 max-h-[300px] overflow-y-scroll">
                @for ($i = 0; $i < $questions_count; $i++)
                    <button id="pill_{{ $i+1 }}"
                        class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border
                        {{ $i == 0 ? 'brand-gradient text-white border-transparent bg-primary' : 'bg-primary/30 text-muted-foreground border-border hover:border-primary/30' }}
                         ">{{ $i + 1 }}</button>
                @endfor

            </div>
        </div>

        {{-- question --}}
        <div class="flex justify-center w-full">

            <div class="border p-6 sm:p-8  w-full "
                style="background: rgb(255, 255, 255); border-color: rgb(233, 236, 239); box-shadow: rgba(0, 0, 0, 0.06) 0px 4px 12px;">
                <div class="flex items-center justify-between mb-6 ">

                    <span class="text-xs font-semibold px-3 py-1 rounded-full capitalize"
                        style="background: rgb(245, 240, 255); color: rgb(106, 13, 173);">
                        {{ $question->question_type == 'Regular' ? 'Single choice' : 'Single Choice' }}</span><button onclick="flaqQuestion"
                        class="flex items-center hidden gap-1.5 text-xs font-medium transition-colors"
                        style="color: rgb(108, 117, 125);"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-flag w-4 h-4">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>Flag</button>
                </div>

                <h3 id="q_id_{{ $question['id'] }}" class="question text-lg font-semibold mb-6 leading-relaxed"
                    style="color: rgb(33, 37, 41);">
                    {{ $question['question'] }}</h3>
                <div class="space-y-3">
                    <button id="choiceA"
                        class="w-full text-left p-4 rounded-xl border-2 border-border  hover:bg-muted/80 transition-all duration-200 flex items-start gap-3">
                        <span
                            class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">A</span><span
                            class="text-sm leading-relaxed" id="choiceA_">{{ $question['choiceA'] }}</span>
                    </button>
                    <button id="choiceB"
                        class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                        <span
                            class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">B</span><span
                            class="text-sm leading-relaxed" id="choiceB_">{{ $question['choiceB'] }}</span>
                    </button>
                    <button id="choiceC"
                        class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                        <span
                            class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">C</span><span
                            class="text-sm leading-relaxed" id="choiceC_">{{ $question['choiceC'] }}</span>
                    </button>
                    <button id="choiceD"
                        class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                        <span
                            class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">D</span><span
                            class="text-sm leading-relaxed" id="choiceD_">{{ $question['choiceD'] }}</span>
                    </button>
                </div>
                <div class="flex items-center justify-between mt-8 pt-6 border-t"
                    style="border-color: rgb(233, 236, 239);">
                    <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-transparent shadow-sm hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2"
                        disabled="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-chevron-left w-4 h-4 mr-1">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg> Previous</button>
                    <button id="submitButton" onclick="submitAnswer()"
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2"
                        disabled="" style="background: rgb(106, 13, 173); color: rgb(255, 255, 255);">Submit
                        Answer</button>
                        <button id="nextButton" onclick="nextQuestion()"
                        class="inline-flex items-center hidden justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2"
                          style="background: rgb(155, 47, 233); color: rgb(255, 255, 255);">Next Question
                        </button>


                </div>
            </div>
        </div>


        <div id="overlay"
            class="fixed hidden  inset-0 bg-black/50 bg-opacity-90 z-50 flex items-center justify-center">
            <div class="bg-white rounded-t-3xl  sm:rounded-2xl p-6 sm:p-8 w-full max-w-lg mx-auto relative shadow-2xl">
                <button type="button" onclick="closeOverLay()"
                    class="absolute right-4 top-4 rounded-full p-1.5 bg-muted/60 hover:bg-muted transition-colors"
                    aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-x h-4 w-4 text-foreground">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg></button>
                <div id="wrong_card" class="hidden">
                    <div id="wrong_card" class="flex items-center gap-3 mb-5"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-x w-9 h-9 text-red-500 shrink-0">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m15 9-6 6"></path>
                            <path d="m9 9 6 6"></path>
                        </svg>
                        <div>
                            <p class="text-xl font-bold text-red-600">Incorrect</p>
                            <p class="text-sm text-muted-foreground">Review the explanation below.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3 mb-4">
                        <div class="rounded-xl p-3 bg-red-50 border border-red-200 text-center">
                            <p class="text-[11px] font-semibold text-red-400 uppercase tracking-wide mb-1">Your Answer
                            </p>
                            <p class="text-2xl font-extrabold text-red-500" id="user_answer"></p>
                            {{-- <p class="text-xs text-red-400 mt-1 line-clamp-2">Race</p> --}}
                        </div>
                        <div class="rounded-xl p-3 bg-green-50 border border-green-200 text-center">
                            <p class="text-[11px] font-semibold text-green-500 uppercase tracking-wide mb-1">Correct
                                Answer
                            </p>
                            <p class="text-2xl font-extrabold text-green-600" id="correct_answer"></p>
                            {{-- <p class="text-xs text-green-500 mt-1 line-clamp-2">Age</p> --}}
                        </div>
                    </div>
                </div>
                <div class="hidden" id="correct_card">
                    <div class="flex items-center gap-3 mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-check-big w-9 h-9 text-green-500 shrink-0">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg>
                        <div>
                            <p class="text-xl font-bold text-green-700">Correct!</p>
                            <p class="text-sm text-muted-foreground">Great job, keep it up.</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-xl p-4 bg-blue-50 border border-blue-200 mb-5 max-h-[400px] overflow-y-scroll">
                    <p class="text-xs font-semibold text-blue-500 uppercase tracking-wide mb-1">Explanation</p>
                    <div class="text-sm leading-relaxed text-blue-900" id="rationale"></div>
                </div>
                <div class="flex flex-col sm:flex-row gap-3"><a href="{{ route('flashcards', ['school' => $school, 'subject' => $subject_slug]) }}"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-transparent shadow-sm hover:bg-accent hover:text-accent-foreground px-4 py-2 flex-1 gap-1.5 h-11"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-book-open w-4 h-4">
                            <path d="M12 7v14"></path>
                            <path
                                d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                            </path>
                        </svg>Flashcards</a><button onclick="nextQuestion()"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary shadow hover:bg-primary/90 px-4 py-2 flex-1 gradient-primary text-white gap-1.5 h-11 text-base font-semibold">Next
                        Question<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg></button></div>
            </div>
        </div>
        {{-- right bar --}}
        <div class=" sm:block hidden w-72 bg-card border-l border-border p-5 overflow-auto">
            <div class="space-y-5">
                <div class="bg-blue-400/20 rounded-xl p-4">
                    <div class="flex items-center gap-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-lightbulb w-4 h-4 text-amber-500">
                            <path
                                d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5">
                            </path>
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                        </svg><span class="text-xs font-semibold">Exam Tips</span></div>
                    <p class="text-xs text-muted-foreground leading-relaxed">Read each question carefully.
                        Eliminate
                        obviously wrong answers first. Manage your time — don't spend too long on any single
                        question.
                    </p>
                </div>
                <div class="bg-secondary/10 rounded-xl p-4">
                    <div class="flex items-center gap-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-circle-help w-4 h-4 text-primary">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <path d="M12 17h.01"></path>
                        </svg><span class="text-xs font-semibold">Study Coach</span></div>
                    <p class="text-xs text-muted-foreground leading-relaxed">{{ $question['study_hint'] ?? '' }}
                    </p>
                </div>
            </div>
        </div>



</x-library-layout>

<script>
    let selectedAnswer;
    let answeredQuestions = 0;
    let remianingQuestion = document.querySelector('.remaining_questions').innerText;
    let submitButton = document.getElementById('submitButton');
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    document.addEventListener('DOMContentLoaded', checkChoices());
    const exam_id = document.querySelector('[id^="exam_id"]').id.replace('exam_id_', '');

    function checkChoices() {
        const options = document.querySelectorAll('[id^="choice"]');
        options.forEach(option => {
            option.addEventListener('click', function() {
                options.forEach(opt => opt.classList.remove('bg-primary/5', 'border-2',
                    'border-primary', 'text-black'));
                this.classList.add('bg-primary/5', 'border-2', 'border-primary', 'text-black');
                selectedAnswer = option.id.replace('choice', '');
                submitButton.removeAttribute('disabled');
            });
        });
    }

    // submitButton.addEventListener('click', submitAnswer())

    function submitAnswer() {
        let qid = document.querySelector('.question').id.replace('q_id_', '')
        submitButton.disabled = true;
        document.getElementById('submitButton').classList.add('hidden')
        document.getElementById('nextButton').classList.remove('hidden')
        const postData = {
            question_id: qid,
            user_answer: selectedAnswer,
            exam_id: exam_id
        };
        fetch('/exam-question', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': token,
                },
                body: JSON.stringify(postData)
            })
            .then(response => response.json())
            .then(data => {
                remianingQuestion--
                document.querySelector('.remaining_questions').innerText = remianingQuestion 
                document.getElementById('overlay').classList.remove('hidden')
                document.getElementById('rationale').innerHTML = data.rationale
                let p_id = Number(answeredQuestions) +  1
                let next_p_id = Number(answeredQuestions) +  2
                let pill_id = "pill_"+ p_id
                let next_pill_id = "pill_"+ next_p_id 
                let pill = document.getElementById(pill_id)
                pill.classList.remove('bg-primary','text-muted-foreground')
                if (data.status == 'correct') {
                    document.getElementById('correct_card').classList.remove('hidden')
                    pill.classList.add('bg-green-700','text-white')
                } else if (data.status == 'wrong') {
                    pill.classList.add('bg-red-700','text-white')
                    document.getElementById('wrong_card').classList.remove('hidden')
                    document.getElementById('user_answer').innerText = selectedAnswer
                    document.getElementById('correct_answer').innerText = data.correct_answer
                }

                document.getElementById(next_pill_id).classList.remove('bg-primary/30');
                document.getElementById(next_pill_id).classList.add('bg-primary');
            })
            .catch(err => {
                console.error(err)
            })
    }

    function nextQuestion() {
        let qid = document.querySelector('.question').id.replace('q_id_', '')
        
        const postData = {
            question_id: qid,
        };
        fetch('/next-question/' + qid)
            .then(response => response.json())
            .then(data => {
                document.getElementById('submitButton').classList.remove('hidden')
        document.getElementById('nextButton').classList.add('hidden')
                document.getElementById('overlay').classList.add('hidden')
                 document.getElementById('wrong_card').classList.add('hidden')
                  document.getElementById('correct_card').classList.add('hidden')
                selectedAnswer = null
                const options = document.querySelectorAll('[id^="choice"]');
                options.forEach(option => {
                    options.forEach(opt => opt.classList.remove('bg-primary/5', 'border-2',
                        'border-primary', 'text-black'));
                });
                document.querySelector('.question').innerText = data.question
                document.querySelector('.question').id = "q_id_" + data.id 
                answeredQuestions = answeredQuestions + 1
                document.querySelector('.answered_questions').innerText = answeredQuestions
                document.getElementById('answered_questions').innerText = answeredQuestions
                document.getElementById('choiceA_').innerText = data.choiceA
                document.getElementById('choiceB_').innerText = data.choiceB
                document.getElementById('choiceC_').innerText = data.choiceC
                document.getElementById('choiceD_').innerText = data.choiceD
            })
            .catch(err => {
                console.error(err)
            })
    }

    function closeOverLay(){
          document.getElementById('overlay').classList.add('hidden')
    }
</script>

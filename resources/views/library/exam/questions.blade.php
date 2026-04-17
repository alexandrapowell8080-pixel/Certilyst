<x-library-layout>
    {{-- NAVBAR --}}
    <div class="bg-white border-b sticky top-0 z-40" style="border-color: rgb(233, 236, 239);">
        <div class="max-w-4xl mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center gap-3"><a href="{{ route('library') }}"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-chevron-left w-4 h-4 mr-1">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg> Exit</button></a>
                <div class="hidden sm:block">
                    <h2 class="font-poppins font-semibold text-sm" style="color: rgb(33, 37, 41);">Texas</h2>
                </div>
            </div>
            <div class="flex items-center gap-2"><span class="font-mono text-sm font-semibold px-3 py-1 rounded-full"
                    style="background: rgb(245, 240, 255); color: rgb(106, 13, 173);">1 of 10</span><span
                    class="hidden sm:flex items-center gap-1 text-xs font-medium px-3 py-1 rounded-full"
                    style="background: rgb(255, 243, 205); color: rgb(133, 100, 4);">Trial: 1/5</span></div>
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-1.5 text-sm" style="color: rgb(108, 117, 125);"><svg
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
            <div class="grid grid-cols-5 gap-1.5">
                @for ($i = 0; $i < $questions_count; $i++)
                    <button
                        class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border
                        {{ $i == 0 ? 'brand-gradient text-white border-transparent bg-primary' : 'bg-primary/30 text-muted-foreground border-border hover:border-primary/30' }}
                         ">{{ $i + 1 }}</button>
                @endfor

            </div>
        </div>
        {{-- question --}}
        <div class="flex justify-center   w-full">

            <div class="border p-6 sm:p-8  w-full "
                style="background: rgb(255, 255, 255); border-color: rgb(233, 236, 239); box-shadow: rgba(0, 0, 0, 0.06) 0px 4px 12px;">
                <div class="flex items-center justify-between mb-6"><span
                        class="text-xs font-semibold px-3 py-1 rounded-full capitalize"
                        style="background: rgb(245, 240, 255); color: rgb(106, 13, 173);">Single Choice</span><button
                        class="flex items-center gap-1.5 text-xs font-medium transition-colors"
                        style="color: rgb(108, 117, 125);"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-flag w-4 h-4">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>Flag</button></div>
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


                </div>
            </div>
        </div>

        <div id="overlay"
            class="fixed hidden  inset-0 bg-black/50 bg-opacity-90 z-50 flex items-center justify-center">
            <div class="bg-white rounded-lg p-6 sm:w-2/3 w-10/12 mx-auto overflow-y-scroll max-h-[80vh]">
                <div class="flex flex-col space-y-1.5 text-center sm:text-left">
                    <h2 id="wrong_icon"
                        class="text-lg hidden font-semibold leading-none tracking-tight flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-circle-x w-6 h-6 text-destructive">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="m15 9-6 6"></path>
                            <path d="m9 9 6 6"></path>
                        </svg><span class="text-destructive">Incorrect</span>
                    </h2>

                    <h2 id="correct_icon"
                        class="text-lg hidden font-semibold leading-none tracking-tight flex items-center gap-2"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-circle-check-big w-6 h-6 text-green-500">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                            <path d="m9 11 3 3L22 4"></path>
                        </svg><span class="text-green-700">Correct!</span></h2>
                </div>
                <div class="space-y-5">
                    <div class="rounded-xl p-4 border"
                        style="background: rgb(240, 253, 244); border-color: rgb(134, 239, 172);">
                        <div class="flex items-start gap-2 mb-2">
                            <p class="text-sm leading-relaxed" style="color: rgb(22, 101, 52);" id="rationale"> </p>
                        </div>

                        <div class="flex gap-3 pt-2"><a class="flex-1"
                                href="{{ route('flashcards', ['school' => $school, 'subject' => $subject_slug]) }}"><button
                                    class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-transparent shadow-sm hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs w-full"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-book-open w-4 h-4 mr-1.5">
                                        <path d="M12 7v14"></path>
                                        <path
                                            d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z">
                                        </path>
                                    </svg> Review in Flashcards</button></a><button onclick="nextQuestion()"
                                class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-8 rounded-md px-3 text-xs flex-1"
                                style="background: rgb(106, 13, 173); color: rgb(255, 255, 255);">Next Question <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4 ml-1.5">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></button></div>
                    </div><button type="button"
                        class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none data-[state=open]:bg-accent data-[state=open]:text-muted-foreground"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-x h-4 w-4">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg><span class="sr-only">Close</span></button>
                </div>
            </div>
        </div>
        {{-- right bar --}}
        <div class=" xl:block w-72 bg-card border-l border-border p-5 overflow-auto">
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
    let submitButton = document.getElementById('submitButton');
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    document.addEventListener('DOMContentLoaded', checkChoices());

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
        const postData = {
            question_id: qid,
            user_answer: selectedAnswer,
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
                document.getElementById('overlay').classList.remove('hidden')
                document.getElementById('rationale').innerText = data.rationale
                if (data.status == 'correct') {
                    document.getElementById('correct_icon').classList.remove('hidden')
                } else if (data.status == 'wrong') {
                    document.getElementById('wrong_icon').classList.remove('hidden')
                }
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
                document.getElementById('overlay').classList.add('hidden')
                selectedAnswer = null
                const options = document.querySelectorAll('[id^="choice"]');
                options.forEach(option => {
                    options.forEach(opt => opt.classList.remove('bg-primary/5', 'border-2',
                        'border-primary', 'text-black'));
                });
                document.querySelector('.question').innerText = data.question
                document.querySelector('.question').id = "q_id_" + data.id
                document.getElementById('correct_icon').classList.add('hidden')
                document.getElementById('wrong_icon').classList.add('hidden')
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
</script>

<x-library-layout>
    @section('title', 'Cerilyst Learning Library')
    @section('description', 'Ace your ' . $course_name . ' using ' . $exam_name)


    @section('keywords', $school_name . ', ' . $course_name . ', ' . $subject_name . ', ' . $exam_name)

    @section('canonical', url($school_slug . '/' . $course_slug . '/' . $exam_slug))


    @push('schema')
        <meta name="robots" content="noindex" />
        <script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
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
                        id="exam_id_{{ $question->exam_id }}">{{ $exam_name }}</h2>
                </div>
            </div>
            <div class="flex items-center gap-2 hidden"><span
                    class="font-mono text-sm font-semibold px-3 py-1 rounded-full"
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
                    class="inline-flex hidden items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-8 rounded-md px-3 text-xs"
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
                    <button id="pill_{{ $i + 1 }}"
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
                <nav class="flex px-5 py-2 mx-auto my-1 text-muted-foreground bg-card border border-border rounded-xl w-fit"
                    aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/"
                                class="inline-flex items-center text-sm font-medium hover:text-primary transition-colors duration-200">
                                <svg class="w-4 h-4 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                <span class="hidden sm:block">Home</span>
                            </a>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <a href="/library"
                                    class="ml-1 text-sm font-medium hover:text-primary md:ml-2 transition-colors duration-200">
                                    <span class="sm:block hidden">Library</span>
                                    <svg class="block sm:hidden" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-library-big-icon lucide-library-big">
                                        <rect width="8" height="18" x="3" y="3" rx="1" />
                                        <path d="M7 3v18" />
                                        <path
                                            d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
                                    </svg>

                                </a>
                            </div>
                        </li>

                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-accent" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-sm font-bold text-foreground md:ml-2">{{ $school_name }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <div class="flex items-center justify-between mb-6 ">

                    @if ($question->question_type == 'Regular')
                        <span id="question_type"
                            class=" regular text-xs font-semibold px-3 py-1 rounded-full capitalize"
                            style="background: rgb(245, 240, 255); color: rgb(106, 13, 173);">
                            Single choice
                        @elseif ($question->question_type == 'Multiple Choice')
                            <span id="question_type"
                                class="multiple_choice text-xs font-semibold px-3 py-1 rounded-full capitalize"
                                style="background: rgb(245, 240, 255); color: rgb(106, 13, 173);">
                                Multiple Choice
                            @elseif ($question->question_type == 'Drag and Drop')
                                <span id="question_type"
                                    class="drag_and_drop text-xs font-semibold px-3 py-1 rounded-full capitalize"
                                    style="background: rgb(245, 240, 255); color: rgb(106, 13, 173);">
                                    Drag and Drop
                                @elseif ($question->question_type == 'List Selection')
                                    <span id="question_type"
                                        class="list_selection text-xs font-semibold px-3 py-1 rounded-full capitalize"
                                        style="background: rgb(245, 240, 255); color: rgb(106, 13, 173);">
                                        List Selection
                                    @elseif ($question->question_type == 'Images')
                                        <span id="question_type"
                                            class="images text-xs font-semibold px-3 py-1 rounded-full capitalize"
                                            style="background: rgb(245, 240, 255); color: rgb(106, 13, 173);">
                                            Images
                                        @elseif ($question->question_type == 'Selection')
                                            <span id="question_type"
                                                class="selection text-xs font-semibold px-3 py-1 rounded-full capitalize"
                                                style="background: rgb(245, 240, 255); color: rgb(106, 13, 173);">
                                                Selection
                    @endif
                    </span><button onclick="flaqQuestion"
                        class="flex items-center hidden gap-1.5 text-xs font-medium transition-colors"
                        style="color: rgb(108, 117, 125);"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-flag w-4 h-4">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>Flag</button>
                </div>

                <h2 id="extarct" class="sn-pro-700 text-lg font-semibold mb-6 leading-relaxed" style="color: rgb(33, 37, 41);">
                    {{ $question['extract'] }}</h2>

                <h3 id="q_id_{{ $question['id'] }}" class="question  font-semibold mb-6 leading-relaxed"
                    style="color: rgb(33, 37, 41);">
                    @if ($question->question_type == 'Selection')
                        {{ explode(':', $question['question'])[0] }}
                    @elseif ($question->question_type == 'List Selection')
                    @php
                        preg_match('/(.*?)(\[[^\]]+\])/', $question['question'], $matches);
                       
                    @endphp
                    {{ $matches[1] }}
                  
                        @else
                        {{ $question['question'] }}
                    @endif
                </h3>
                <div id="drag-drop-container"></div>
                @if ($question->question_type == 'Drag and Drop')
                    <div id="dd_container">
                        @php
                            $choices = [
                                $question['choiceA'],
                                $question['choiceB'],
                                $question['choiceC'],
                                $question['choiceD'],
                                $question['choiceE'],
                                $question['choiceF'],
                                $question['choiceG'],
                            ];
                        @endphp

                        <x-drag-and-drop :items="$choices" :correctOrder="['I', 'M', 'P', 'R', 'Z']" />
                    </div>
                @elseif ($question->question_type == 'Selection')
                    @php
                        preg_match_all('/\[(.*?)\]/', explode(':', $question['question'])[1], $matches);
                        $results = $matches[1];
                    @endphp

                    <div class="space-y-3">
                        @php
                            // Define the choices to loop through to keep the code DRY
                            $choices = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
                        @endphp


                        @foreach ($choices as $index => $letter)
                            @php
                                $choiceText = $question['choice' . $letter] ?? null;
                                $coverageText = $matches[1][$index] ?? null;
                            @endphp

                            @if ($choiceText)
                                <div class="flex items-center gap-3">

                                    <!-- LEFT SIDE (coverage values) -->
                                    <button id="choice{{ $letter }}"
                                        class="flex-grow text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3 group">

                                        <span
                                            class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground group-hover:border-primary group-hover:text-primary transition-colors">
                                            {{ $letter }}
                                        </span>

                                        <span class="text-sm leading-relaxed">
                                            {{ $coverageText }}
                                        </span>

                                    </button>

                                    <!-- RIGHT SIDE (dropdown with choices) -->
                                    <div class="relative w-5/12">
                                        <select id="rank{{ $letter }}" onchange="onSelectAnswer()"
                                            class="appearance-none w-full h-14 pl-3 pr-2 rounded-xl border-2 border-border bg-card text-foreground font-bold text-sm focus:border-primary focus:ring-2 focus:ring-primary outline-none transition-all cursor-pointer">

                                            @foreach ($choices as $opt)
                                                @php
                                                    $text = $question['choice' . $opt] ?? null;
                                                @endphp

                                                @if ($text)
                                                    <option value="{{ $opt }}">
                                                        {{ $text }}
                                                    </option>
                                                @endif
                                            @endforeach

                                        </select>

                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-1 flex items-center px-1 text-muted-foreground">
                                            <svg class="h-3 w-3" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                            @endif
                        @endforeach


                    </div>

                @elseif ($question->question_type == 'List Selection')
           
            {{ $matches[2] }}
                    <div class="space-y-3">
                        @php
                            // Define the choices to loop through to keep the code DRY
                            $choices = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
                        @endphp


                        @foreach ($choices as $index => $letter)
                            @php
                                $choiceText = $question['choice' . $letter] ?? null;
                                $coverageText = $matches[1][$index] ?? null;
                            @endphp

                            @if ($choiceText)
                                <div class="flex items-center gap-3">

                                    <!-- LEFT SIDE (coverage values) -->
                                    <button id="choice{{ $letter }}"
                                        class="flex-grow text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3 group">

                                        <span
                                            class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground group-hover:border-primary group-hover:text-primary transition-colors">
                                            {{ $letter }}
                                        </span>

                                        <span class="text-sm leading-relaxed">
                                            {{ $choiceText }}
                                        </span>

                                    </button>

                                    <!-- RIGHT SIDE (dropdown with choices) -->
                                    <div class="relative w-5/12">
                                        <select id="rank{{ $letter }}" onchange="onSelectAnswer()"
                                            class="appearance-none w-full h-14 pl-3 pr-2 rounded-xl border-2 border-border bg-card text-foreground font-bold text-sm focus:border-primary focus:ring-2 focus:ring-primary outline-none transition-all cursor-pointer">

                                            @foreach (array_map('trim', explode(',', trim($matches[2], "[]"))) as $opt)

    @php
        $key = 'choice' . str_replace(' ', '_', $opt);
        $text = $question[$key] ?? null;
    @endphp

    @if ($text)
        <option value="{{ $opt }}">
            {{ $opt }}
        </option>
    @endif

@endforeach

                                        </select>

                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-1 flex items-center px-1 text-muted-foreground">
                                            <svg class="h-3 w-3" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                            @endif
                        @endforeach


                    </div>
                @elseif ($question->question_type == 'Images')
                    <div class="space-y-3">
                        <button id="choiceA"
                            class="w-full text-left p-4 rounded-xl border-2 border-border  hover:bg-muted/80 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">A</span><img
                                src={{ $question['choiceA'] }} class="text-sm leading-relaxed" id="optionA" />
                        </button>
                        <button id="choiceB"
                            class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">B</span><img
                                src={{ $question['choiceB'] }} class="text-sm leading-relaxed" id="optionB" />
                        </button>
                        <button id="choiceC"
                            class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">C</span><img
                                src={{ $question['choiceC'] }} class="text-sm leading-relaxed" id="optionC" />
                        </button>
                        <button id="choiceD"
                            class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">D</span><img
                                src={{ $question['choiceD'] }} class="text-sm leading-relaxed" id="optionD" />
                        </button>
                        <button id="choiceE"
                            class="{{ $question['choiceE'] == null ? 'hidden' : 'block' }} w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">E</span><img
                                src={{ $question['choiceE'] }} class="text-sm leading-relaxed" id="optionE" />
                        </button>
                        <button id="choiceF"
                            class=" {{ $question['choiceF'] == null ? 'hidden' : 'block' }} w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">F</span><img
                                src={{ $question['choiceF'] }} class="text-sm leading-relaxed" id="optionF" />
                        </button>
                        <button id="choiceG"
                            class=" {{ $question['choiceG'] == null ? 'hidden' : 'block' }} w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">G</span><img
                                src={{ $question['choiceG'] }} class="text-sm leading-relaxed" id="optionG" />
                        </button>

                    </div>
                @else
                    <div class="space-y-3" id="regular_container">
                        <button id="choiceA"
                            class="w-full text-left p-4 rounded-xl border-2 border-border  hover:bg-muted/80 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">A</span><span
                                class="text-sm leading-relaxed" id="optionA">{{ $question['choiceA'] }}</span>
                        </button>
                        <button id="choiceB"
                            class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">B</span><span
                                class="text-sm leading-relaxed" id="optionB">{{ $question['choiceB'] }}</span>
                        </button>
                        <button id="choiceC"
                            class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">C</span><span
                                class="text-sm leading-relaxed" id="optionC">{{ $question['choiceC'] }}</span>
                        </button>
                        <button id="choiceD"
                            class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">D</span><span
                                class="text-sm leading-relaxed" id="optionD">{{ $question['choiceD'] }}</span>
                        </button>
                        <button id="choiceE"
                            class="{{ $question['choiceE'] == null ? 'hidden' : 'block' }} w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">E</span><span
                                class="text-sm leading-relaxed" id="optionE">{{ $question['choiceE'] }}</span>
                        </button>
                        <button id="choiceF"
                            class=" {{ $question['choiceF'] == null ? 'hidden' : 'block' }} w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">F</span><span
                                class="text-sm leading-relaxed" id="optionF">{{ $question['choiceF'] }}</span>
                        </button>
                        <button id="choiceG"
                            class=" {{ $question['choiceG'] == null ? 'hidden' : 'block' }} w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3">
                            <span
                                class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">G</span><span
                                class="text-sm leading-relaxed" id="optionG">{{ $question['choiceG'] }}</span>
                        </button>

                    </div>
                @endif
                <div class="flex items-center justify-between mt-8 pt-6 border-t"
                    style="border-color: rgb(233, 236, 239);">
                    <button id="previousButton" onclick="previousQuestion()" disabled
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-transparent shadow-sm hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2">
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
                <div class="flex flex-col sm:flex-row gap-3"><a
                        href="{{ route('flashcards', ['school' => $school, 'subject' => $subject_slug]) }}"
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
                <div class="bg-secondary/10 rounded-xl p-4 hidden">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let selectedAnswer;
    let selectedAnswers = [];
    let dragAndDropAnswers = [];
    let imageSelected;
    let selectOptionAnswer;
    let answeredQuestions = 0;
    let question_type = null;
    let remianingQuestion = document.querySelector('.remaining_questions').innerText;
    let submitButton = document.getElementById('submitButton');
    let previousButton = document.getElementById('previousButton');
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    document.addEventListener('DOMContentLoaded', checkChoices());
    const exam_id = document.querySelector('[id^="exam_id"]').id.replace('exam_id_', '');

    function checkChoices() {
        const options = document.querySelectorAll('[id^="choice"]');
        options.forEach(option => {
            option.addEventListener('click', function() {
                question_type = checkQuestionType()
                if (question_type == 'regular' || question_type == 'images') {
                    options.forEach(opt => opt.classList.remove('bg-primary/5', 'border-2',
                        'border-primary', 'text-black'));
                    this.classList.add('bg-primary/5', 'border-2', 'border-primary', 'text-black');
                    selectedAnswer = option.id.replace('choice', '');
                } else if (question_type == 'multiple_choice') {
                    let choice = option.id.replace('choice', '')

                    if (selectedAnswers != null && selectedAnswers.includes(choice)) {
                        this.classList.remove('bg-primary/5', 'border-primary', 'text-black');
                        selectedAnswers = selectedAnswers.filter(item => item !== choice);
                    } else {
                        this.classList.add('bg-primary/5', 'border-primary', 'border-2', 'text-black');
                        selectedAnswers.push(choice);
                    }
                } else if (question_type == 'drag_and_drop') {
                    console.log('hello')
                }
                activateSubmitBtn()
            });

        });
    }

    function clearChoices() {
        const options = document.querySelectorAll('[id^="choice"]');

        options.forEach(opt => opt.classList.remove('bg-primary/5', 'border-2',
            'border-primary', 'text-black'));


    }

    function checkQuestionType() {
        let classes = document.getElementById('question_type').classList
        if (classes.contains('multiple_choice')) {
            question_type = 'multiple_choice'
            return 'multiple_choice'
        } else if (classes.contains('regular')) {
            question_type = 'regular'
            return 'regular'
        } else if (classes.contains('drag_and_drop')) {
            question_type = 'drag_and_drop'
            return 'drag_and_drop'
        } else if (classes.contains('images')) {
            question_type = 'regular'
            return 'regular'
        } else if (classes.contains('selection')) {
            question_type = 'selection'
            return 'selection'
        }
    }


    function submitAnswer() {
        let qid = document.querySelector('.question').id.replace('q_id_', '')
        submitButton.disabled = true;
        document.getElementById('submitButton').classList.add('hidden')
        document.getElementById('nextButton').classList.remove('hidden')
        let user_answer;
        console.log(question_type)
        if (question_type == 'regular') {
            user_answer = selectedAnswer
        } else if (question_type == 'multiple_choice') {
            user_answer = selectedAnswers.join(" ")
        } else if (question_type == 'drag_and_drop') {
            dragAndDropAnswers = Array.from(document.querySelectorAll(".sortable-item"))
                .map(el => el.getAttribute("data-value"));
            user_answer = dragAndDropAnswers.join(", ")
        } else if (question_type == 'selection') {
            user_answer = null;
            const letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
            const userSelections = {};

            letters.forEach(letter => {
                const selectEl = document.getElementById(`rank${letter}`);
                console.log(selectEl?.value)
                userSelections[letter] = selectEl?.value;
            });

            console.log(userSelections);
            user_answer = Object.values(userSelections)
                .filter(v => v !== undefined)
                .join(',');

        }
        const postData = {
            question_id: qid,
            user_answer: user_answer,
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
                let p_id = Number(answeredQuestions) + 1
                let next_p_id = Number(answeredQuestions) + 2
                let pill_id = "pill_" + p_id
                let next_pill_id = "pill_" + next_p_id
                let pill = document.getElementById(pill_id)
                pill.classList.remove('bg-primary', 'text-muted-foreground')
                if (data.status == 'correct') {
                    document.getElementById('correct_card').classList.remove('hidden')
                    pill.classList.add('bg-green-700', 'text-white')
                } else if (data.status == 'wrong') {
                    pill.classList.add('bg-red-700', 'text-white')
                    document.getElementById('wrong_card').classList.remove('hidden')
                    if (selectedAnswer) {
                        document.getElementById('user_answer').innerText = selectedAnswer
                    } else if (selectedAnswers.length != 0) {
                        document.getElementById('user_answer').innerText = selectedAnswers.join(",")
                    } else if (dragAndDropAnswers.length != 0) {
                        document.getElementById('user_answer').innerText = dragAndDropAnswers
                    }
                    document.getElementById('correct_answer').innerText = data.correct_answer
                }

                document.getElementById(next_pill_id).classList.remove('bg-primary/30');
                document.getElementById(next_pill_id).classList.add('bg-primary');
                selectedAnswer = null;
                selectedAnswers = [];
                dragAndDropAnswers = [];
                clearChoices();
            })
            .catch(err => {
                console.error(err)
            })
    }

    function nextQuestion() {
        let qid = document.querySelector('.question').id.replace('q_id_', '')
        activatePreviousBtn()
        const postData = {
            question_id: qid,
        };
        fetch('/next-question/' + qid)
            .then(response => response.json())
            .then(data => {
                if (data.message == 'No more questions') {
                    deactivatePreviousBtn()
                    Swal.fire({
                        icon: 'success',
                        title: 'Congratulation!',
                        text: "You have successfully reached the end of the exam, Try more questions to better yourself!.",
                        confirmButtonColor: '#f0ad4e',
                        footer: "<a href=\"library\">Library</a>"
                    });

                    return;
                }
                document.getElementById('submitButton').classList.remove('hidden')
                document.getElementById('nextButton').classList.add('hidden')
                document.getElementById('overlay').classList.add('hidden')
                document.getElementById('wrong_card').classList.add('hidden')
                document.getElementById('correct_card').classList.add('hidden')
                selectedAnswer = null
                const options = document.querySelectorAll('[id^="choice"]');
                options.forEach(option => {
                    option.classList.remove('bg-primary/5',
                        'border-primary', 'text-black');
                    option.classList.add('border-2');
                });
                // start
                updateQuestion(data)

                // end


            })
            .catch(err => {
                console.error(err)
            })
    }

    function closeOverLay() {
        document.getElementById('overlay').classList.add('hidden')
    }

    function renderDragAndDrop(items) {

        document.getElementById('regular_container')?.classList.add('hidden')
        document.getElementById('dd_container')?.remove()
        const container = document.getElementById('drag-drop-container');

        const choices = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];

        let html = `<ul id="sortable-list" class="space-y-3">`;

        items.forEach((item, index) => {
            if (!item) return;

            html += `
        <li 
            class="sortable-item group flex items-center p-4 bg-background border-2 border-border rounded-lg cursor-grab"
            draggable="true"
            data-value="${choices[index]}"
            ondragstart="dragStart(event)"
            ondragover="dragOver(event)"
            ondragleave="dragLeave(event)"
            ondrop="drop(event)"
        >
            <div class="w-8 h-8 rounded-full bg-muted text-primary font-bold text-sm mr-4 flex items-center justify-center">
                ${choices[index]}
            </div>

            <span class="flex-grow font-medium">${item}</span>
        </li>
        `;
        });

        html += `</ul>`;

        container.innerHTML = html;
    }

    function activateSubmitBtn() {
        submitButton.removeAttribute('disabled');
    }

    function deactivateSubmitBtn() {
        submitButton.setAttribute('disabled', true);
    }

    function activatePreviousBtn() {
        previousButton.removeAttribute('disabled');
    }

    function deactivatePreviousBtn() {
        previousButton.setAttribute('disabled', true);
    }

    function onSelectAnswer() {
        activateSubmitBtn()
        checkQuestionType()
    }

    let draggedItem = null;

    function dragStart(event) {
        question_type = checkQuestionType()
        submitButton.removeAttribute('disabled');
        draggedItem = event.currentTarget;
        event.dataTransfer.effectAllowed = "move";
        // Timeout ensures the visual "ghost" image is created before we dim the element
        setTimeout(() => draggedItem.classList.add('dragging'), 0);
    }

    function dragOver(event) {
        event.preventDefault();
        const target = event.currentTarget;

        if (target && target !== draggedItem) {
            const bounding = target.getBoundingClientRect();
            const offset = bounding.y + (bounding.height / 2);

            // Clear previous indicators
            target.classList.remove('drag-over-top', 'drag-over-bottom');

            if (event.clientY - offset > 0) {
                target.classList.add('drag-over-bottom');
            } else {
                target.classList.add('drag-over-top');
            }
        }
    }

    function dragLeave(event) {
        event.currentTarget.classList.remove('drag-over-top', 'drag-over-bottom');
    }

    function drop(event) {
        event.preventDefault();
        const target = event.currentTarget;

        if (target && target !== draggedItem) {
            const bounding = target.getBoundingClientRect();
            const offset = bounding.y + (bounding.height / 2);

            if (event.clientY - offset > 0) {
                target.after(draggedItem);
            } else {
                target.before(draggedItem);
            }
        }
        cleanup();
    }

    function cleanup() {
        document.querySelectorAll(".sortable-item").forEach(el => {
            el.classList.remove('dragging', 'drag-over-top', 'drag-over-bottom');
        });
    }

    function checkOrder() {

    }

    function previousQuestion() {
        let qid = document.querySelector('.question').id.replace('q_id_', '')
        const postData = {
            question_id: qid,
            exam_id: exam_id
        };

        let url = '/previous-question/' + exam_id + '/' + qid


        fetch(url)
            .then(response => response.json())
            .then(data => {
                if (data.message == 'No more questions') {
                    deactivatePreviousBtn()
                    Swal.fire({
                        icon: 'info',
                        title: 'Oops!',
                        text: "Sorry, that was the last questions.",
                        confirmButtonColor: '#f0ad4e'
                    });

                    return;
                }
                updateQuestion(data)
            })
            .catch(err => {
                console.log(err)
            })
    }


    function updateQuestion(data) {
        if(data.extact){
            document.getElementById('extarct').innerText = data.extact
        }
        document.querySelector('.question').innerText = data.question
        document.querySelector('.question').id = "q_id_" + data.id
        answeredQuestions = answeredQuestions + 1
        document.querySelector('.answered_questions').innerText = answeredQuestions
        document.getElementById('answered_questions').innerText = answeredQuestions
        if (data.question_type === 'Drag and Drop') {
            document.getElementById('question_type').innerText = 'Drag and Drop'
            document.getElementById('question_type').classList.remove(question_type)
            document.getElementById('question_type').classList.add('drag_and_drop')
            let items = [
                data.choiceA,
                data.choiceB,
                data.choiceC,
                data.choiceD,
                data.choiceE,
                data.choiceF,
                data.choiceG,
            ];

            renderDragAndDrop(items);
            return;
        } else if (data.question_type === 'Multiple Choice') {
            document.getElementById('question_type').innerText = 'Multiple Choice'
            document.getElementById('question_type').classList.remove(question_type)
            document.getElementById('question_type').classList.add('multiple_choice')
            document.getElementById('regular_container')?.classList.remove('hidden')
            document.getElementById('dd_container')?.remove()
            document.getElementById('drag-drop-container').innerHTML = '';
        } else {
            document.getElementById('question_type').innerText = 'Single Choice'
            document.getElementById('question_type').classList.remove(question_type)
            document.getElementById('question_type').classList.add('regular')
            document.getElementById('regular_container')?.classList.remove('hidden')
            document.getElementById('dd_container')?.remove()
            document.getElementById('drag-drop-container').innerHTML = '';
        }
        document.getElementById('optionA').innerText = data.choiceA
        document.getElementById('optionB').innerText = data.choiceB
        document.getElementById('optionC').innerText = data.choiceC
        document.getElementById('optionD').innerText = data.choiceD
        if (data.choiceE) {
            document.getElementById('choiceE').classList.remove('hidden')
            document.getElementById('optionE').innerText = data.choiceE
        } else {
            document.getElementById('choiceE').classList.add('hidden')
        }
        if (data.choiceF) {
            console.log(data.choiceF)
            document.getElementById('choiceF').classList.remove('hidden')
            document.getElementById('optionF').innerText = data.choiceF
        } else {
            document.getElementById('choiceF').classList.add('hidden')
        }
        if (data.choiceG) {
            document.getElementById('choiceG').classList.remove('hidden')
            document.getElementById('optionG').innerText = data.choiceG
        } else {
            document.getElementById('choiceG').classList.add('hidden')
        }
    }
</script>

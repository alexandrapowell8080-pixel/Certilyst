<x-library-layout>
    @php
        $sch = [];
        foreach ($schools as $key => $school) {
            $sch[] = $school->name;
        }
    @endphp
    @section('title', 'Certilyst Learning Library')
    @section('description',
        'Access our prep materials ranging from Business and Finance, IT, Real estate, Insurance,
        Praxis, Nursing, Medical & Allied health and Project management')
    @section('keywords', implode(',', $sch))
    @section('canonical', env('APP_URL') . '/library/')

    @push('schema')
        <script type="application/ld+json">
        {
        "@@context": "https://schema.org",
        "@@type": "BreadcrumbList",
        "itemListElement": [
                    {
                        "@@type": "ListItem",
                        "position": 1,
                        "name": "Library",
                        "item": "{{ url('/library') }}"
                    },
                    {
                        "@@type": "ListItem",
                        "position": 2,
                        "name": "Home",
                        "item": "{{ url('/') }}"
                    }
            ]
        }
</script>
    @endpush
    @if (session('message'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'info',
                title: 'Oops!',
                text: "{{ session('message') }}",
                confirmButtonColor: '#f0ad4e'
            });
        </script>
    @endif
    @if (session('exam_message'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Sorry!',
                text: "{{ session('exam_message') }}",
                confirmButtonColor: '#FF8080'
            });
        </script>
    @endif

    <div class="bg-white border-b sn-pro-700" style="border-color: rgb(233, 236, 239); ">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 border-b border-border pb-8">

                <div class="space-y-2">
                    <h1 class=" font-bold text-3xl sm:text-4xl tracking-tight text-foreground">
                        Certilyst <span class="text-primary">Learning Library</span>
                    </h1>
                    <p class="text-lg text-muted-foreground max-w-2xl">
                        Browse our schools and find the perfect certification prep for your career.
                    </p>
                </div>

                {{-- <div class="relative w-full md:max-w-md group">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-search text-muted-foreground group-focus-within:text-primary transition-colors">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                    <input type="text"
                        class="flex w-full rounded-xl border border-input bg-card px-3 py-1 pl-11 h-13 shadow-sm transition-all
                       placeholder:text-muted-foreground/70
                       focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary/20 focus-visible:border-primary
                       md:text-sm text-base py-3"
                        placeholder="Search courses, schools, or states...">
                    <div class="absolute right-3 top-1/2 -translate-y-1/2 hidden sm:block">
                        <span
                            class="text-[10px] font-bold text-muted-foreground bg-muted px-1.5 py-0.5 rounded border border-border">/</span>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>

    {{-- CHANGED: Initialize activeSchool from URL hash --}}
    <div class="sm:w-10/12 w-11/12 mb-5 mx-auto mt-4 sn-pro-400" x-data="{
        activeSchool: window.location.hash.substring(1)
            ? ({{ Js::from(collect($schools)->pluck('id', 'slug')->toArray()) }})[window.location.hash.substring(1)] || 'all'
            : 'all',
        moveToFront(id) {
            this.activeSchool = id;
        }
    }">

        {{-- 🔹 Pills (Schools) --}}
        <div class="flex items-center gap-2 pb-2">

            <!-- Fixed -->
            <button @click="moveToFront('all')"
                :class="activeSchool === 'all'
                    ?
                    'bg-primary text-white shadow-md' :
                    'bg-muted text-muted-foreground hover:bg-accent hover:text-foreground'"
                class="px-5 py-2 rounded-full text-sm font-semibold shrink-0">
                All Schools
            </button>

            <!-- Scrollable -->
            <div class="flex gap-2 overflow-x-auto whitespace-nowrap scroll-smooth">

                @foreach ($schools as $school)
                    <button @click="moveToFront('{{ $school->id }}')"
                        :class="activeSchool === '{{ $school->id }}'
                            ?
                            'bg-primary text-white shadow-md' :
                            'bg-muted text-muted-foreground hover:bg-accent hover:text-foreground'"
                        class="px-5 py-2 rounded-full text-sm font-semibold shrink-0">
                        {{ $school->name }}
                    </button>
                @endforeach

            </div>

        </div>


        {{-- 🔹 Content --}}
        <div class="space-y-4">

            @foreach ($schools as $school)
                {{-- CHANGED: Added id for scrolling --}}
                <div id="school-{{ $school->slug }}" x-show="activeSchool === 'all' || activeSchool === '{{ $school->id }}'"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0">

                    {{-- SCHOOL CARD --}}
                    {{-- CHANGED: Added id for targeting --}}
                    <details id="details-{{ $school->slug }}"
                        class="group bg-card border border-border rounded-2xl overflow-hidden shadow-sm transition-all duration-200 open:ring-1 open:ring-emerald-500/20">
                        <summary
                            class="flex items-center justify-between p-5 cursor-pointer hover:bg-muted/30 transition-colors list-none">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary sm:flex items-center justify-center text-xl shadow-inner  hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-school-icon lucide-school">
                                        <path d="M14 21v-3a2 2 0 0 0-4 0v3" />
                                        <path d="M18 4.933V21" />
                                        <path d="m4 6 7.106-3.79a2 2 0 0 1 1.788 0L20 6" />
                                        <path
                                            d="m6 11-3.52 2.147a1 1 0 0 0-.48.854V19a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-5a1 1 0 0 0-.48-.853L18 11" />
                                        <path d="M6 4.933V21" />
                                        <circle cx="12" cy="9" r="2" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg tracking-tight text-foreground">
                                        {{ $school->name }}
                                    </h3>
                                    <p
                                        class="text-xs font-medium text-muted-foreground/80 mt-0.5 flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                        {{ $school->course->count() }} Courses Available
                                    </p>
                                </div>
                            </div>
                            {{-- Custom Chevron for the School Level --}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="text-muted-foreground transition-transform duration-300 group-open:rotate-180">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </summary>

                        {{-- COURSES CONTAINER --}}
                        <div class="sm:px-5 px-2 pb-5 pt-2 bg-slate-50/50 border-t border-border/50">
                            @foreach ($school->course as $course)
                                <details open
                                    class="group/course mt-3 border border-border/60 rounded-xl bg-white shadow-sm overflow-hidden">
                                    <summary
                                        class="w-full sm:flex items-center gap-3 p-3 text-left cursor-pointer hover:bg-emerald-50/30 transition-colors list-none">
                                        <div
                                            class="w-8 h-8 rounded-lg bg-gradient-to-br from-emerald-500 to-teal-600 sm:flex hidden items-center justify-center flex-shrink-0 shadow-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="text-white">
                                                <path
                                                    d="M12.83 2.18a2 2 0 0 0-1.66 0L2.6 6.08a1 1 0 0 0 0 1.83l8.58 3.91a2 2 0 0 0 1.66 0l8.58-3.9a1 1 0 0 0 0-1.83z">
                                                </path>
                                                <path
                                                    d="M2 12a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 12">
                                                </path>
                                                <path
                                                    d="M2 17a1 1 0 0 0 .58.91l8.6 3.91a2 2 0 0 0 1.65 0l8.58-3.9A1 1 0 0 0 22 17">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="text-sm font-bold text-foreground flex-1 tracking-tight">
                                            {{ $course->name }}</p>
                                        <p
                                            class="text-[11px] font-semibold text-muted-foreground bg-muted px-2 py-0.5 rounded-md uppercase tracking-wider">
                                            {{ count($course->subject) }}
                                            subject{{ count($course->subject) > 1 ? 's' : '' }}
                                        </p>
                                    </summary>

                                    {{-- SUBJECTS LIST --}}
                                    <div class="px-4 pb-4 pt-1 sn-pro-500">
                                        <div class="space-y-2 border-l-2 border-emerald-100 sm:ml-4 sm:pl-4">
                                            @foreach ($course->subject as $subject)
                                                <details open class="group/subject">
                                                    <summary
                                                        class="list-none cursor-pointer w-full sm:flex items-center justify-between gap-3 py-2 px-3 rounded-lg hover:bg-slate-50 transition-all">
                                                        <div class="flex items-center gap-2.5 flex-1 min-w-0">
                                                            <div
                                                                class="w-2 h-2 rounded-full bg-emerald-400 group-open/subject:bg-emerald-600 transition-colors sm:block hidden">
                                                            </div>
                                                            <span
                                                                class="text-sm font-semibold text-foreground/90">{{ $subject->name }}</span>
                                                        </div>
                                                        <div class="flex justify-between items-center gap-2">
                                                            <span
                                                                class="text-[10px] font-bold px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-700 tabular-nums">
                                                                {{ $subject->exam->count() }} EXAMS
                                                            </span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14"
                                                                height="14" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="3"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="text-muted-foreground/60 transition-transform group-open/subject:rotate-90">
                                                                <path d="m9 18 6-6-6-6"></path>
                                                            </svg>
                                                        </div>
                                                    </summary>

                                                    {{-- EXAMS SECTION --}}
                                                    <div class="mt-2 space-y-3 pl-4 pb-2">
                                                        {{-- Highlighted Flashcard Action --}}
                                                        <div
                                                            class="sm:flex items-center justify-between rounded-xl p-3 bg-gradient-to-r from-emerald-50 to-teal-50 border border-emerald-100 shadow-sm">
                                                            <div class="flex items-center gap-3">
                                                                <div
                                                                    class="w-9 h-9 rounded-lg bg-white flex items-center justify-center shadow-sm text-emerald-600">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="18" height="18"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        <path
                                                                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div>
                                                                    <p class="text-xs font-bold text-emerald-800">
                                                                        Flashcards</p>
                                                                    <p
                                                                        class="text-[10px] text-emerald-600/80 font-medium">
                                                                        Master {{ $subject->name }}</p>
                                                                </div>
                                                            </div>
                                                            
                                                            <a href="{{ route('flashcards', ['school' => $school->slug, 'subject' => $subject->slug]) }}"
                                                                class="text-[11px] font-bold w-full sm:w-fit px-4 py-1.5 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 shadow-md shadow-emerald-200 transition-all">
                                                                START
                                                            </a>
                                                        </div>

                                                        {{-- Exam Tags --}}
                                                        <div class="flex flex-wrap gap-2">
                                                            @foreach ($subject->exam as $exam)
                                                                <a href="{{ route('exam-questions', ['school' => $school->slug, 'course' => $course->slug, 'exam' => $exam->slug]) }}"
                                                                    class="group/item sm:flex items-center justify-between gap-3 bg-white border border-gray-200 rounded-xl px-4 py-3 text-sm font-medium text-gray-800 hover:border-emerald-400 hover:bg-emerald-50 transition-all duration-200 shadow-sm hover:shadow-md">

                                                                    <!-- Left Section -->
                                                                    <div class=" items-center gap-3">
                                                                        <div
                                                                            class="p-2 rounded-lg bg-emerald-100  sm:block hidden text-emerald-600 group-hover/item:bg-emerald-200 transition">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="14" height="14"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path
                                                                                    d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                                                </path>
                                                                                <path d="M14 2v4a2 2 0 0 0 2 2h4">
                                                                                </path>
                                                                            </svg>
                                                                        </div>

                                                                        <span
                                                                            class="sm:truncate">{{ $exam->name }}</span>
                                                                    </div>

                                                                    @if ( $exam->questions_count)
                                                                        
                                                                    
                                                                    <!-- Right Section -->
                                                                    <div class="flex items-center gap-2">

                                                                        <!-- Question Count Badge -->
                                                                        <span
                                                                            class="text-xs font-semibold bg-emerald-100 text-emerald-700 px-2 py-1 rounded-full">
                                                                            {{ $exam->questions_count }} Qs
                                                                        </span>
                                                                    </div>
                                                                    @endif
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </details>
                                            @endforeach
                                        </div>
                                    </div>
                                </details>
                            @endforeach
                        </div>
                    </details>

                </div>
            @endforeach

        </div>
    </div>

</x-library-layout>
@push('scripts')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
document.addEventListener('alpine:initialized', () => {
    const hash = window.location.hash.substring(1); // removes the #
    if (hash) {
        const details = document.getElementById('details-' + hash);
        const wrapper = document.getElementById('school-' + hash);
        if (details && wrapper) {
            details.setAttribute('open', 'true');
            setTimeout(() => {
                wrapper.scrollIntoView({ behavior: 'smooth', block: 'center' });
                details.classList.add('highlight-section');
            }, 300);
        }
    }
});
</script>

    <style>
        /* Hide scrollbar but keep scrolling */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        summary {
            list-style: none;
        }

    summary::-webkit-details-marker {
        display: none;
    }
    
    .highlight-section {
        animation: highlightPulse 2s ease-in-out;
    }
    @keyframes highlightPulse {
        0% { box-shadow: 0 0 0 0 rgba(139, 92, 246, 0.7); }
        70% { box-shadow: 0 0 0 10px rgba(139, 92, 246, 0); }
        100% { box-shadow: 0 0 0 0 rgba(139, 92, 246, 0); }
    }
</style>
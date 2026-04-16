<x-library-layout>
    <div class="bg-white border-b" style="border-color: rgb(233, 236, 239);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 border-b border-border pb-8">

                <div class="space-y-2">
                    <h1 class="font-poppins font-bold text-3xl sm:text-4xl tracking-tight text-foreground">
                        Cerilyst <span class="text-primary">Learning Library</span>
                    </h1>
                    <p class="text-lg text-muted-foreground max-w-2xl">
                        Browse our schools and find the perfect certification prep for your career.
                    </p>
                </div>

                <div class="relative w-full md:max-w-md group">
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
                </div>

            </div>
        </div>
    </div>

    <div class="w-10/12 mx-auto mt-4" x-data="{
        activeSchool: 'all',
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
                <div x-show="activeSchool === 'all' || activeSchool === '{{ $school->id }}'"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0">

                    {{-- SCHOOL CARD --}}
                    <details class="bg-card border border-border rounded-2xl overflow-hidden shadow-sm">

                        <summary class="flex items-center justify-between p-5 cursor-pointer">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-secondary flex items-center justify-center text-white">
                                    🏫
                                </div>

                                <div>
                                    <h3 class="font-bold text-lg">
                                        {{ $school->name }}
                                    </h3>

                                    <p class="text-xs text-muted-foreground mt-1">
                                        {{ $school->course->count() }} Courses
                                    </p>
                                </div>
                            </div>
                        </summary>

                        {{-- COURSES --}}
                        <div class="px-5 pb-5 pt-2 bg-gray-50/30">

                            @foreach ($school->course as $course)
                                <details class="mt-3 border rounded-xl bg-white">

                                    <summary class="p-4 font-medium flex justify-between">
                                        {{ $course->name }}
                                    </summary>

                                    {{-- SUBJECTS --}}
                                    <div class="px-6 pb-4">

                                        @foreach ($course->subject as $subject)
                                            <details class="mt-2 border-l pl-4">

                                                <summary class="text-sm font-medium">
                                                    📘 {{ $subject->name }}
                                                </summary>

                                                {{-- EXAMS --}}
                                                <div class="pl-4 mt-2 space-y-1">
                                                    @foreach ($subject->exam as $exam)
                                                        <a href="{{ route('exam-questions', ['school' => $school->slug, 'course' => $course->slug, 'exam' => $exam->slug]) }}"
                                                            class="block text-xs text-muted-foreground hover:text-primary">
                                                            → {{ $exam->name }}
                                                        </a>
                                                    @endforeach
                                                </div>

                                            </details>
                                        @endforeach

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
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


<style>
    /* Hide scrollbar but keep scrolling */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

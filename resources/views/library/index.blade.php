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

<div x-data="{ activeSubject: 'all' }" class="sm:w-9/12 w-11/12 mx-auto p-4 space-y-6">

    <div class="flex flex-wrap gap-2 pb-2">
        <button @click="activeSubject = 'all'"
            :class="activeSubject === 'all' ? 'bg-primary text-white shadow-md' :
                'bg-muted text-muted-foreground hover:bg-accent hover:text-foreground'"
            class="px-5 py-2 rounded-full text-sm font-semibold transition-all duration-200">
            All Subjects
        </button>

        @foreach ($data as $subject => $value)
            <button @click="activeSubject = '{{ $subject }}'"
                :class="activeSubject === '{{ $subject }}' ? 'bg-primary text-white shadow-md' :
                    'bg-muted text-muted-foreground hover:bg-accent hover:text-foreground'"
                class="px-5 py-2 rounded-full text-sm font-semibold transition-all duration-200">
                {{ ucfirst($subject) }}
            </button>
        @endforeach
    </div>

    <div class="space-y-4">
        @foreach ($data as $subject => $value)
            <div x-show="activeSubject === 'all' || activeSubject === '{{ $subject }}'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0" class="group">

                <details
                    class="bg-card border border-border rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300"
                    :open="activeSubject !== 'all'">
                    <summary
                        class="flex items-center justify-between p-5 cursor-pointer list-none hover:bg-gray-50/50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-xl bg-secondary flex items-center justify-center shrink-0 text-white shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-marked">
                                    <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z" />
                                    <path d="M10 2v8l3-3 3 3V2" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-foreground text-lg leading-tight">
                                    {{ ucfirst($subject) }}</h3>
                                <p class="text-xs text-muted-foreground mt-1">{{ count($value['chapters']) }}
                                    Chapters • Curated Content</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span
                                class="hidden sm:inline-block bg-accent/50 text-primary text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-lg border border-border">Core
                                Topic</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-chevron-down text-muted-foreground group-open:rotate-180 transition-transform duration-300">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </div>
                    </summary>

                    <div class="px-5 pb-5 pt-2 border-t border-border/50 bg-gray-50/30">
                        @foreach ($value['chapters'] as $chapter)
                            <details
                                class="mt-3 bg-white border border-border/60 rounded-xl overflow-hidden group/chapter">
                                <summary class="flex items-center gap-3 p-4 cursor-pointer list-none hover:bg-gray-50">
                                    <div class="w-2 h-2 rounded-full bg-primary/40"></div>
                                    <span class="font-semibold text-foreground text-sm">{{ $chapter['title'] }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-plus ml-auto text-muted-foreground group-open/chapter:rotate-45 transition-transform">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                </summary>

                                <div class="px-10 pb-4 space-y-3">
                                    @foreach ($chapter['topics'] as $topic)
                                        <div class="relative pl-6 border-l-2 border-accent py-1">
                                            <h4 class="text-sm font-medium text-foreground">
                                                {{ $topic['title'] }}</h4>

                                            <ul class="mt-2 space-y-1.5">
                                                @foreach ($topic['subtopics'] as $sub)
                                                    <li>
                                                        <a href="{{ route('exam-questions') }}"
                                                            class="flex items-center gap-2 text-xs text-muted-foreground hover:text-primary transition-colors cursor-default">

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="3"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="text-secondary">
                                                                <path d="m9 18 6-6-6-6" />
                                                            </svg>
                                                            {{ $sub['title'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
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
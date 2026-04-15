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
                    href="{{ route('library') }}"><button
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
                <div class="text-xs text-muted-foreground">0/10 answered</div>
            </div>
            <div class="mb-5 space-y-2 text-xs">
                <div class="flex justify-between"><span class="text-muted-foreground">Answered</span><span
                        class="font-semibold text-emerald-600">0</span></div>
                <div class="flex justify-between"><span class="text-muted-foreground">Flagged</span><span
                        class="font-semibold text-amber-600">0</span></div>
                <div class="flex justify-between"><span class="text-muted-foreground">Remaining</span><span
                        class="font-semibold">10</span></div>
            </div>
            <div class="text-xs text-muted-foreground mb-2">Questions</div>
            <div class="grid grid-cols-5 gap-1.5"><button
                    class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border brand-gradient text-white border-transparent bg-primary">1</button><button
                    class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border bg-primary/30 text-muted-foreground border-border hover:border-primary/30">2</button><button
                    class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border bg-primary/30 text-muted-foreground border-border hover:border-primary/30">3</button><button
                    class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border bg-primary/30 text-muted-foreground border-border hover:border-primary/30">4</button><button
                    class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border bg-primary/30 text-muted-foreground border-border hover:border-primary/30">5</button><button
                    class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border bg-primary/30 text-muted-foreground border-border hover:border-primary/30">6</button><button
                    class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border bg-primary/30 text-muted-foreground border-border hover:border-primary/30">7</button><button
                    class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border bg-primary/30 text-muted-foreground border-border hover:border-primary/30">8</button><button
                    class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border bg-primary/30 text-muted-foreground border-border hover:border-primary/30">9</button><button
                    class="w-full aspect-square rounded-lg text-xs font-semibold flex items-center justify-center transition-all border bg-primary/30 text-muted-foreground border-border hover:border-primary/30">10</button>
            </div>
        </div>
        {{-- question --}}
        <div class="flex justify-center">

            <div class="rounded-2xl border p-6 sm:p-8"
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
                <h3 class="text-lg font-semibold mb-6 leading-relaxed" style="color: rgb(33, 37, 41);">What is the
                    primary
                    purpose of a mortgage originator license?</h3>
                <div class="space-y-3"><button
                        class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3"><span
                            class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">A</span><span
                            class="text-sm leading-relaxed">To allow individuals to sell real estate
                            properties</span></button><button
                        class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3"><span
                            class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">B</span><span
                            class="text-sm leading-relaxed">To authorize individuals to originate residential mortgage
                            loans</span></button><button
                        class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3"><span
                            class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">C</span><span
                            class="text-sm leading-relaxed">To permit individuals to appraise property
                            values</span></button><button
                        class="w-full text-left p-4 rounded-xl border-2 border-border bg-card hover:bg-muted/50 transition-all duration-200 flex items-start gap-3"><span
                            class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 text-xs font-bold mt-0.5 border-muted-foreground/30 text-muted-foreground">D</span><span
                            class="text-sm leading-relaxed">To enable individuals to manage rental
                            properties</span></button></div>
                <div class="flex items-center justify-between mt-8 pt-6 border-t"
                    style="border-color: rgb(233, 236, 239);"><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 border border-input bg-transparent shadow-sm hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2"
                        disabled=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-left w-4 h-4 mr-1">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg> Previous</button><button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-9 px-4 py-2"
                        disabled="" style="background: rgb(106, 13, 173); color: rgb(255, 255, 255);">Submit
                        Answer</button></div>
            </div>
        </div>
        {{-- right bar --}}
        <div class="hidden xl:block w-72 bg-card border-l border-border p-5 overflow-auto">
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
                    <p class="text-xs text-muted-foreground leading-relaxed">Read each question carefully. Eliminate
                        obviously wrong answers first. Manage your time — don't spend too long on any single question.
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
                    <p class="text-xs text-muted-foreground leading-relaxed">This question tests your knowledge of
                        contract law. Review the key concepts before moving on.</p>
                </div>
            </div>
        </div>
    </div>
</x-library-layout>

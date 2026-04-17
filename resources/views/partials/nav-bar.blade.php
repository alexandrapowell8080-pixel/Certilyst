@push('component-style') 
  <link href="{{ asset('css/component.css') }}" rel="stylesheet">
 @endpush
<nav class="sticky top-0 z-50 bg-white backdrop-blur-md border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16"><a class="flex items-center gap-2" href="/">
                <div
                    class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                    <span class="text-white font-poppins font-bold text-sm">C</span></div><span
                    class="font-poppins font-bold text-xl text-foreground">Certilyst</span>
            </a>
            <div class="hidden md:flex items-center gap-8"><a
                    class="text-sm font-medium transition-colors hover:text-primary text-primary"
                    href="/">Home</a><a
                    class="text-sm font-medium transition-colors hover:text-primary text-foreground/80"
                    href="/about">About</a><button type="button" id="radix-:r0:" aria-haspopup="menu"
                    aria-expanded="false" data-state="closed"
                    class="flex items-center gap-1 text-sm font-medium transition-colors hover:text-primary text-foreground/80 outline-none">Schools
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-chevron-down w-3.5 h-3.5">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg></button><a
                    class="text-sm font-medium transition-colors hover:text-primary text-foreground/80"
                    href="/library">Library</a><a href="/#pricing"
                    class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors">Pricing</a><a
                    href="/#faq"
                    class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors">FAQ</a></div>
            <div class="hidden md:flex items-center gap-3">
                <a href="/auth">
                <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-sm font-medium">Log
                        In</button>
                    </a>
                    <a href="/register">
                        <button
                        class="inline-flex items-center justify-center gap-2 whitespace-nowrap transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 shadow h-8 rounded-md bg-primary hover:bg-primary/90 text-primary-foreground font-medium text-sm px-5">Sign
                        Up Free</button>
                    </a></div><button class="md:hidden p-2 text-foreground"
                aria-label="Toggle menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-menu w-5 h-5">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <line x1="4" x2="20" y1="6" y2="6"></line>
                    <line x1="4" x2="20" y1="18" y2="18"></line>
                </svg></button>
        </div>
    </div>
</nav>

<nav class="sticky top-0 z-50 bg-background/95 backdrop-blur-md border-b border-border">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a class="flex items-center gap-2" href="/">
                <div class="w-8 h-8 rounded-lg flex items-center justify-center">
                    <span class="text-white font-poppins font-bold text-sm">
                        <img src="{{ asset('images/logo-1.png') }}" alt="">
                    </span>
                </div>
                <span class="font-poppins font-bold text-xl text-foreground">Cerilyst</span>
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a class="text-sm font-medium transition-colors hover:text-primary {{ request()->is('/') ? 'text-primary' : 'text-foreground/80' }}"
                    href="/">
                    Home
                </a>

                <a class="text-sm font-medium transition-colors hover:text-primary {{ request()->is('about') ? 'text-primary' : 'text-foreground/80' }}"
                    href="/about">
                    About
                </a>

                <a class="text-sm font-medium transition-colors hover:text-primary {{ request()->is('library') ? 'text-primary' : 'text-foreground/80' }}"
                    href="/library">
                    Library
                </a>

                <a class="text-sm font-medium transition-colors hover:text-primary {{ request()->is('#faq') ? 'text-primary' : 'text-foreground/80' }}"
                    href="/#faq">
                    FAQ
                </a>
            </div>
            <div class="hidden md:flex items-center gap-3">
                <a href="/auth">
                    <button
                        class="inline-flex items-center justify-center h-8 rounded-md px-3 text-sm font-medium hover:bg-accent">Log
                        In</button>
                </a>
                <a href="/register">
                    <button
                        class="bg-primary text-primary-foreground h-8 rounded-md px-5 text-sm font-medium hover:bg-primary/90">Sign
                        Up Free</button>
                </a>
            </div>

            <button id="mobile-menu-button" class="md:hidden p-2 text-foreground" aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-menu w-5 h-5">
                    <line x1="4" x2="20" y1="12" y2="12"></line>
                    <line x1="4" x2="20" y1="6" y2="6"></line>
                    <line x1="4" x2="20" y1="18" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>

    @php
        $active = 'text-primary bg-primary/10';
        $inactive = 'text-foreground/80 hover:text-primary hover:bg-accent';
        $base = 'block px-3 py-2 text-base font-medium rounded-md';
    @endphp

    <div id="mobile-menu" class="hidden md:hidden border-t border-border bg-background">
        <div class="px-4 pt-2 pb-6 space-y-1">

            <a href="/" class="{{ $base }} {{ request()->is('/') ? $active : $inactive }}">
                Home
            </a>

            <a href="/about" class="{{ $base }} {{ request()->is('about') ? $active : $inactive }}">
                About
            </a>

            <a href="/library" class="{{ $base }} {{ request()->is('library') ? $active : $inactive }}">
                Library
            </a>

            <a href="/#pricing" class="{{ $base }} {{ $inactive }}">
                Pricing
            </a>

            <a href="/#faq" class="{{ $base }} {{ $inactive }}">
                FAQ
            </a>

            <div class="pt-4 flex flex-col gap-2">
                <a href="/auth"
                    class="w-full text-center py-2 text-sm font-medium border border-input rounded-md hover:bg-accent">
                    Log In
                </a>

                <a href="/register"
                    class="w-full text-center py-2 text-sm font-medium bg-primary text-primary-foreground rounded-md">
                    Sign Up Free
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    const menuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

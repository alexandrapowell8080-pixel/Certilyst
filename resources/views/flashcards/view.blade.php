<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="{{ asset('images/logo-1.png') }}" rel="icon" type="image/png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="{{ asset('manifest.json') }}" rel="manifest">
  <title>Certilyst - Flashcards</title>
  
  <link href="{{ asset('css/flashcards.css') }}" rel="stylesheet">
  <meta content="An interactive professional certification platform offering expert-led exam prep and mastery-based learning tools for specialized career paths." name="description">
  
  <meta content="Certilyst - Flashcards" property="og:title">
  <meta content="An interactive professional certification platform offering expert-led exam prep and mastery-based learning tools for specialized career paths." property="og:description">
  <meta content="{{ asset('images/logo-1.png') }}" property="og:image">
  <meta content="{{ url()->current() }}" property="og:url">
  <meta content="website" property="og:type">
  <meta content="Certilyst" property="og:site_name">
  
  <meta content="Certilyst - Flashcards" name="twitter:title">
  <meta content="An interactive professional certification platform offering expert-led exam prep and mastery-based learning tools for specialized career paths." name="twitter:description">
  <meta content="{{ asset('images/logo-1.png') }}" name="twitter:image">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="{{ url()->current() }}" name="twitter:url">
  
  <meta content="yes" name="mobile-web-app-capable">
  <meta content="black" name="apple-mobile-web-app-status-bar-style">
  <meta content="Certilyst" name="apple-mobile-web-app-title">
  
  <link href="{{ url()->current() }}" rel="canonical">
</head>
<body>
  <div id="root">
    <div>
      <header class="app-header">
        <div class="max-w-3xl px-4 py-3 flex items-center justify-between">
          <a href="/subject/re-sales-broker-va">
            <button class="btn btn-sm btn-outline text-xs font-medium">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sm mr-1"><path d="m15 18-6-6 6-6"></path></svg> 
              Back
            </button>
          </a>
          <div class="text-center">
            <h2 class="font-sn-pro font-semibold text-sm text-main">Virginia</h2>
            <span id="nav-count" class="text-xs text-muted">1 / 12</span>
          </div>
          <a href="/subject/re-sales-broker-va/exam">
            <button class="btn btn-sm btn-outline text-xs font-medium">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sm mr-1"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg> 
              Exams
            </button>
          </a>
        </div>
      </header>

      <main class="max-w-3xl px-4 py-8">
        <div class="alert-banner flex items-center justify-between px-4 py-3 mb-6 text-sm">
          <span id="trial-count">Trial: 1/10 free cards</span>
          <button class="btn btn-pill btn-primary btn-unlock text-xs font-bold">Unlock All →</button>
        </div>

        <div class="flex items-center justify-center gap-2 mb-6" id="mode-selectors">
          <button data-mode="linear" class="btn btn-pill btn-primary text-sm font-medium gap-1-5 mode-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sm"><path d="M3 12h.01"></path><path d="M3 18h.01"></path><path d="M3 6h.01"></path><path d="M8 12h13"></path><path d="M8 18h13"></path><path d="M8 6h13"></path></svg>
            Linear
          </button>
          <button data-mode="random" class="btn btn-pill btn-secondary text-sm font-medium gap-1-5 mode-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sm"><path d="m18 14 4 4-4 4"></path><path d="m18 2 4 4-4 4"></path><path d="M2 18h1.973a4 4 0 0 0 3.3-1.7l5.454-8.6a4 4 0 0 1 3.3-1.7H22"></path><path d="M2 6h1.972a4 4 0 0 1 3.6 2.2"></path><path d="M22 18h-6.041a4 4 0 0 1-3.3-1.8l-.359-.45"></path></svg>
            Random
          </button>
          <button data-mode="weak" class="btn btn-pill btn-secondary text-sm font-medium gap-1-5 mode-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sm"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
            Weak Areas
          </button>
        </div>

        <div class="flex items-center justify-center gap-6 mb-8">
          <span id="metric-mastered" class="text-xs font-semibold">🟢 0 Mastered</span>
          <span id="metric-learning" class="text-xs font-semibold">🟡 0 Learning</span>
          <span id="metric-new" class="text-xs font-semibold">🔴 0 New</span>
        </div>

        <div class="perspective-container mb-8">
          <div class="flashcard-wrapper" aria-label="Flashcard front — click to flip" role="button" tabindex="0">
            <div class="flashcard-inner" id="flashcard-inner">
              <div class="flashcard-face flashcard-front">
                <span id="card-badge" class="badge badge-red text-xs font-semibold mb-4">🔴 New</span>
                <p id="card-question" class="font-sn-pro font-semibold text-xl text-center mb-4 text-main">What is the SAFE Act?</p>
                
                <div id="hint-text" class="text-sm text-muted hidden mb-4 px-4 text-center"></div>

                <button id="btn-hint" class="btn btn-link text-primary text-sm font-medium gap-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sm"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path><path d="M9 18h6"></path><path d="M10 22h4"></path></svg> 
                  Show Hint
                </button>
                <p class="text-xs text-muted mt-6">Tap to flip</p>
              </div>
              
              <div class="flashcard-face flashcard-back">
                <div class="flex flex-col h-full w-full max-w-2xl mx-auto text-center">
                  <div class="mb-6 flex justify-center">
                    <span class="badge bg-white-20 text-white text-xs font-bold uppercase tracking-wider backdrop-blur">Back</span>
                  </div>
                  <div class="flex-1 flex items-center justify-center overflow-y-auto no-scrollbar max-h-250">
                    <p id="card-answer" class="text-xl md:text-2xl font-medium leading-relaxed text-white">The legal obligation of an agent to act in the best interests of their client...</p>
                  </div>
                  <div class="mt-8 flex items-center justify-center gap-4 relative z-10">
                    <button id="btn-practice" class="btn h-9 px-4 py-2 text-sm font-medium shadow-sm btn-red-outline gap-2 action-btn">🔴 Need Practice</button>
                    <button id="btn-got-it" class="btn h-9 px-4 py-2 text-sm font-medium shadow-sm btn-green-solid gap-2 action-btn">🟢 Got It</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between mt-10">
          <button id="btn-prev" class="btn btn-pill btn-outline px-6 py-3 text-sm font-semibold shadow-sm gap-2 text-muted">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="m15 18-6-6 6-6"></path></svg> 
            Previous
          </button>
          
          <div class="flex items-center gap-1" id="progress-dots">
            </div>

          <button id="btn-next" class="btn btn-pill btn-gradient px-6 py-3 text-sm font-bold gap-2">
            Next Card 
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="m9 18 6-6-6-6"></path></svg>
          </button>
        </div>

      </main>
    </div>
  </div>
  <script src="{{ asset('js/flashcards.js') }}"></script>
</body>
</html>
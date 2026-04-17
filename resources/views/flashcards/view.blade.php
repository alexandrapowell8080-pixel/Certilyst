<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="{{ asset('images/logo-1.png') }}" rel="icon" type="image/png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>{{ $subject->name }} Flashcards - Certilyst</title>
  
  <link href="{{ asset('css/component.css') }}" rel="stylesheet">
  <link href="{{ asset('css/flashcards.css') }}" rel="stylesheet">
  <meta content="Interactive exam prep and mastery flashcards for {{ $subject->name }} on Certilyst." name="description">
  <meta content="{{ $subject->name }}, flashcards, course, certification, exam prep, Certilyst" name="keywords">
  
  <meta content="{{ $subject->name }} Flashcards - Certilyst" property="og:title">
  <meta content="Interactive exam prep and mastery flashcards for {{ $subject->name }} on Certilyst." property="og:description">
  <meta content="{{ asset('images/logo-1.png') }}" property="og:image">
  <meta content="{{ url()->current() }}" property="og:url">
  <meta content="website" property="og:type">
  <meta content="Certilyst" property="og:site_name">
  
  <meta content="{{ $subject->name }} Flashcards - Certilyst" name="twitter:title">
  <meta content="Interactive exam prep and mastery flashcards for {{ $subject->name }} on Certilyst." name="twitter:description">
  <meta content="{{ asset('images/logo-1.png') }}" name="twitter:image">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="{{ url()->current() }}" name="twitter:url">
  
  <meta content="yes" name="mobile-web-app-capable">
  <meta content="black" name="apple-mobile-web-app-status-bar-style">
  <meta content="Certilyst" name="apple-mobile-web-app-title">
  
  <link href="{{ url()->current() }}" rel="canonical">
  <link href="https://fonts.googleapis.com/css2?family=SN+Pro:ital,wght@0,200..900;1,200..900&family=Sniglet:wght@400;800&display=swap" rel="stylesheet">

  <script type="application/ld+json">
  {
    "@@context": "https://schema.org",
    "@@graph": [
      {
        "@@type": "WebPage",
        "name": "{{ $subject->name }} Flashcards - Certilyst",
        "description": "Interactive exam prep and mastery flashcards for {{ $subject->name }} on Certilyst.",
        "url": "{{ url()->current() }}"
      },
      {
        "@@type": "BreadcrumbList",
        "itemListElement": [
          {
            "@@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
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
            "name": "{{ $subject->name }} Flashcards",
            "item": "{{ url()->current() }}"
          }
        ]
      }
    ]
  }
  </script>
</head>
<body>
  {{-- Header --}}
  @include('partials.nav-bar')
  <div id="root" class="main-wrapper">
      
    <main class="content-container">
        
      <header class="fc-header">
        <div class="fc-title-group">
          <h2 class="fc-title">{{ $subject->name }}</h2>
          <div id="nav-count" class="fc-counter">1 / {{ count($flashcards) }}</div>
        </div>
      </header>

      <div class="mode-selectors" id="mode-selectors">
        <button data-mode="linear" class="btn btn-mode active mode-btn">Linear</button>
        <button data-mode="random" class="btn btn-mode mode-btn">Random</button>
        <button data-mode="weak" class="btn btn-mode mode-btn">Weak Areas</button>
      </div>

      <div class="progress-track">
        <div id="progress-bar-fill" class="progress-fill"></div>
      </div>

      <div class="metrics-row">
        <span id="metric-mastered" class="text-green">✓ 0 Mastered</span>
        <span id="metric-learning" class="text-yellow">⟳ 0 Learning</span>
        <span id="metric-new" class="text-red">! 0 New</span>
      </div>

      <div class="card-scene">
        <div class="card-inner" id="flashcard-inner">
          
          <div class="card-face card-front">
            <span id="card-badge" class="card-label text-red">QUESTION</span>
            <p id="card-question" class="card-question">Loading...</p>
            
            <div id="hint-text" class="card-hint hidden"></div>
            <button id="btn-hint" class="btn btn-link">💡 <span>Show Hint</span></button>
            
            <p class="card-tap-hint">Tap to reveal answer</p>
          </div>
          
          <div class="card-face card-back">
            <div class="card-back-header">
              <span>Answer</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg>
            </div>
            <div class="card-back-body">
              <div class="answer-container">
                
                {{-- <div class="answer-top-row">
                  <span class="answer-icon-box"></span>
                  <p class="answer-title-text"></p>
                </div> --}}
                
                <div class="answer-why-box">
                  {{-- <p class="answer-why-label">💡 Why this is correct</p> --}}
                  <p id="card-answer" class="answer-why-text"></p>
                </div>
                
              </div>
              <p class="card-tap-back">Tap card to flip back</p>
            </div>
          </div>

        </div>
      </div>

      <div class="action-row">
        <button id="btn-practice" class="btn btn-action btn-danger-outline action-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><circle cx="12" cy="12" r="10"></circle><path d="m15 9-6 6"></path><path d="m9 9 6 6"></path></svg> 
          Still Learning
        </button>
        <button id="btn-got-it" class="btn btn-action btn-success-solid action-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><circle cx="12" cy="12" r="10"></circle><path d="m9 12 2 2 4-4"></path></svg> 
          Know It
        </button>
      </div>

      <div class="nav-row">
        <button id="btn-prev" class="btn btn-nav" disabled>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sm"><path d="m15 18-6-6 6-6"></path></svg> 
          Prev
        </button>
        <button id="btn-back-dynamic" class="btn-link">Back to Library</button>
        <button id="btn-next" class="btn btn-nav">
          Next 
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sm"><path d="m9 18 6-6-6-6"></path></svg>
        </button>
      </div>

    </main>
  </div>
  
  <script>
      window.appFlashcards = {!! json_encode($flashcards) !!};
  </script>
  <script src="{{ asset('js/flashcards.js') }}"></script>
</body>
</html>
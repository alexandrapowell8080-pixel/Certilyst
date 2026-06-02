<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('images/logo-1.png') }}" rel="icon" type="image/png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ Str::limit($flashcard->question, 50) }} - {{ $subject_name }} Flashcards</title>

    <meta noindex name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">

    <link href="{{ asset('css/component.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flashcards.css') }}" rel="stylesheet">
    

    <meta content="{{ Str::limit($flashcard->answer, 150) }}" name="description">
    <meta content="{{ $school_name }}, {{ $course_name }}, {{ $subject_name }}, Exam Flashcards, exam prep, Certilyst"
        name="keywords">

    <meta content="{{ Str::limit($flashcard->question, 60) }} - Certilyst" property="og:title">
    <meta content="{{ Str::limit($flashcard->answer, 150) }}" property="og:description">
    <meta content="{{ asset('images/logo-1.png') }}" property="og:image">
    <meta content="{{ route('flashcard.show', $flashcard->resource_url) }}" property="og:url">
    <meta content="article" property="og:type">
    <meta content="Certilyst" property="og:site_name">

    <meta content="summary_large_image" name="twitter:card">
    <meta content="{{ Str::limit($flashcard->question, 60) }}" name="twitter:title">
    <meta content="{{ Str::limit($flashcard->answer, 150) }}" name="twitter:description">
    <meta content="{{ asset('images/logo-1.png') }}" name="twitter:image">

    <link href="{{ route('flashcard.show', $flashcard->resource_url) }}" rel="canonical">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=SN+Pro:ital,wght@0,200..900;1,200..900&family=Sniglet:wght@400;800&display=swap"
        rel="stylesheet">

    <script type="application/ld+json">
        {
      "@@context": "https://schema.org",
      "@@type": "QAPage",
      "mainEntity": {
        "@@type": "Question",
        "name": "{{ json_encode($flashcard->question) }}",
        "text": "{{ json_encode($flashcard->question) }}",
        "answerCount": 1,
        "acceptedAnswer": {
          "@@type": "Answer",
          "text": "{{ json_encode($flashcard->answer) }}"
        }
      }
   }
    </script>

</head>

<body>
    @include('partials.nav-bar')
    <div id="root" class="main-wrapper">

        <main class="content-container">

            <header class="fc-header">
                <div class="fc-title-group">
                    <h1 class="fc-title">{{ $subject_name }} Flashcard</h1>
                </div>
            </header>

            <div class="card-scene" style="margin-top: 20px;">
                <div class="card-inner" id="flashcard-inner" style="cursor: pointer;">

                    <div class="card-face card-front">
                        <span id="card-badge" class="card-label text-red">QUESTION</span>
                        <p id="card-question" class="card-question">{{ $flashcard->question }}</p>

                        @if($flashcard->hint)
                        <div id="hint-text" class="card-hint hidden" style="margin-top:15px; font-style:italic;">{{
                            $flashcard->hint }}</div>
                        <button id="btn-hint" class="btn btn-link" style="margin-top: 10px;">💡 <span>Show
                                Hint</span></button>
                        @endif

                        <p class="card-tap-hint">Tap to reveal answer</p>
                    </div>

                    <div class="card-face card-back">
                        <div class="card-back-header">
                            <span>Answer</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="icon">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                        </div>
                        <div class="card-back-body">
                            <div class="answer-container">
                                <div class="answer-why-box">
                                    <p id="card-answer" class="answer-why-text">{!! nl2br(e($flashcard->answer)) !!}</p>
                                </div>
                            </div>
                            <p class="card-tap-back">Tap card to flip back</p>
                        </div>
                    </div>

                </div>
            </div>

            @if($related_flashcards->count() > 0)
            <div class="related-flashcards-container">
                <h3>More Flashcards for {{ $subject_name }}</h3>
                <ul class="related-list">
                    @foreach($related_flashcards as $related)
                    <li>
                        <a href="{{ route('flashcard.show', $related->resource_url) }}">{{
                            Str::limit($related->question, 90) }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

        </main>
    </div>
    
    <script src="{{ asset('js/ind-flashcard.js') }}"></script>
    @include('partials.footer')
</body>

</html>

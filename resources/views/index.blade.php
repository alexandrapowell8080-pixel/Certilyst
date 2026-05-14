<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Certilyst - Pass Your Next Certification Exam with Confidence">
    <meta name="keywords" content="certification, exam prep, study guide, Certilyst">
    <link rel="canonical" href="{{ env('APP_URL') }}">
    <title>Certilyst - Pass Certification Exams with Confidence</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{ asset('images/logo-1.png') }}" rel="icon" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    
    {{-- Header --}}
    @include('partials.nav-bar')
    
    {{-- Hero Section --}}
    <section class="hero-section">
  <div class="hero-background">
    <video
    autoplay
    muted
    loop
    playsinline
    preload="auto"
    class="hero-video"
    poster="https://images.pexels.com/videos/7683392/pexels-photo-7683392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1920"
>
    <source src="https://videos.pexels.com/video-files/7683392/7683392-hd_1920_1080_30fps.mp4" type="video/mp4">
</video>
    <div class="hero-overlay-dark"></div>
    <div class="hero-overlay-color"></div>
  </div>

  <div class="hero-container">
    <div class="hero-grid">
      
      <div class="hero-content">
        <div class="badge">
          <div class="badge-dot"></div>
          <span class="badge-text">Certification Success Starts Here</span>
        </div>
        
        <h1 class="hero-title">
          Pass Your Next <span class="text-gradient">Certification Exam</span> with Confidence
        </h1>
        
        <p class="hero-description">
          Certilyst gives learners realistic exam simulations, detailed rationales, performance analytics, adaptive study paths, and expertly curated certification prep systems.
        </p>
        
        <div class="button-group">
          <button class="btn btn-primary shadow-lg">
            Start Practicing
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
          </button>
          <a href ="{{route('library')}}" class="btn btn-glass">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-mr"><path d="M12 7v14"></path><path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"></path></svg> 
            Explore Exam Library
            </a>
        </div>
        
        <div class="stats-group">
          <div class="stat-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-purple"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            <span><strong>50,000+</strong> learners</span>
          </div>
          <div class="stat-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-amber fill-amber"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
            <span><strong>4.9/5</strong> rating</span>
          </div>
          <div class="stat-item">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-purple"><circle cx="6" cy="19" r="3"></circle><path d="M9 19h8.5a3.5 3.5 0 0 0 0-7h-11a3.5 3.5 0 0 1 0-7H15"></path><circle cx="18" cy="5" r="3"></circle></svg>
            <span><strong>200+</strong> cert paths</span>
          </div>
        </div>
      </div>

      <div class="hero-visuals">
        <div class="visuals-wrapper">
          <div class="visuals-glow"></div>
          
          <div class="glass-card card-readiness animate-float">
            <div class="card-header">
              <div class="icon-box gradient-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-white"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
              </div>
              <div>
                <p class="text-sm text-muted">Exam Readiness</p>
                <p class="text-xl text-bold">87%</p>
              </div>
            </div>
            <div class="progress-bar-bg">
              <div class="progress-bar-fill gradient-primary" style="width: 87%;"></div>
            </div>
            <p class="text-xs text-muted mt-2">You're almost ready to pass!</p>
          </div>

          <div class="glass-card card-trend animate-float-slow" style="animation-delay: 1s;">
            <div class="card-header-small">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-primary"><path d="M3 3v16a2 2 0 0 0 2 2h16"></path><path d="M18 17V9"></path><path d="M13 17V5"></path><path d="M8 17v-3"></path></svg>
              <p class="text-sm-bold">Score Trend</p>
            </div>
            <div class="chart-bars">
              <div class="bar gradient-primary" style="height: 40%; opacity: 0.4;"></div>
              <div class="bar gradient-primary" style="height: 55%; opacity: 0.46;"></div>
              <div class="bar gradient-primary" style="height: 48%; opacity: 0.52;"></div>
              <div class="bar gradient-primary" style="height: 62%; opacity: 0.58;"></div>
              <div class="bar gradient-primary" style="height: 58%; opacity: 0.64;"></div>
              <div class="bar gradient-primary" style="height: 72%; opacity: 0.7;"></div>
              <div class="bar gradient-primary" style="height: 68%; opacity: 0.76;"></div>
              <div class="bar gradient-primary" style="height: 78%; opacity: 0.82;"></div>
              <div class="bar gradient-primary" style="height: 85%; opacity: 0.88;"></div>
              <div class="bar gradient-primary" style="height: 87%; opacity: 0.94;"></div>
            </div>
            <p class="text-xs text-green mt-2 flex-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-sm"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg> +12% this week</p>
          </div>

          <div class="glass-card card-sessions animate-float" style="animation-delay: 2s;">
            <p class="text-sm-bold mb-3">Recent Sessions</p>
            <div class="list-item">
              <span class="text-xs text-muted">NCLEX Practice #4</span>
              <span class="text-xs text-bold text-green">82%</span>
            </div>
            <div class="list-item">
              <span class="text-xs text-muted">Pharmacology Quiz</span>
              <span class="text-xs text-bold text-amber">74%</span>
            </div>
            <div class="list-item">
              <span class="text-xs text-muted">CompTIA Sec+ Mock</span>
              <span class="text-xs text-bold text-green">91%</span>
            </div>
          </div>

          <div class="glass-card card-prediction animate-float-slow" style="animation-delay: 0.5s;">
            <div class="card-header-small mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon text-accent"><path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"></path><path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"></path><path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"></path><path d="M17.599 6.5a3 3 0 0 0 .399-1.375"></path><path d="M6.003 5.125A3 3 0 0 0 6.401 6.5"></path><path d="M3.477 10.896a4 4 0 0 1 .585-.396"></path><path d="M19.938 10.5a4 4 0 0 1 .585.396"></path><path d="M6 18a4 4 0 0 1-1.967-.516"></path><path d="M19.967 17.484A4 4 0 0 1 18 18"></path></svg>
              <p class="text-sm-bold">Pass Prediction</p>
            </div>
            <div class="circular-progress">
              <svg viewBox="0 0 36 36">
                <path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="hsl(260, 30%, 92%)" stroke-width="3"></path>
                <path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="url(#grad)" stroke-width="3" stroke-dasharray="92, 100" stroke-linecap="round"></path>
                <defs>
                  <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="hsl(263, 70%, 50%)"></stop>
                    <stop offset="100%" stop-color="hsl(290, 60%, 55%)"></stop>
                  </linearGradient>
                </defs>
              </svg>
              <div class="circular-progress-text">
                <span>92%</span>
              </div>
            </div>
            <p class="text-xs text-muted text-center mt-1">Likely to pass</p>
          </div>

          <div class="glass-card card-weak-areas">
            <p class="text-micro-bold mb-1">Weak Areas</p>
            <div class="list-item-micro">
              <div class="dot bg-amber"></div>
              <span>Pharmacology</span>
            </div>
            <div class="list-item-micro">
              <div class="dot bg-amber"></div>
              <span>Network Security</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
{{-- STATS BANNER --}}
<section class="stats-banner">
    <div class="stats-grid">
        <div class="stats-block">
            <div class="stats-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 6C11.6569 6 13 4.65685 13 3C13 1.34315 11.6569 0 10 0C8.34315 0 7 1.34315 7 3C7 4.65685 8.34315 6 10 6Z" stroke="currentColor" stroke-width="1.5"/><path d="M0 16C0 13.5 4.5 12 10 12C15.5 12 20 13.5 20 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
            </div>
            <div class="stats-value"><span class="counter" data-target="50">0</span>K+</div>
            <div class="stats-label">Active Learners</div>
        </div>
        <div class="stats-divider"></div>
        <div class="stats-block">
            <div class="stats-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 18L12.5 12L18 10L12.5 8L10 2L7.5 8L2 10L7.5 12L10 18Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
            </div>
            <div class="stats-value"><span class="counter" data-target="98">0</span>%</div>
            <div class="stats-label">Success Rate</div>
        </div>
        <div class="stats-divider"></div>
        <div class="stats-block">
            <div class="stats-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 16V8H6V16H3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 16V4H10V16H7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M11 16V10H14V16H11Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 16V2H18V16H15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="stats-value"><span class="counter" data-target="200">0</span>+</div>
            <div class="stats-label">Certification Paths</div>
        </div>
        <div class="stats-divider"></div>
        <div class="stats-block">
            <div class="stats-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 2L12.5 7.5L18 8.5L14 12.5L15 18L10 15.5L5 18L6 12.5L2 8.5L7.5 7.5L10 2Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>
            </div>
            <div class="stats-value">4.<span class="counter-decimal" data-target="9">0</span>★</div>
            <div class="stats-label">Learner Satisfaction</div>
        </div>
    </div>
</section>

{{-- CERTIFICATION PATHS --}}
<section class="certification-paths">
    <div class="section-container">
        <div class="section-header">
            <h2 class="section-title">Explore Certification Paths by Industry</h2>
            <p class="section-subtitle">Access expertly built practice systems across the most in-demand certification categories.</p>
        </div>
        <div class="paths-grid">
            <div class="path-card">
                <div class="path-icon purple"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 18C10 18 2 13 2 8C2 5 4.5 2 7.5 2C9 2 10 3 10 3C10 3 11 2 12.5 2C15.5 2 18 5 18 8C18 13 10 18 10 18Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M8 8H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M8 11H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                <h3 class="path-title">Nursing & Healthcare</h3>
                <p class="path-desc">NCLEX, CNA, HESI, and medical board practice exams.</p>
                <div class="path-footer"><span class="path-count">48 practice tests</span><a href="#" class="path-link">Explore →</a></div>
            </div>
            <div class="path-card">
                <div class="path-icon pink"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M16 4V16H4V4H16Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 4V16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M4 10H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                <h3 class="path-title">Real Estate Licensing</h3>
                <p class="path-desc">State-specific salesperson and broker exam simulations.</p>
                <div class="path-footer"><span class="path-count">36 practice tests</span><a href="#" class="path-link">Explore →</a></div>
            </div>
            <div class="path-card">
                <div class="path-icon blue"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 18C10 18 18 12 18 7C18 4.5 16 2 10 2C4 2 2 4.5 2 7C2 12 10 18 10 18Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M10 10C11.1046 10 12 9.10457 12 8C12 6.89543 11.1046 6 10 6C8.89543 6 8 6.89543 8 8C8 9.10457 8.89543 10 10 10Z" stroke="currentColor" stroke-width="1.5"/></svg></div>
                <h3 class="path-title">Insurance Exams</h3>
                <p class="path-desc">Life, health, property & casualty licensing prep.</p>
                <div class="path-footer"><span class="path-count">28 practice tests</span><a href="#" class="path-link">Explore →</a></div>
            </div>
            <div class="path-card">
                <div class="path-icon green"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M16 6V14C16 15.1046 15.1046 16 14 16H6C4.89543 16 4 15.1046 4 14V6C4 4.89543 4.89543 4 6 4H14C15.1046 4 16 4.89543 16 6Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 8H16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M8 10H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                <h3 class="path-title">IT & Cybersecurity</h3>
                <p class="path-desc">CompTIA, CISSP, AWS, and cloud certification paths.</p>
                <div class="path-footer"><span class="path-count">52 practice tests</span><a href="#" class="path-link">Explore →</a></div>
            </div>
            <div class="path-card">
                <div class="path-icon orange"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M16 14V16H4V14H16Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 10V14H8V10H12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 6V10H6V6H14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <h3 class="path-title">Project Management</h3>
                <p class="path-desc">PMP, CAPM, Agile, and Scrum certification prep.</p>
                <div class="path-footer"><span class="path-count">24 practice tests</span><a href="#" class="path-link">Explore →</a></div>
            </div>
            <div class="path-card">
                <div class="path-icon teal"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4 16L16 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><path d="M4 4V8H8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 16V12H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <h3 class="path-title">HS Equivalency & Admissions</h3>
                <p class="path-desc">GED, HiSET, TEAS, and entrance exam practice.</p>
                <div class="path-footer"><span class="path-count">32 practice tests</span><a href="#" class="path-link">Explore →</a></div>
            </div>
        </div>
    </div>
</section>

{{-- HOW IT WORKS (ROADMAP WITH ANIMATED CAR) --}}
<section class="how-it-works-roadmap">
    <div class="section-container">
        <div class="section-header">
            <h2 class="section-title">How It Works</h2>
            <p class="section-subtitle">Four simple steps to exam success.</p>
        </div>

        <div class="roadmap-wrapper">
            <svg viewBox="0 0 1200 350" xmlns="http://www.w3.org/2000/svg" class="roadmap-svg" preserveAspectRatio="xMidYMid meet" id="roadmapSvg">
                <defs>
                    <linearGradient id="roadGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#1e293b"/>
                        <stop offset="100%" stop-color="#0f172a"/>
                    </linearGradient>
                    <filter id="roadShadow" x="-20%" y="-20%" width="140%" height="140%">
                        <feDropShadow dx="0" dy="8" stdDeviation="12" flood-color="#000" flood-opacity="0.2"/>
                    </filter>
                    <linearGradient id="pinPurple" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#8b5cf6"/><stop offset="100%" stop-color="#7c3aed"/>
                    </linearGradient>
                    <linearGradient id="pinGreen" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#22c55e"/><stop offset="100%" stop-color="#16a34a"/>
                    </linearGradient>
                    <linearGradient id="pinBlue" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#3b82f6"/><stop offset="100%" stop-color="#2563eb"/>
                    </linearGradient>
                    <linearGradient id="pinPink" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" stop-color="#ec4899"/><stop offset="100%" stop-color="#db2777"/>
                    </linearGradient>
                    <linearGradient id="carGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#f59e0b"/><stop offset="100%" stop-color="#d97706"/>
                    </linearGradient>
                </defs>
                
                <path id="roadPath" d="M 80 250 C 180 250, 230 200, 330 200 C 430 200, 480 250, 580 250 C 680 250, 730 120, 830 120 C 930 120, 980 220, 1080 220 C 1130 220, 1160 190, 1180 180" 
                      fill="none" stroke="url(#roadGrad)" stroke-width="65" stroke-linecap="round" stroke-linejoin="round" filter="url(#roadShadow)"/>
                
                <path id="centerLinePath" d="M 80 250 C 180 250, 230 200, 330 200 C 430 200, 480 250, 580 250 C 680 250, 730 120, 830 120 C 930 120, 980 220, 1080 220 C 1130 220, 1160 190, 1180 180" 
                      fill="none" stroke="#fbbf24" stroke-width="4" stroke-dasharray="15 12" stroke-linecap="round" stroke-linejoin="round" opacity="0.9"/>
                
                <g transform="translate(50, 230)">
                    <rect x="0" y="0" width="60" height="40" rx="8" fill="#10b981" filter="url(#roadShadow)"/>
                    <text x="30" y="26" text-anchor="middle" fill="white" font-size="13" font-weight="800" font-family="Inter, sans-serif">START</text>
                </g>
                
                <g transform="translate(1150, 160)">
                    <rect x="0" y="0" width="60" height="40" rx="8" fill="#ef4444" filter="url(#roadShadow)"/>
                    <text x="30" y="26" text-anchor="middle" fill="white" font-size="12" font-weight="800" font-family="Inter, sans-serif">FINISH</text>
                </g>
                
                <g transform="translate(310, 170)" class="pin-marker" data-step="1">
                    <path d="M 0,-40 C -14,-40 -26,-28 -26,-12 C -26,8 0,30 0,30 C 0,30 26,8 26,-12 C 26,-28 14,-40 0,-40 Z" fill="url(#pinPurple)" stroke="white" stroke-width="2.5"/>
                    <circle cx="0" cy="-12" r="8" fill="white"/>
                    <text x="0" y="-7" text-anchor="middle" fill="#7c3aed" font-size="14" font-weight="800" font-family="Inter, sans-serif">1</text>
                </g>
                
                <g transform="translate(560, 220)" class="pin-marker" data-step="2">
                    <path d="M 0,-40 C -14,-40 -26,-28 -26,-12 C -26,8 0,30 0,30 C 0,30 26,8 26,-12 C 26,-28 14,-40 0,-40 Z" fill="url(#pinGreen)" stroke="white" stroke-width="2.5"/>
                    <circle cx="0" cy="-12" r="8" fill="white"/>
                    <text x="0" y="-7" text-anchor="middle" fill="#16a34a" font-size="14" font-weight="800" font-family="Inter, sans-serif">2</text>
                </g>
                
                <g transform="translate(810, 90)" class="pin-marker" data-step="3">
                    <path d="M 0,-40 C -14,-40 -26,-28 -26,-12 C -26,8 0,30 0,30 C 0,30 26,8 26,-12 C 26,-28 14,-40 0,-40 Z" fill="url(#pinBlue)" stroke="white" stroke-width="2.5"/>
                    <circle cx="0" cy="-12" r="8" fill="white"/>
                    <text x="0" y="-7" text-anchor="middle" fill="#2563eb" font-size="14" font-weight="800" font-family="Inter, sans-serif">3</text>
                </g>
                
                <g transform="translate(1110, 190)" class="pin-marker" data-step="4">
                    <path d="M 0,-40 C -14,-40 -26,-28 -26,-12 C -26,8 0,30 0,30 C 0,30 26,8 26,-12 C 26,-28 14,-40 0,-40 Z" fill="url(#pinPink)" stroke="white" stroke-width="2.5"/>
                    <circle cx="0" cy="-12" r="8" fill="white"/>
                    <text x="0" y="-7" text-anchor="middle" fill="#db2777" font-size="14" font-weight="800" font-family="Inter, sans-serif">4</text>
                </g>
                
                <g id="animatedCar" transform="translate(80, 220)">
                    <rect x="-18" y="-12" width="36" height="24" rx="6" fill="url(#carGradient)" stroke="#92400e" stroke-width="2"/>
                    <rect x="-12" y="-18" width="24" height="12" rx="4" fill="#fbbf24" stroke="#92400e" stroke-width="2"/>
                    <circle cx="-10" cy="12" r="5" fill="#1e293b"/>
                    <circle cx="10" cy="12" r="5" fill="#1e293b"/>
                    <circle cx="16" cy="-6" r="3" fill="#fef3c7"/>
                    <circle cx="16" cy="2" r="3" fill="#fef3c7"/>
                    <rect x="-8" y="-15" width="8" height="6" rx="2" fill="#dbeafe" opacity="0.8"/>
                    <rect x="2" y="-15" width="8" height="6" rx="2" fill="#dbeafe" opacity="0.8"/>
                </g>
            </svg>
        </div>

        <!-- YOUR EXACT CARD STRUCTURE - CLASSES UNCHANGED -->
        <div class="steps-grid">
            <div class="step-card" id="stepCard1" data-step="1">
                <div class="step-badge purple"><span>1</span></div>
                <div class="step-icon-wrapper purple">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                        <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        <path d="M9 14l2 2 4-4"></path>
                    </svg>
                </div>
                <h3>Choose</h3>
                <p>Browse 200+ certification paths</p>
            </div>
            
            <div class="step-card" id="stepCard2" data-step="2">
                <div class="step-badge green"><span>2</span></div>
                <div class="step-icon-wrapper green">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h3>Practice</h3>
                <p>Take realistic simulated exams.</p>
            </div>
            
            <div class="step-card" id="stepCard3" data-step="3">
                <div class="step-badge blue"><span>3</span></div>
                <div class="step-icon-wrapper blue">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="m22 22-2.5-2.5"></path>
                    </svg>
                </div>
                <h3>Review</h3>
                <p>Analyze answers with explanations.</p>
            </div>
            
            <div class="step-card" id="stepCard4" data-step="4">
                <div class="step-badge pink"><span>4</span></div>
                <div class="step-icon-wrapper pink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" fill="#fbbf24" stroke="none"></polygon>
                    </svg>
                </div>
                <h3>Pass</h3>
                <p>Track readiness & pass with confidence.</p>
            </div>
        </div>
    </div>
</section>
{{-- PLATFORM FEATURES --}}
<section class="platform-features">
    <div class="section-container">
        <div class="section-header">
            <span class="section-tag">PLATFORM FEATURES</span>
            <h2 class="section-title">Everything You Need to Pass</h2>
            <p class="section-subtitle">A complete toolkit designed for certification success.</p>
        </div>
        <div class="features-grid">
            <!-- Card 1 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="8" stroke="currentColor" stroke-width="1.5"/><path d="M10 6V10L13 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                <h3 class="feature-title">Timed Practice Exams</h3>
                <p class="feature-desc">Simulate real exam conditions with countdown timers and structured question sets.</p>
            </div>
            <!-- Card 2 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><rect x="3" y="3" width="14" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M7 7H13M7 10H13M7 13H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                <h3 class="feature-title">Drag-and-Drop Questions</h3>
                <p class="feature-desc">Interactive ordering and matching questions for hands-on learning.</p>
            </div>
            <!-- Card 3 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><rect x="2" y="4" width="16" height="12" rx="2" stroke="currentColor" stroke-width="1.5"/><circle cx="7" cy="10" r="2" stroke="currentColor" stroke-width="1.5"/><path d="M12 8L14 10L12 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <h3 class="feature-title">Image-Based Answers</h3>
                <p class="feature-desc">Visual questions with images, diagrams, and hotspot interactions.</p>
            </div>
            <!-- Card 4 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4 6C4 4.89543 4.89543 4 6 4H14C15.1046 4 16 4.89543 16 6V14C16 15.1046 15.1046 16 14 16H6C4.89543 16 4 15.1046 4 14V6Z" stroke="currentColor" stroke-width="1.5"/><path d="M8 8H12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                <h3 class="feature-title">Flashcard Refresher</h3>
                <p class="feature-desc">Quick-fire flashcards to reinforce key concepts and definitions.</p>
            </div>
            <!-- Card 5 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 3V17H17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L10 8L13 11L17 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <h3 class="feature-title">Performance Dashboard</h3>
                <p class="feature-desc">Track your progress with detailed analytics and performance trends.</p>
            </div>
            <!-- Card 6 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 2V18M10 2L6 6M10 2L14 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <h3 class="feature-title">Study Streaks</h3>
                <p class="feature-desc">Stay motivated with daily streak tracking and achievement badges.</p>
            </div>
            <!-- Card 7 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M5 4H15C16.1046 4 17 4.89543 17 6V14C17 15.1046 16.1046 16 15 16H5C3.89543 16 3 15.1046 3 14V6C3 4.89543 3.89543 4 5 4Z" stroke="currentColor" stroke-width="1.5"/><path d="M7 8H13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                <h3 class="feature-title">Bookmark Questions</h3>
                <p class="feature-desc">Save difficult questions for later review and targeted practice.</p>
            </div>
            <!-- Card 8 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2C5.58172 2 2 5.58172 2 10C2 14.4183 5.58172 18 10 18Z" stroke="currentColor" stroke-width="1.5"/><path d="M10 6V10L13 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <h3 class="feature-title">Review Incorrect</h3>
                <p class="feature-desc">Analyze wrong answers with explanations to improve understanding.</p>
            </div>
            <!-- Card 9 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><rect x="3" y="5" width="14" height="10" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M7 15V17M13 15V17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg></div>
                <h3 class="feature-title">Realistic Interface</h3>
                <p class="feature-desc">Exam interface designed to match real certification test environments.</p>
            </div>
            <!-- Card 10 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><polygon points="8,5 15,10 8,15" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg></div>
                <h3 class="feature-title">Video Demos</h3>
                <p class="feature-desc">Service demonstration videos showing platform capabilities.</p>
            </div>
            <!-- Card 11 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 3L12.5 8.5L18 9.5L14 13.5L15 19L10 16.5L5 19L6 13.5L2 9.5L7.5 8.5L10 3Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg></div>
                <h3 class="feature-title">Content Validation</h3>
                <p class="feature-desc">Expert-reviewed content ensuring accuracy and exam alignment.</p>
            </div>
            <!-- Card 12 -->
            <div class="feature-card">
                <div class="feature-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><circle cx="10" cy="10" r="7" stroke="currentColor" stroke-width="1.5"/><path d="M10 7V10L12 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <h3 class="feature-title">SEO Optimized</h3>
                <p class="feature-desc">Course pages optimized for discoverability and search rankings.</p>
            </div>
        </div>
    </div>
</section>

{{-- FEATURE HIGHLIGHTS --}}
<section class="feature-highlights">
    <div class="section-container">
        <!-- Block 1 -->
        <div class="highlight-block">
            <div class="highlight-text">
                <h3>Realistic Exam Simulations</h3>
                <p>Mirror the exact pressure, timing, and structure of real exams. Our timed practice tests replicate certification conditions so you walk in fully prepared.</p>
            </div>
            <div class="highlight-card">
                <div class="highlight-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="currentColor" stroke-width="2"/><path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg></div>
                <div class="highlight-stats">
                    <div class="h-stat"><span class="h-val">99%</span><span class="h-lbl">Exam accuracy</span></div>
                    <div class="h-stat"><span class="h-val">8+</span><span class="h-lbl">Question types</span></div>
                </div>
            </div>
        </div>
        <!-- Block 2 -->
        <div class="highlight-block reverse">
            <div class="highlight-text">
                <h3>Performance Analytics</h3>
                <p>Domain-level reporting for weak area identification. Visualize score trends across practice sessions and pinpoint the exact topics that need more work.</p>
            </div>
            <div class="highlight-card">
                <div class="highlight-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M3 3V21H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 14L11 10L15 14L21 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <div class="highlight-stats">
                    <div class="h-stat"><span class="h-val">25+</span><span class="h-lbl">Data points tracked</span></div>
                    <div class="h-stat"><span class="h-val">6</span><span class="h-lbl">Report types</span></div>
                </div>
            </div>
        </div>
        <!-- Block 3 -->
        <div class="highlight-block">
            <div class="highlight-text">
                <h3>Personalized Study Paths</h3>
                <p>Adaptive recommendations based on missed questions. Our system learns from your performance and creates a custom roadmap to exam readiness.</p>
            </div>
            <div class="highlight-card">
                <div class="highlight-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <div class="highlight-stats">
                    <div class="h-stat"><span class="h-val">40%</span><span class="h-lbl">Avg. time saved</span></div>
                    <div class="h-stat"><span class="h-val">3</span><span class="h-lbl">Adaptive modes</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- TESTIMONIALS --}}
<section class="testimonials">
    <div class="section-container">
        <div class="section-header">
            <h2 class="section-title">Trusted by Learners Who Pass</h2>
            <p class="section-subtitle">See what certified professionals say about their Certilyst experience.</p>
        </div>
        <div class="testimonials-grid">
            <!-- Card 1 -->
            <div class="testimonial-card">
                <div class="stars">★★★★★</div>
                <p class="testimonial-quote">"Certilyst was the only resource that made me feel truly prepared. The realistic simulations and detailed rationales were game-changers. Passed on my first attempt!"</p>
                <div class="testimonial-divider"></div>
                <div class="testimonial-author">
                    <div class="author-avatar sm">SM</div>
                    <div class="author-info">
                        <div class="author-name">Sarah Mitchell</div>
                        <div class="author-cert">Passed NCLEX-RN</div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="testimonial-card">
                <div class="stars">★★★★★</div>
                <p class="testimonial-quote">"I studied for just three weeks with Certilyst and passed my real estate licensing exam with a 94%. The practice tests were spot-on accurate."</p>
                <div class="testimonial-divider"></div>
                <div class="testimonial-author">
                    <div class="author-avatar jr">JR</div>
                    <div class="author-info">
                        <div class="author-name">James Rodriguez</div>
                        <div class="author-cert">Passed Real Estate Salesperson</div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="testimonial-card">
                <div class="stars">★★★★★</div>
                <p class="testimonial-quote">"The performance analytics helped me identify my weak domains instantly. I focused my energy exactly where it mattered. Highly recommended for IT certs."</p>
                <div class="testimonial-divider"></div>
                <div class="testimonial-author">
                    <div class="author-avatar ps">PS</div>
                    <div class="author-info">
                        <div class="author-name">Priya Sharma</div>
                        <div class="author-cert">Passed CompTIA Security+</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ SECTION --}}
<section class="faq-section">
    <div class="section-container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Everything you need to know about Certilyst.</p>
        </div>
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question">How many exams are included? <span class="faq-icon">+</span></button>
                <div class="faq-answer"><p>We offer practice exams for over 200 certifications across healthcare, IT, real estate, project management, and more. New exams are added monthly.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Are explanations included? <span class="faq-icon">+</span></button>
                <div class="faq-answer"><p>Yes. Every question includes a detailed rationale explaining why the correct answer is right and why the distractors are wrong.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Can I study on mobile? <span class="faq-icon">+</span></button>
                <div class="faq-answer"><p>Absolutely. Certilyst is fully responsive and optimized for mobile, tablet, and desktop. Study anywhere, anytime.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Is progress saved automatically? <span class="faq-icon">+</span></button>
                <div class="faq-answer"><p>Yes. Your scores, bookmarks, and study history sync automatically across all your devices.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do you support timed mode? <span class="faq-icon">+</span></button>
                <div class="faq-answer"><p>Yes. You can choose between timed exam simulations that mirror real test conditions, or practice mode with no time limits.</p></div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Are new exams added regularly? <span class="faq-icon">+</span></button>
                <div class="faq-answer"><p>Definitely. We update our library monthly based on the latest exam blueprints and learner requests.</p></div>
            </div>
        </div>
    </div>
</section>
{{-- FINAL CTA --}}
<section class="final-cta-section">
    <div class="section-container">
        <div class="cta-banner">
            <h2 class="cta-title">Get Exam-Ready with Certilyst</h2>
            <p class="cta-text">Start practicing smarter with premium simulations, deep analytics, and expertly structured question banks.</p>
            <div class="cta-buttons">
                <a href="#" class="btn-cta btn-cta-white">Start Free Trial →</a>
                <a href="#" class="btn-cta btn-cta-outline">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M2 3H14V13H2V3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 7L6.5 10L11 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Browse Library
                </a>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/app.js') }}"></script>
    {{-- Footer --}}
    @include('partials.footer')
    
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Certilyst - Pass Your Next Certification Exam with Confidence">
    <meta name="keywords" content="certification, exam prep, study guide, Certilyst">
    <title>Certilyst - Pass Certification Exams with Confidence</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    
    {{-- Header --}}
    @include('partials.nav-bar')
    
    {{-- Hero Section --}}
    <section class="hero-section relative min-h-screen flex items-center overflow-hidden">
        
        {{-- Video Background --}}
        <div class="absolute inset-0 z-0">
            <video autoplay loop playsinline muted class="video-element w-full h-full object-cover"
                   poster="https://images.pexels.com/videos/7683392/pexels-photo-7683392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1920">
                <source src="https://videos.pexels.com/video-files/7683392/7683392-hd_1920_1080_30fps.mp4" type="video/mp4">
            </video>
            <div class="video-overlay absolute inset-0 bg-gradient-to-r from-[#581c87]/85 via-[#581c87]/70 to-[#0f172a]/75"></div>
        </div>

        <div class="hero-container relative z-10 max-w-7xl mx-auto px-6 lg:px-8 py-28 lg:py-32">
            <div class="hero-grid grid grid-cols-1 lg:grid-cols-[1.1fr_1fr] gap-12 lg:gap-16 items-center">
                
                {{-- Left Content --}}
                <div class="hero-content text-white">
                    
                    {{-- Badge --}}
                    <div class="badge inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/15 rounded-full px-5 py-2 mb-6">
                        <span class="badge-dot w-1.5 h-1.5 bg-white rounded-full"></span>
                        <span class="text-xs font-semibold uppercase tracking-wide">Certification Success Starts Here</span>
                    </div>

                    {{-- Title --}}
                    <h1 class="hero-title text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.15] mb-6 tracking-tight">
                        Pass Your Next<br>
                        <span class="highlight bg-gradient-to-r from-[#c084fc] to-[#e879f9] bg-clip-text text-transparent">Certification Exam</span><br>
                        with Confidence
                    </h1>

                    {{-- Description --}}
                    <p class="hero-description text-base md:text-lg text-white/85 max-w-xl leading-relaxed mb-8">
                        Certilyst gives learners realistic exam simulations, detailed rationales, performance analytics, adaptive study paths, and expertly curated certification prep systems.
                    </p>

                    {{-- Buttons --}}
                    <div class="hero-buttons flex flex-col sm:flex-row gap-3 mb-12">
                        <a href="#" class="btn btn-primary inline-flex items-center justify-center gap-2 bg-[#7c3aed] hover:bg-[#6d28d9] text-white font-semibold px-7 py-3.5 rounded-full transition-all duration-300 shadow-lg hover:shadow-[#7c3aed]/40 hover:-translate-y-0.5">
                            Start Practicing
                            <svg class="btn-icon w-4 h-4" viewBox="0 0 16 16" fill="none">
                                <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="#" class="btn btn-secondary inline-flex items-center justify-center gap-2 bg-white/8 hover:bg-white/15 text-white font-semibold px-7 py-3.5 rounded-full border border-white/25 backdrop-blur-sm transition-all duration-300">
                            <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none">
                                <path d="M2 3H14V13H2V3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 7L6.5 10L11 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            Explore Exam Library
                        </a>
                    </div>

                    {{-- Stats --}}
                    <div class="hero-stats flex flex-wrap items-center gap-8 pt-8 border-t border-white/10">
                        <div class="stat-item flex items-center gap-2 text-sm text-white/85">
                            <svg class="stat-icon w-4 h-4 text-white/70" viewBox="0 0 16 16" fill="none">
                                <path d="M8 8C9.65685 8 11 6.65685 11 5C11 3.34315 9.65685 2 8 2C6.34315 2 5 3.34315 5 5C5 6.65685 6.34315 8 8 8Z" stroke="currentColor" stroke-width="1.5"/>
                                <path d="M2 14C2 11.5 5 10 8 10C11 10 14 11.5 14 14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                            </svg>
                            <span><strong class="text-white font-bold">50,000+</strong> learners</span>
                        </div>
                        <div class="stat-item flex items-center gap-2 text-sm text-white/85">
                            <svg class="stat-icon w-4 h-4 text-[#fbbf24]" viewBox="0 0 16 16" fill="currentColor">
                                <path d="M8 1L10.09 5.26L14.5 6L11.25 9.24L12 13.5L8 11.5L4 13.5L4.75 9.24L1.5 6L5.91 5.26L8 1Z"/>
                            </svg>
                            <span><strong class="text-white font-bold">4.9/5</strong> rating</span>
                        </div>
                        <div class="stat-item flex items-center gap-2 text-sm text-white/85">
                            <svg class="stat-icon w-4 h-4 text-white/70" viewBox="0 0 16 16" fill="none">
                                <path d="M3 13V8H5V13H3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 13V5H8V13H6Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 13V10H11V13H9Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 13V3H14V13H12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span><strong class="text-white font-bold">200+</strong> cert paths</span>
                        </div>
                    </div>
                </div>

                {{-- Right Floating Cards --}}
                <div class="floating-cards relative h-[600px] hidden lg:block">
                    
                    {{-- Card 1: Exam Readiness --}}
                    <div class="glass-card card-readiness absolute w-60 top-4 right-60 p-5 rounded-2xl bg-white/85 backdrop-blur-xl border border-white/60 shadow-lg animate-float-slow" style="animation-delay: 0s;">
                        <div class="card-icon w-10 h-10 rounded-xl bg-gradient-to-br from-[#a78bfa] to-[#c084fc] flex items-center justify-center text-white mb-3">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="card-label text-xs font-semibold text-gray-500 uppercase tracking-wide mb-1">Exam Readiness</div>
                        <div class="card-big-text text-3xl font-extrabold text-gray-900 mb-2">87%</div>
                        <div class="progress-bar w-full h-1.5 bg-black/8 rounded-full overflow-hidden">
                            <div class="progress-fill h-full bg-gradient-to-r from-[#8b5cf6] to-[#c084fc] rounded-full" style="width: 87%"></div>
                        </div>
                        <div class="card-subtext text-xs text-gray-500 mt-2">You're almost ready to pass!</div>
                    </div>

                    {{-- Card 2: Score Trend --}}
                    <div class="glass-card card-trend absolute w-56 top-5 right-0 p-5 rounded-2xl bg-white/85 backdrop-blur-xl border border-white/60 shadow-lg animate-float-slow" style="animation-delay: 1s;">
                        <div class="card-icon w-8 h-8 rounded-lg bg-gradient-to-br from-[#a78bfa] to-[#c084fc] flex items-center justify-center text-white mb-2">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none">
                                <path d="M3 3V21H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 14L11 10L15 14L21 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="card-label text-xs font-semibold text-gray-500 uppercase tracking-wide mb-2">Score Trend</div>
                        <div class="chart-bars flex items-end gap-1 h-14 mb-2">
                            <div class="bar flex-1 bg-gradient-to-t from-[#a78bfa] to-[#c084fc] rounded-t min-w-2" style="height: 40%"></div>
                            <div class="bar flex-1 bg-gradient-to-t from-[#a78bfa] to-[#c084fc] rounded-t min-w-2" style="height: 50%"></div>
                            <div class="bar flex-1 bg-gradient-to-t from-[#a78bfa] to-[#c084fc] rounded-t min-w-2" style="height: 45%"></div>
                            <div class="bar flex-1 bg-gradient-to-t from-[#a78bfa] to-[#c084fc] rounded-t min-w-2" style="height: 60%"></div>
                            <div class="bar flex-1 bg-gradient-to-t from-[#a78bfa] to-[#c084fc] rounded-t min-w-2" style="height: 70%"></div>
                            <div class="bar flex-1 bg-gradient-to-t from-[#a78bfa] to-[#c084fc] rounded-t min-w-2" style="height: 65%"></div>
                            <div class="bar flex-1 bg-gradient-to-t from-[#a78bfa] to-[#c084fc] rounded-t min-w-2" style="height: 80%"></div>
                            <div class="bar flex-1 bg-gradient-to-t from-[#a78bfa] to-[#c084fc] rounded-t min-w-2" style="height: 90%"></div>
                        </div>
                        <div class="card-subtext text-xs text-[#10b981] font-semibold">+12% this week</div>
                    </div>

                    {{-- Card 3: Weak Areas --}}
                    <div class="glass-card card-weak absolute w-52 top-1/2 -translate-y-1/2 right-22 p-5 rounded-2xl bg-white/85 backdrop-blur-xl border border-white/60 shadow-lg animate-float-slow" style="animation-delay: 2s;">
                        <div class="card-label-bold text-sm font-bold text-gray-900 mb-3">Weak Areas</div>
                        <div class="weak-list space-y-3">
                            <div class="weak-item flex items-center gap-2 text-sm">
                                <span class="weak-dot w-2 h-2 rounded-full bg-[#f59e0b]"></span>
                                <span class="text-gray-600">Pharmacology</span>
                            </div>
                            <div class="weak-item flex items-center gap-2 text-sm">
                                <span class="weak-dot w-2 h-2 rounded-full bg-[#f97316]"></span>
                                <span class="text-gray-600">Network Security</span>
                            </div>
                        </div>
                    </div>

                    {{-- Card 4: Recent Sessions --}}
                    <div class="glass-card card-recent absolute w-60 bottom-36 right-90 p-5 rounded-2xl bg-white/85 backdrop-blur-xl border border-white/60 shadow-lg animate-float-slow" style="animation-delay: 3s;">
                        <div class="card-label-bold text-sm font-bold text-gray-900 mb-3">Recent Sessions</div>
                        <div class="recent-list space-y-3">
                            <div class="recent-item flex justify-between items-center text-sm">
                                <span class="text-gray-600">NCLEX Practice #4</span>
                                <span class="recent-score font-bold text-[#10b981]">82%</span>
                            </div>
                            <div class="recent-item flex justify-between items-center text-sm">
                                <span class="text-gray-600">Pharmacology Quiz</span>
                                <span class="recent-score font-bold text-[#f59e0b]">74%</span>
                            </div>
                            <div class="recent-item flex justify-between items-center text-sm">
                                <span class="text-gray-600">CompTIA Sec+ Mock</span>
                                <span class="recent-score font-bold text-[#10b981]">91%</span>
                            </div>
                        </div>
                    </div>

                    {{-- Card 5: Pass Prediction --}}
                    <div class="glass-card card-prediction absolute w-44 bottom-8 right-80 p-5 rounded-2xl bg-white/85 backdrop-blur-xl border border-white/60 shadow-lg animate-float-slow" style="animation-delay: 4s;">
                        <div class="card-label-bold text-sm font-bold text-gray-900 mb-3 text-center">Pass Prediction</div>
                        <div class="circular-progress relative w-28 h-28 mx-auto">
                            <svg class="progress-ring transform -rotate-90 w-full h-full">
                                <circle class="progress-ring-bg" cx="56" cy="56" r="48" fill="none" stroke="rgba(0,0,0,0.08)" stroke-width="7"/>
                                <circle class="progress-ring-circle" cx="56" cy="56" r="48" fill="none" stroke="url(#gradient)" stroke-width="7" stroke-linecap="round" stroke-dasharray="301.59" stroke-dashoffset="24.13"/>
                            </svg>
                            <div class="progress-content absolute inset-0 flex flex-col items-center justify-center">
                                <div class="progress-percent text-3xl font-extrabold text-[#7c3aed]">92%</div>
                                <div class="progress-subtext text-[10px] text-gray-500 mt-0.5">Likely to pass</div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- SVG Gradient Definition (hidden) --}}
                    <svg class="absolute w-0 h-0">
                        <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#8b5cf6"/>
                                <stop offset="100%" stop-color="#c084fc"/>
                            </linearGradient>
                        </defs>
                    </svg>
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

{{-- HOW IT WORKS (ROADMAP) --}}
<section class="how-it-works-roadmap">
    <div class="section-container">
        <div class="section-header">
            <h2 class="section-title">How It Works</h2>
            <p class="section-subtitle">Four simple steps to exam success.</p>
        </div>
        <div class="roadmap-wrapper">
            <svg viewBox="0 0 900 400" xmlns="http://www.w3.org/2000/svg" class="roadmap-svg">
                <defs>
                    <linearGradient id="roadGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" stop-color="#1e293b"/><stop offset="100%" stop-color="#0f172a"/>
                    </linearGradient>
                    <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                        <feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#000" flood-opacity="0.15"/>
                    </filter>
                </defs>
                
                <!-- Background -->
                <rect width="900" height="400" fill="#fce7f3" rx="16"/>
                
                <!-- Tarmac Road -->
                <path d="M 40 320 Q 150 320, 200 240 T 350 180 T 500 120 T 650 180 T 800 240 T 860 180" fill="none" stroke="url(#roadGrad)" stroke-width="56" stroke-linecap="round" stroke-linejoin="round"/>
                
                <!-- Center Dashed Line -->
                <path d="M 40 320 Q 150 320, 200 240 T 350 180 T 500 120 T 650 180 T 800 240 T 860 180" fill="none" stroke="#fbbf24" stroke-width="2" stroke-dasharray="10 8" stroke-linecap="round" stroke-linejoin="round"/>
                
                <!-- Road Edges -->
                <path d="M 40 294 Q 150 294, 200 214 T 350 154 T 500 94 T 650 154 T 800 214 T 860 154" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-opacity="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M 40 346 Q 150 346, 200 266 T 350 206 T 500 146 T 650 206 T 800 266 T 860 196" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-opacity="0.4" stroke-linecap="round" stroke-linejoin="round"/>
                
                <!-- START -->
                <rect x="20" y="300" width="44" height="28" rx="6" fill="#10b981" filter="url(#shadow)"/>
                <text x="42" y="319" text-anchor="middle" fill="white" font-size="11" font-weight="700" font-family="Inter, sans-serif">START</text>
                
                <!-- FINISH -->
                <rect x="836" y="160" width="44" height="28" rx="6" fill="#ef4444" filter="url(#shadow)"/>
                <text x="858" y="179" text-anchor="middle" fill="white" font-size="11" font-weight="700" font-family="Inter, sans-serif">FINISH</text>
                
                <!-- Step 1 -->
                <g transform="translate(220, 180)" filter="url(#shadow)">
                    <rect x="-70" y="-28" width="140" height="70" rx="12" fill="white"/>
                    <circle cx="-40" cy="8" r="14" fill="#7c3aed"/>
                    <text x="-40" y="13" text-anchor="middle" fill="white" font-size="15" font-weight="800" font-family="Inter, sans-serif">1</text>
                    <text x="15" y="-2" fill="#0f172a" font-size="13" font-weight="700" font-family="Inter, sans-serif">Choose your exam</text>
                    <text x="15" y="16" fill="#64748b" font-size="10" font-family="Inter, sans-serif">Browse 200+ certification paths</text>
                </g>
                
                <!-- Step 2 -->
                <g transform="translate(420, 100)" filter="url(#shadow)">
                    <rect x="-80" y="-28" width="160" height="70" rx="12" fill="white"/>
                    <circle cx="-50" cy="8" r="14" fill="#7c3aed"/>
                    <text x="-50" y="13" text-anchor="middle" fill="white" font-size="15" font-weight="800" font-family="Inter, sans-serif">2</text>
                    <text x="10" y="-2" fill="#0f172a" font-size="13" font-weight="700" font-family="Inter, sans-serif">Take realistic simulations</text>
                    <text x="10" y="16" fill="#64748b" font-size="10" font-family="Inter, sans-serif">Timed, exam-accurate question sets</text>
                </g>
                
                <!-- Step 3 -->
                <g transform="translate(620, 180)" filter="url(#shadow)">
                    <rect x="-85" y="-28" width="170" height="70" rx="12" fill="white"/>
                    <circle cx="-55" cy="8" r="14" fill="#7c3aed"/>
                    <text x="-55" y="13" text-anchor="middle" fill="white" font-size="15" font-weight="800" font-family="Inter, sans-serif">3</text>
                    <text x="10" y="-2" fill="#0f172a" font-size="13" font-weight="700" font-family="Inter, sans-serif">Review detailed rationales</text>
                    <text x="10" y="16" fill="#64748b" font-size="10" font-family="Inter, sans-serif">Expert explanations for every answer</text>
                </g>
                
                <!-- Step 4 -->
                <g transform="translate(790, 120)" filter="url(#shadow)">
                    <rect x="-75" y="-28" width="150" height="70" rx="12" fill="white"/>
                    <circle cx="-45" cy="8" r="14" fill="#7c3aed"/>
                    <text x="-45" y="13" text-anchor="middle" fill="white" font-size="15" font-weight="800" font-family="Inter, sans-serif">4</text>
                    <text x="15" y="-2" fill="#0f172a" font-size="13" font-weight="700" font-family="Inter, sans-serif">Track readiness & pass</text>
                    <text x="15" y="16" fill="#64748b" font-size="10" font-family="Inter, sans-serif">Monitor progress until certified</text>
                </g>
                
                <!-- Sun -->
                <circle cx="750" cy="50" r="30" fill="#fbbf24" opacity="0.8"/>
                <circle cx="750" cy="50" r="20" fill="#f59e0b" opacity="0.6"/>
            </svg>
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
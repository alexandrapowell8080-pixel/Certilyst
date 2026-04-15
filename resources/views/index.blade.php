<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Certilyst - Pass Your Next Certification Exam with Confidence">
    <meta name="keywords" content="certification, exam prep, study guide, Certilyst">
    <title>Certilyst - Pass Certification Exams with Confidence</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    
    {{-- Header --}}
    @include('partials.header')
    
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="video-background">
            <video autoplay loop playsinline muted class="video-element"
                   poster="https://images.pexels.com/videos/7683392/pexels-photo-7683392.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=1920">
                <source src="https://videos.pexels.com/video-files/7683392/7683392-hd_1920_1080_30fps.mp4" type="video/mp4">
            </video>
            <div class="video-overlay"></div>
        </div>

        <div class="hero-container">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="badge">
                        <span>Certification Success Starts Here</span>
                    </div>

                    <h1 class="hero-title">
                        Pass Your Next <br>
                        <span class="highlight">Certification Exam</span> <br>
                        with Confidence
                    </h1>

                    <p class="hero-description">
                        Certilyst gives learners realistic exam simulations, detailed rationales, performance analytics, adaptive study paths, and expertly curated certification prep systems.
                    </p>

                    <div class="hero-buttons">
                        <a href="#" class="btn btn-primary">Start Practicing</a>
                        <a href="#" class="btn btn-secondary">Explore Exam Library</a>
                    </div>

                    <div class="hero-stats">
                        <div class="stat">
                            <span class="stat-number">50,000+</span>
                            <span class="stat-label">Active Learners</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">4.9/5</span>
                            <span class="stat-label">Average Rating</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">250+</span>
                            <span class="stat-label">Certified Exams</span>
                        </div>
                    </div>
                </div>

                <div class="floating-cards">
                    <div class="glass-card card-score">
                        <div class="card-header">
                            <span class="card-title">Score Progress</span>
                            <span class="card-badge">+12%</span>
                        </div>
                        <div class="card-value">87%</div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 87%"></div>
                        </div>
                    </div>

                    <div class="glass-card card-trends">
                        <span class="card-title">Exam Trends</span>
                        <div class="chart-bars">
                            <div class="bar bar-1"></div>
                            <div class="bar bar-2"></div>
                            <div class="bar bar-3"></div>
                            <div class="bar bar-4"></div>
                            <div class="bar bar-5"></div>
                        </div>
                    </div>

                    <div class="glass-card card-weak-areas">
                        <span class="card-title">Weak Areas</span>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span>Networking</span>
                                <span class="skill-percent red">65%</span>
                            </div>
                            <div class="progress-bar small">
                                <div class="progress-fill red" style="width: 65%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span>Security</span>
                                <span class="skill-percent yellow">78%</span>
                            </div>
                            <div class="progress-bar small">
                                <div class="progress-fill yellow" style="width: 78%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="glass-card card-prediction">
                        <span class="card-title">Pass Prediction</span>
                        <div class="circular-progress">
                            <svg class="progress-svg">
                                <circle class="progress-bg" cx="40" cy="40" r="36"/>
                                <circle class="progress-bar" cx="40" cy="40" r="36"/>
                            </svg>
                            <span class="progress-text">92%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('partials.footer')
    
</body>
</html>
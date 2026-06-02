<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About Certilyst - Your pathway to certification success with AI-driven learning, realistic exam simulations, and expert-curated resources.">
    <meta name="keywords" content="certification, exam prep, study guide, Certilyst">
    <link rel="canonical" href="{{ env('APP_URL') }}/about">
    <title>About Certilyst</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
{{-- Header --}}
    @include('partials.nav-bar')
    <!-- Hero Section-->
    <section class="hero-section about-hero">
        <div class="section-container">
            <h1 class="hero-title">About <span class="text-gradient">Certilyst</span></h1>
            <p class="hero-subtitle">We're on a mission to help every student pass their professional certification exam on the first try with smart, adaptive practice that actually works.</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="mission-grid">
            <div>
                <h2 class="mission-title">Our Mission</h2>
                <p class="mission-text">Certilyst was built by educators and professionals who know how stressful certification exams can be. We combine real exam questions with detailed rationales so you don't just memorize — you truly understand.</p>
                <p class="mission-text">Whether you're pursuing a nursing license, real estate certification, IT credential, or any other professional exam, Certilyst gives you the edge you need to succeed.</p>
            </div>
            <div class="stats-grid about-stats">
                <div class="stat-card">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                    </div>
                    <div class="stat-value">50,000+</div>
                    <div class="stat-label">Active Students</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <div class="stat-value">98%</div>
                    <div class="stat-label">Success Rate</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                    </div>
                    <div class="stat-value">200+</div>
                    <div class="stat-label">Certifications Covered</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <div class="stat-value">4.9★</div>
                    <div class="stat-label">
Learner Satisfaction</div>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Cover Section -->
    <section class="categories-section">
        <div class="section-container">
            <h2 class="categories-title">What We Cover</h2>
            <p class="categories-subtitle">Over 30,000 practice questions across major professional certification categories.</p>
            <div class="categories-grid">
                <button class="category-btn">Real Estate</button>
                <button class="category-btn">Insurance</button>
                <button class="category-btn">Nursing</button>
                <button class="category-btn">Medical</button>
                <button class="category-btn">Teaching</button>
                <button class="category-btn">IT & Tech</button>
                <button class="category-btn">Business</button>
                <button class="category-btn">Professional Licensing</button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-header">
            <h2 class="contact-title">Contact Us</h2>
            <p class="contact-subtitle">Have a question or feedback? We'd love to hear from you.</p>
        </div>
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </div>
                    <div>
                        <div class="contact-label">Email</div>
                        <div class="contact-value">support@certilyst.com</div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
                    </div>
                    <div>
                        <div class="contact-label">WhatsApp</div>
                        <div class="contact-value">Chat with us on WhatsApp</div>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    </div>
                    <div>
                        <div class="contact-label">Office</div>
                        <div class="contact-value">123 Learning Ave, Suite 400<br>San Francisco, CA 94102</div>
                    </div>
                </div>
            </div>
            <div class="contact-form-wrapper">
                <div class="success-message" id="successMessage">✓ Message sent successfully! We'll get back to you soon.</div>
                <form id="contactForm">
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" class="form-input" placeholder="Your full name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-input" placeholder="you@example.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Message</label>
                        <textarea id="message" class="form-textarea" placeholder="How can we help you?" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn" id="submitBtn">
                        <svg viewBox="0 0 24 24"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/app.js') }}" defer></script>
    @include('partials.footer')
</body>
</html>
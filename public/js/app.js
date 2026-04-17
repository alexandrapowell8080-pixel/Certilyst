document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter, .counter-decimal');

    const animateCounter = (el) => {
        const target = parseInt(el.getAttribute('data-target'), 10);
        const duration = 2000;
        const start = 0;
        const startTime = performance.now();

        const update = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easeOut = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(start + (target - start) * easeOut);
            el.textContent = current;

            if (progress < 1) {
                requestAnimationFrame(update);
            }
        };
        requestAnimationFrame(update);
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
});
// FAQ Accordion Toggle
document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const item = button.parentElement;
        const isActive = item.classList.contains('active');
        
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
        if (!isActive) item.classList.add('active');
    });
});

(function() {
    'use strict';
    
    document.addEventListener('DOMContentLoaded', function() {
        
        // ===== Contact Form Handler =====
        const contactForm = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const successMessage = document.getElementById('successMessage');
        
        if (contactForm && submitBtn) {
            contactForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                
                const originalContent = submitBtn.innerHTML;
                
                // Show loading state
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/><path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2" fill="none"/></svg> Sending...';
                submitBtn.classList.add('btn-loading');
                
                try {
                    
                    await new Promise(resolve => setTimeout(resolve, 1500));
                    
                    // Show success
                    if (successMessage) {
                        successMessage.style.display = 'block';
                    }
                    submitBtn.innerHTML = '<svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12" stroke="currentColor" stroke-width="2" fill="none"/></svg> Message Sent!';
                    submitBtn.style.background = 'linear-gradient(135deg, #10b981, #059669)';
                    
                    // Reset form
                    contactForm.reset();
                    
                } catch (error) {
                    console.error('Form submission error:', error);
                    submitBtn.innerHTML = originalContent;
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('btn-loading');
                    alert('Something went wrong. Please try again.');
                    
                } finally {
                    // Reset button after 3 seconds
                    setTimeout(() => {
                        if (submitBtn && !submitBtn.disabled) {
                            submitBtn.innerHTML = originalContent;
                            submitBtn.style.background = '';
                            submitBtn.classList.remove('btn-loading');
                        }
                        if (successMessage) {
                            successMessage.style.display = 'none';
                        }
                    }, 3000);
                }
            });
        }
        
        // ===== Category Buttons Click Handler =====
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const category = this.textContent.trim();
                console.log('Category selected:', category);
                
            });
        });
        
        // ===== Smooth Scroll for Anchor Links =====
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const target = document.querySelector(targetId);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
     
        document.querySelectorAll('.form-input, .form-textarea').forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = 'var(--primary)';
                this.style.boxShadow = '0 0 0 3px rgba(124, 58, 237, 0.1)';
            });
            input.addEventListener('blur', function() {
                this.style.borderColor = '#e5e7eb';
                this.style.boxShadow = 'none';
            });
        });
        
    });
    
})();
/* ========================================
   ROADMAP CAR ANIMATION
   Paste at end of app.js - uses existing CSS classes
======================================== */
(function() {
    const car = document.getElementById('animatedCar');
    const roadPath = document.getElementById('roadPath');
    if (!car || !roadPath) return;

    const stepCards = [
        document.getElementById('stepCard1'),
        document.getElementById('stepCard2'),
        document.getElementById('stepCard3'),
        document.getElementById('stepCard4')
    ];

    const pinPositions = [280, 520, 780, 1050];
    const pathLength = roadPath.getTotalLength();
    
    let currentPinIndex = 0;
    let currentDistance = 0;
    let isAnimating = true;
    let isPaused = false;

    function highlightCard(index) {
        if (!stepCards[index]) return;
        const card = stepCards[index];
        
        // Add glow effect using your existing transition
        card.style.transform = 'scale(1.05)';
        card.style.boxShadow = '0 0 30px rgba(124, 58, 237, 0.4), 0 12px 40px rgba(0, 0, 0, 0.12)';
        
        // Match card border to step color
        const colors = {
            0: '#8b5cf6',
            1: '#22c55e',
            2: '#3b82f6',
            3: '#ec4899'
        };
        card.style.borderColor = colors[index];
        
        setTimeout(() => {
            card.style.transform = '';
            card.style.boxShadow = '';
            card.style.borderColor = 'transparent';
        }, 2500);
    }

    function animateCar() {
        if (!isAnimating) return;

        if (!isPaused) {
            currentDistance += 2;

            if (currentDistance >= pathLength) {
                currentDistance = pathLength;
                isAnimating = false;
                stepCards.forEach((card, i) => setTimeout(() => highlightCard(i), i * 200));
            }

            if (currentPinIndex < pinPositions.length && currentDistance >= pinPositions[currentPinIndex]) {
                isPaused = true;
                highlightCard(currentPinIndex);
                currentPinIndex++;
                
                setTimeout(() => {
                    isPaused = false;
                    if (currentDistance < pathLength && isAnimating) {
                        requestAnimationFrame(animateCar);
                    }
                }, 2500);
            }

            const point = roadPath.getPointAtLength(currentDistance);
            const nextPoint = roadPath.getPointAtLength(Math.min(currentDistance + 5, pathLength));
            const angle = Math.atan2(nextPoint.y - point.y, nextPoint.x - point.x) * 180 / Math.PI;
            
            car.setAttribute('transform', `translate(${point.x}, ${point.y}) rotate(${angle})`);
        }

        if (isAnimating) requestAnimationFrame(animateCar);
    }

    setTimeout(() => requestAnimationFrame(animateCar), 800);

    const roadmapWrapper = document.querySelector('.roadmap-wrapper');
    if (roadmapWrapper) {
        roadmapWrapper.addEventListener('mouseenter', () => {
            if (!isAnimating) {
                isAnimating = true;
                currentDistance = 0;
                currentPinIndex = 0;
                isPaused = false;
                car.setAttribute('transform', 'translate(80, 220)');
                requestAnimationFrame(animateCar);
            }
        });
    }

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    isAnimating = false;
                } else if (currentDistance < pathLength && !isAnimating) {
                    isAnimating = true;
                    requestAnimationFrame(animateCar);
                }
            });
        }, { threshold: 0.1 });
        observer.observe(document.querySelector('.how-it-works-roadmap'));
    }
})();
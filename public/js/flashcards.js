document.addEventListener("DOMContentLoaded", () => {
    // Flashcard Data & State
    const allCards = window.appFlashcards || [];
    let flashcards = [...allCards];
    let currentIndex = 0;
    let currentMode = "linear";

    // DOM Elements
    const DOM = {
        inner: document.getElementById("flashcard-inner"),
        q: document.getElementById("card-question"),
        a: document.getElementById("card-answer"),
        hintBtn: document.getElementById("btn-hint"),
        hintText: document.getElementById("hint-text"),
        badge: document.getElementById("card-badge"),
        navCount: document.getElementById("nav-count"),
        progressFill: document.getElementById("progress-bar-fill"),
        btnPrev: document.getElementById("btn-prev"),
        btnNext: document.getElementById("btn-next"),
        btnPractice: document.getElementById("btn-practice"),
        btnGotIt: document.getElementById("btn-got-it"),
        modeBtns: document.querySelectorAll(".mode-btn"),
        metrics: {
            mastered: document.getElementById("metric-mastered"),
            learning: document.getElementById("metric-learning"),
            new: document.getElementById("metric-new"),
        },
    };

    const statusConfig = {
        new: { text: "QUESTION", class: "text-red" },
        learning: { text: "🟡 LEARNING", class: "text-yellow" },
        mastered: { text: "🟢 MASTERED", class: "text-green" },
    };

    function renderCard() {
        if (!flashcards.length) return;

        const card = flashcards[currentIndex];

        // Reset state
        DOM.inner.classList.remove("is-flipped");

        // Handle hints gracefully
        if (card.hint) {
            DOM.hintText.classList.add("hidden");
            DOM.hintBtn.classList.remove("hidden");
            DOM.hintText.textContent = card.hint;
        } else {
            DOM.hintText.classList.add("hidden");
            DOM.hintBtn.classList.add("hidden");
        }

        // Populate content
        DOM.q.textContent = card.q;
        DOM.a.textContent = card.a;

        // Update counters
        DOM.navCount.textContent = `${currentIndex + 1} / ${flashcards.length}`;

        // Update Badge
        const conf = statusConfig[card.status] || statusConfig.new;
        DOM.badge.className = `card-label ${conf.class}`;
        DOM.badge.textContent = conf.text;

        // Button States
        DOM.btnPrev.disabled = currentIndex === 0;
        DOM.btnNext.disabled = currentIndex === flashcards.length - 1;

        updateMetrics();
        updateProgressBar();
    }

    function updateMetrics() {
        const counts = { new: 0, learning: 0, mastered: 0 };
        flashcards.forEach((c) => {
            if (counts[c.status] !== undefined) counts[c.status]++;
        });

        DOM.metrics.mastered.textContent = `✓ ${counts.mastered} Mastered`;
        DOM.metrics.learning.textContent = `⟳ ${counts.learning} Learning`;
        DOM.metrics.new.textContent = `! ${counts.new} New`;
    }

    function updateProgressBar() {
        if (flashcards.length === 0) return;
        const percentage = ((currentIndex + 1) / flashcards.length) * 100;
        DOM.progressFill.style.width = `${percentage}%`;
    }

    function updateStatus(newStatus) {
        if (flashcards.length === 0) return;
        flashcards[currentIndex].status = newStatus;
        renderCard();

        // Auto advance with slight delay to show stat update
        if (currentIndex < flashcards.length - 1) {
            setTimeout(() => {
                currentIndex++;
                renderCard();
            }, 400);
        }
    }

    // Event Listeners
    DOM.inner.parentElement.addEventListener("click", (e) => {
        // Prevent flip if clicking hint inside the card
        if (!e.target.closest("#btn-hint")) {
            DOM.inner.classList.toggle("is-flipped");
        }
    });

    if (DOM.hintBtn) {
        DOM.hintBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            DOM.hintBtn.classList.add("hidden");
            DOM.hintText.classList.remove("hidden");
        });
    }

    DOM.btnPrev.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            renderCard();
        }
    });

    DOM.btnNext.addEventListener("click", () => {
        if (currentIndex < flashcards.length - 1) {
            currentIndex++;
            renderCard();
        }
    });

    DOM.btnPractice.addEventListener("click", (e) => {
        e.stopPropagation();
        updateStatus("learning");
    });

    DOM.btnGotIt.addEventListener("click", (e) => {
        e.stopPropagation();
        updateStatus("mastered");
    });

    DOM.modeBtns.forEach((btn) => {
        btn.addEventListener("click", (e) => {
            DOM.modeBtns.forEach((b) => b.classList.remove("active"));
            e.currentTarget.classList.add("active");
            currentMode = e.currentTarget.dataset.mode;

            // Handle mode-specific filtering
            if (currentMode === "random") {
                flashcards = [...allCards].sort(() => Math.random() - 0.5);
            } else if (currentMode === "weak") {
                // Filter by the new is_hard property
                flashcards = allCards.filter((card) => card.is_hard === true);

                if (flashcards.length === 0) flashcards = [...allCards];
            } else {
                flashcards = [...allCards];
            }

            currentIndex = 0;
            renderCard();
        });
    });

    // Init
    renderCard();
});

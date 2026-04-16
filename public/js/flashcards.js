document.addEventListener("DOMContentLoaded", () => {
    // Dummy Data - To be replaced by backend array
    const allCards = [
        {
            id: 1,
            q: "What is the SAFE Act?",
            hint: "Focus on residential mortgage loans.",
            a: "A federal law establishing minimum standards for licensing and registering mortgage loan originators.",
            status: "new",
        },
        {
            id: 2,
            q: "Define Fiduciary Duty.",
            hint: "Think about trust.",
            a: "Fiduciary duty includes several key responsibilities such as obedience (following lawful instructions of the client), loyalty (avoiding conflicts of interest), full disclosure (sharing all relevant information), confidentiality (protecting the client’s private information), accounting (properly handling and reporting finances), and exercising reasonable care and diligence in all actions. Failure to uphold these responsibilities can result in legal consequences and loss of trust.",
            status: "new",
        },
        {
            id: 3,
            q: "What is a Dual Agency?",
            hint: "Representing both sides.",
            a: "When a real estate broker represents both the buyer and the seller in the same transaction.",
            status: "new",
        },
        {
            id: 4,
            q: "Explain the concept of 'Escrow'.",
            hint: "Third-party holding.",
            a: "A financial arrangement where a third party holds and regulates payment of the funds required for two parties involved in a given transaction.",
            status: "new",
        },
        {
            id: 5,
            q: "What is an Appraisal?",
            hint: "Determining value.",
            a: "A professional estimate of a property's market value, based on recent sales of similar properties, condition, and location.",
            status: "new",
        },
    ];

    let flashcards = [...allCards]; // The active deck being viewed
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
        trialCount: document.getElementById("trial-count"),
        dots: document.getElementById("progress-dots"),
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
        new: { text: "🔴 New", class: "badge-red", dotClass: "bg-grey" },
        learning: {
            text: "🟡 Learning",
            class: "badge-yellow",
            dotClass: "bg-yellow",
        },
        mastered: {
            text: "🟢 Mastered",
            class: "badge-green",
            dotClass: "bg-green",
        },
    };

    function renderCard() {
        const card = flashcards[currentIndex];

        // Reset state
        DOM.inner.classList.remove("flipped");
        DOM.hintText.classList.add("hidden");
        DOM.hintBtn.classList.remove("hidden");

        // Populate content
        DOM.q.textContent = card.q;
        DOM.a.textContent = card.a;
        DOM.hintText.textContent = card.hint;

        // Update counters
        DOM.navCount.textContent = `${currentIndex + 1} / ${flashcards.length}`;
        DOM.trialCount.textContent = `Trial: ${currentIndex + 1}/${flashcards.length} free cards`;

        // Update Badge
        const conf = statusConfig[card.status];
        DOM.badge.className = `badge text-xs font-semibold mb-4 ${conf.class}`;
        DOM.badge.textContent = conf.text;

        // Button States
        DOM.btnPrev.disabled = currentIndex === 0;
        DOM.btnNext.disabled = currentIndex === flashcards.length - 1;

        updateMetrics();
        renderDots();
    }

    function updateMetrics() {
        const counts = { new: 0, learning: 0, mastered: 0 };
        flashcards.forEach((c) => counts[c.status]++);

        DOM.metrics.mastered.textContent = `🟢 ${counts.mastered} Mastered`;
        DOM.metrics.learning.textContent = `🟡 ${counts.learning} Learning`;
        DOM.metrics.new.textContent = `🔴 ${counts.new} New`;
    }

    function renderDots() {
        DOM.dots.innerHTML = "";
        flashcards.forEach((card, index) => {
            const dot = document.createElement("div");
            dot.className = `dot-segment ${statusConfig[card.status].dotClass} ${index === currentIndex ? "scale-125 ring-2 ring-primary border-solid" : ""}`;
            DOM.dots.appendChild(dot);
        });
    }

    function updateStatus(newStatus) {
        flashcards[currentIndex].status = newStatus;
        renderCard();
        if (currentIndex < flashcards.length - 1) {
            setTimeout(() => {
                currentIndex++;
                renderCard();
            }, 400); // Auto advance
        }
    }

    // Event Listeners
    DOM.inner.parentElement.addEventListener("click", (e) => {
        // Prevent flip if clicking specific action buttons inside the card
        if (
            !e.target.closest("#btn-hint") &&
            !e.target.closest(".action-btn")
        ) {
            DOM.inner.classList.toggle("flipped");
        }
    });

    DOM.hintBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        DOM.hintBtn.classList.add("hidden");
        DOM.hintText.classList.remove("hidden");
    });

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
            DOM.modeBtns.forEach((b) => {
                b.classList.remove("btn-primary");
                b.classList.add("btn-secondary");
            });
            e.currentTarget.classList.remove("btn-secondary");
            e.currentTarget.classList.add("btn-primary");
            currentMode = e.currentTarget.dataset.mode;

            // Handle mode-specific filtering
            if (currentMode === "random") {
                flashcards = [...allCards].sort(() => Math.random() - 0.5);
            } else if (currentMode === "weak") {
                // Filter to only show cards marked as 🔴 New or 🟡 Learning
                flashcards = allCards.filter(
                    (card) =>
                        card.status === "learning" || card.status === "new",
                );
                // Fallback if they mastered everything
                if (flashcards.length === 0) flashcards = [...allCards];
            } else {
                // Linear mode
                flashcards = [...allCards];
            }

            currentIndex = 0;
            renderCard();
        });
    });

    // Init
    renderCard();
});

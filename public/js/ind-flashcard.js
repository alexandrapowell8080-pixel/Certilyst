document.addEventListener("DOMContentLoaded", function () {
    const cardInner = document.getElementById("flashcard-inner");
    const hintBtn = document.getElementById("btn-hint");
    const hintText = document.getElementById("hint-text");

    if (cardInner) {
        cardInner.addEventListener("click", function () {
            this.classList.toggle("is-flipped");
            this.classList.toggle("flipped");
        });
    }

    if (hintBtn && hintText) {
        hintBtn.addEventListener("click", function (e) {
            e.stopPropagation();
            hintText.classList.toggle("hidden");
        });
    }
});

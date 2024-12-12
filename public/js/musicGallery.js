// Wait until the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function () {
    // Select all galleries and set up scrolling for each
    document.querySelectorAll(".gallery").forEach((scrollContainer) => {
        const galleryType = scrollContainer.classList.contains('songs') ? 'songs' :
                            scrollContainer.classList.contains('albums') ? 'albums' : 'artists';

        // Find the corresponding buttons for this gallery instance
        const backBtn = document.getElementById(`backBtn_${galleryType}`);
        const nextBtn = document.getElementById(`nextBtn_${galleryType}`);
        
        // Mouse wheel horizontal scrolling
        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
        });

        // Button click scrolling
        if (nextBtn && backBtn) {
            nextBtn.addEventListener("click", () => {
                scrollContainer.scrollBy({
                    left: 200, // Adjust scroll amount as needed
                    behavior: "smooth"
                });
            });

            backBtn.addEventListener("click", () => {
                scrollContainer.scrollBy({
                    left: -200, // Adjust scroll amount as needed
                    behavior: "smooth"
                });
            });
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".gallery").forEach((scrollContainer) => {
        const galleryType = scrollContainer.classList.contains('songs') ? 'songs' :
            scrollContainer.classList.contains('albums') ? 'albums' : 'artists';

        const backBtn = document.getElementById(`backBtn_${galleryType}`);
        const nextBtn = document.getElementById(`nextBtn_${galleryType}`);

        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
        });

        if (nextBtn && backBtn) {
            nextBtn.addEventListener("click", () => {
                scrollContainer.scrollBy({
                    left: 200,
                    behavior: "smooth"
                });
            });

            backBtn.addEventListener("click", () => {
                scrollContainer.scrollBy({
                    left: -200,
                    behavior: "smooth"
                });
            });
        }
    });
});

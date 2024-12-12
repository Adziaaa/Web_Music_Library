document.addEventListener("DOMContentLoaded", function () {
    const scrollContainer = document.querySelector(".gallery.songs");

    const backBtn = document.getElementById("backBtn_songs");
    const nextBtn = document.getElementById("nextBtn_songs");

    scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
    });

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
});

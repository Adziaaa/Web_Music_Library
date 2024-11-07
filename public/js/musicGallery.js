document.querySelectorAll('.gallery-container').forEach((container, index) => {
    const scrollContainer = container.querySelector(`.gallery`);
    const backBtn = container.querySelector(`#backBtn${index}`);
    const nextBtn = container.querySelector(`#nextBtn${index}`);

    scrollContainer.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer.scrollLeft += evt.deltaY;
        scrollContainer.style.scrollBehavior = "auto";
    });

    nextBtn.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft += 200;
    });

    backBtn.addEventListener("click", () => {
        scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft -= 200;
    });
});

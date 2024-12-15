document.addEventListener('DOMContentLoaded', function () {
    const header = document.getElementById('rules');
    const text = header.textContent;
    header.textContent = '';
    let i = 0;

    function typeWriter() {
        if (i < text.length) {
            header.textContent += text.charAt(i);
            i++;
            setTimeout(typeWriter, 100);
        }
    }
    typeWriter();
});

document.addEventListener('mousemove', (e) => {
    const cursor = document.querySelector('.custom-cursor');
    cursor.style.left = `${e.pageX}px`;
    cursor.style.top = `${e.pageY}px`;
});

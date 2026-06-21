const images = [
    '/images/legobatman1.JPG',
    '/images/legobatman2.JPG',
    '/images/legobatman3.JPG'
];

let current = 0;

function showSlide(index) {
    const slide = document.getElementById('slide');
    if (slide) {
        slide.src = images[index];
    }
}

window.nextSlide = function () {
    current = (current + 1) % images.length;
    showSlide(current);
};

window.previousSlide = function () {
    current = (current - 1 + images.length) % images.length;
    showSlide(current);
};

document.addEventListener('DOMContentLoaded', () => {
    const carouselImages = document.querySelectorAll('.carousel_image');
    let currentIndex = 0;

    function showImage(index) {
        carouselImages.forEach((img, i) => {
            img.style.display = i === index ? 'block' : 'none';
        });
    }

    // Ensure the first image is visible initially
    if (carouselImages.length > 0) {
        showImage(currentIndex);

        // Cycle through images every 3 seconds
        setInterval(() => {
            currentIndex = (currentIndex + 1) % carouselImages.length;
            showImage(currentIndex);
        }, 3000); // Change every 3 seconds
    }
});

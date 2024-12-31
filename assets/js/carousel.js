document.addEventListener('DOMContentLoaded', () => {
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.thumbnail');
    const prevButton = document.querySelector('.carousel_control.prev');
    const nextButton = document.querySelector('.carousel_control.next');

    let currentIndex = 0;
    let autoSwitchInterval;

    // Display image based on index
    function showImage(index) {
        const selectedThumbnail = thumbnails[index];
        mainImage.src = selectedThumbnail.src;
        thumbnails.forEach(thumb => thumb.classList.remove('active'));
        selectedThumbnail.classList.add('active');
    }

    // Thumbnail click event
    thumbnails.forEach((thumb, index) => {
        thumb.addEventListener('click', () => {
            currentIndex = index;
            showImage(currentIndex);
            resetAutoSwitch();
        });
    });

    // Next button click
    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % thumbnails.length;
        showImage(currentIndex);
        resetAutoSwitch();
    });

    // Previous button click
    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
        showImage(currentIndex);
        resetAutoSwitch();
    });

    // Auto-switch images every 3 seconds
    function startAutoSwitch() {
        autoSwitchInterval = setInterval(() => {
            currentIndex = (currentIndex + 1) % thumbnails.length;
            showImage(currentIndex);
        }, 3000);
    }

    // Reset auto-switch timer
    function resetAutoSwitch() {
        clearInterval(autoSwitchInterval);
        startAutoSwitch();
    }

    // Start auto-switch on load
    startAutoSwitch();
});

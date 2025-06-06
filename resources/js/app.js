import './bootstrap';
import Splide from '@splidejs/splide';

// Inisialisasi AOS (dari langkah sebelumnya, pastikan masih ada)
import AOS from 'aos';
AOS.init({
    duration: 800,
    once: true,
});


// Inisialisasi Splide Carousel
document.addEventListener('DOMContentLoaded', function () {
    // Main Carousel
    if (document.getElementById('main-carousel')) {
        const mainSplide = new Splide('#main-carousel', {
            type: 'loop',
            heightRatio: 0.4, // Sesuaikan rasio tinggi carousel
            pagination: false,
            arrows: true,
            cover: true,
        });

        // Thumbnail Carousel
        const thumbsSplide = new Splide('#thumbnail-carousel', {
            rewind: true,
            fixedWidth: 120, // Lebar setiap thumbnail
            fixedHeight: 70,
            isNavigation: true,
            gap: 10,
            focus: 'center',
            pagination: false,
            cover: true,
            arrows: false,
            dragMinThreshold: {
                mouse: 4,
                touch: 10,
            },
            breakpoints: {
                640: {
                    fixedWidth: 80,
                    fixedHeight: 50,
                },
            },
        });

        mainSplide.sync(thumbsSplide);
        mainSplide.mount();
        thumbsSplide.mount();
    }
});
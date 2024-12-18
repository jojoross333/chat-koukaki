// APPARITION DES TITRES INTERSECTION
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        entry.target.classList.toggle('visible', entry.isIntersecting);
    });
}, { threshold: 0.1 });

document.querySelectorAll('.appear').forEach(element => {
    observer.observe(element);
});


// Initialiser Swiper
document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper('.swiper-container', {
        loop: true, // Permet de faire défiler de manière infinie
        spaceBetween: 20,
        speed: 1000,
        effect: 'coverflow', // Choisir l'effet Cover Flow
        centeredSlides: true, // Centre les slides
        slidesPerView: 3, // Affiche 3 slides
        coverflowEffect: {
            rotate: 70, // Angle de rotation des slides
            stretch: 0,
            depth: 100, // Profondeur de l'effet
            modifier: 1,
            slideShadows: false,
        },
        autoplay: {
            delay: 2000,
        }
    });
});

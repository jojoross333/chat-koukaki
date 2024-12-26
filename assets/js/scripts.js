// APPARITION DES TITRES INTERSECTION_______________________________________________________________

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        entry.target.classList.toggle('visible', entry.isIntersecting);
    });
}, { threshold: 0.1 });

document.querySelectorAll('.appear').forEach(element => {
    observer.observe(element);
});


// INITIALISATION DE SWIPER CARROUSEL COVERFLOW_______________________________________________________

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
    swiper.slideTo(0);
});

// JS DU PARRALAX DES NUAGES _________________________________________________________________________

const placeSection = document.getElementById("place");
const bigCloud = placeSection.querySelector(".big_cloud");
const littleCloud = placeSection.querySelector(".little_cloud");

window.addEventListener("scroll", () => {
  const scroll = window.scrollY;
  const maxXOffset = 300; // Réglage de la valeur maximale de déplacement horizontal

  const posX = maxXOffset - scroll / 5; // Division pour ajuster la vitesse du défilement

  bigCloud.style.transform = `translateX(${posX}px)`;
  littleCloud.style.transform = `translateX(${posX}px)`;
});

// FONTIONNALITÉ POUR LE MENU BURGER __________________________________________________________

(function($) {
    $(".burger-open").on("click", function () {
        console.log("burger-trigger cliqué");
        $(".burger-content, .burger-icon").toggleClass("open close");
    });

    $(".menu-items a").on("click", function () {
        $(".burger-content, .burger-icon").removeClass("open close");
    });
})(jQuery);



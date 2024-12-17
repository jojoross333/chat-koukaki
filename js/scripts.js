// APPARITION DES TITRES INTERSECTION
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        entry.target.classList.toggle('visible', entry.isIntersecting);
    });
}, { threshold: 0.1 });

document.querySelectorAll('.appear').forEach(element => {
    observer.observe(element);
});

document.addEventListener('DOMContentLoaded', function() {
    const carrousel = document.querySelector('.carrousel');
    const items = document.querySelectorAll('.carrousel__item');
    const prevButton = document.querySelector('.carrousel__prev');
    const nextButton = document.querySelector('.carrousel__next');
    let currentIndex = 0;

    // Fonction pour mettre à jour la position du carrousel
    function updateCarrousel() {
        const newTransform = -currentIndex * 100; // Déplace le carrousel en pourcentage
        carrousel.style.transform = `translateX(${newTransform}%)`;
    }

    // Flèche précédente
    prevButton.addEventListener('click', function() {
        currentIndex = (currentIndex === 0) ? items.length - 1 : currentIndex - 1;
        updateCarrousel();
    });

    // Flèche suivante
    nextButton.addEventListener('click', function() {
        currentIndex = (currentIndex === items.length - 1) ? 0 : currentIndex + 1;
        updateCarrousel();
    });
});
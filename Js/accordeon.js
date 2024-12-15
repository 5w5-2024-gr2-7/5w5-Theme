// Pour le bouton défillement des profs
document.addEventListener('DOMContentLoaded', () => {
    const accordions = document.querySelectorAll('.accordion');

    accordions.forEach((accordion) => {
        const toggleButton = accordion.querySelector('.accordion-toggle');
        const content = accordion.querySelector('.accordion-content');

        const toggleAccordion = () => {
            const isOpen = content.classList.contains('open');

            if (isOpen) {
                // Fermer l'accordéon
                content.style.maxHeight = null;
                content.classList.remove('open');
                toggleButton.textContent = 'Voir plus'; // Revenir à "Voir plus"
            } else {
                // Ouvrir l'accordéon
                content.style.maxHeight = content.scrollHeight + "px";
                content.classList.add('open');
                toggleButton.textContent = 'Voir moins'; // Passer à "Voir moins"
            }
        };

        toggleButton.addEventListener('click', (event) => {
            event.preventDefault();
            toggleAccordion();
        });

        // Optional: Handle touch events
        toggleButton.addEventListener('touchstart', (event) => {
            event.preventDefault();
            toggleAccordion();
        });
    });
});

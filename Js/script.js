document.addEventListener("DOMContentLoaded", function () {
    const lines = document.querySelectorAll('.line');

    function handleScroll() {
        const svg = document.getElementById('corner-shape');
        const svgPosition = svg.getBoundingClientRect().top;
        const screenHeight = window.innerHeight;

        if (svgPosition < screenHeight / 2) {
            lines.forEach(line => {
                line.classList.remove('inactive');
                line.classList.add('active');
            });

            anime({
                targets: '.line.active',
                strokeDashoffset: [anime.setDashoffset, 0],
                easing: 'easeInOutSine',
                duration: 2500,
                loop: false,
            });

            window.removeEventListener('scroll', handleScroll);
        }
    }

    window.addEventListener('scroll', handleScroll);
});

document.addEventListener('DOMContentLoaded', () => {
    const checkbox = document.getElementById('check');
    const body = document.body;
    const backButton = document.querySelector('.bouton-retour');

    // SI le bouton du menu est coché, on arrête le défilement et cache le bouton retour
    checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
            body.classList.add('no-scroll');  // Retire le scrolling
            backButton.style.display = 'none';  // Cache le bouton retour
        } else {
            body.classList.remove('no-scroll');  // Active le scrolling
            backButton.style.display = 'inline-flex';  // Affiche le bouton retour
        }
    });
});

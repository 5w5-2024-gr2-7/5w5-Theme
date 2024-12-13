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
    const homeButton = document.querySelector('.logo-tim-h');

    console.log('Back Button:', backButton);
    console.log('Home Button:', homeButton);

    checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
            body.classList.add('no-scroll');
            
            if (backButton) {
                backButton.style.setProperty('display', 'none', 'important');
            }

            if (homeButton) {
                homeButton.style.setProperty('display', 'none', 'important');
            }
        } else {
            body.classList.remove('no-scroll');
            
            if (backButton) {
                backButton.style.setProperty('display', 'inline-flex', 'important');
            }

            if (homeButton) {
                homeButton.style.setProperty('display', 'flex', 'important');
            }
        }
    });
});

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

            // Trigger the animation
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

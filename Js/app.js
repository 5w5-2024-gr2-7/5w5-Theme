document.addEventListener('DOMContentLoaded', () => {
  const stickySections = [...document.querySelectorAll('.sticky')];
  console.log(stickySections);
  
  const images = [
    '<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/jeu.jpg',
    '<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/web.jpg',
    '<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/conceptionGraphique.jpg',
    '<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/3D.jpg',
    '<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/project.jpg'
  ];

  images.forEach(img => {
    stickySections.forEach(section => {
      let imageDiv = document.createElement('div');
      imageDiv.className = 'bouton-image';
      imageDiv.style.backgroundImage = `url(${img})`;
      section.querySelector('.scroll_section').appendChild(imageDiv);
    });
  });

  window.addEventListener('scroll', (e) => {
    stickySections.forEach(section => {
      transform(section);
    });
  });

  function transform(section) {
    const offsetTop = section.parentElement.offsetTop;
    const scrollSection = section.querySelector('.scroll_section');
    const maxScrollWidth = scrollSection.scrollWidth - window.innerWidth;
    let scrollY = window.scrollY - offsetTop;

    if (scrollY >= 0 && scrollY <= window.innerHeight) {
      let percentage = (scrollY / window.innerHeight) * 100;
      percentage = Math.max(0, Math.min(100, percentage));
      let translateX = -(percentage * maxScrollWidth / 100);
      scrollSection.style.transform = `translate3d(${translateX}px, 0, 0)`;

      document.documentElement.style.overflow = 'hidden'; // Block vertical scroll
      window.scrollTo(0, offsetTop); // Fix vertical scroll position
    } else {
      document.documentElement.style.overflow = 'auto'; // Allow vertical scroll outside section
    }
  }
});

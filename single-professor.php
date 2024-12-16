<?php get_header(); ?>
 
<?php
$content = get_the_content(); // Récupère tout le contenu
$sentences = preg_split('/(\.|\!|\?)(\s)/', $content, 5, PREG_SPLIT_DELIM_CAPTURE); // Divise en phrases avec délimiteurs
 
// Construction des parties : les trois premières phrases et le reste
$intro_content = $sentences[0] . $sentences[1] . $sentences[2] . $sentences[3] . $sentences[4];
$full_content = implode('', array_slice($sentences, 5)); // Le reste du contenu
?>
 
 
 
<div class="profile-container">
            <!-- Bouton retour pour venir mobile -->
            <button class="bouton-retour" onclick="window.history.back()">
        <svg class="svg-bouton-retour" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM215 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L392 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-214.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L103 273c-9.4-9.4-9.4-24.6 0-33.9L215 127z"/></svg>
        </button>
    <div class="teacher-photo">
        <?php
        $teacher_photo_mobile = get_field('teacher_photo_mobile');
        $teacher_photo_desktop = get_field('teacher_photo_desktop');
        if ($teacher_photo_mobile || $teacher_photo_desktop): ?>
            <picture>
                <?php if ($teacher_photo_mobile): ?>
                    <source media="(max-width: 600px)" srcset="<?php echo esc_url($teacher_photo_mobile['url']); ?>">
                <?php endif; ?>
                <?php if ($teacher_photo_desktop): ?>
                    <source media="(min-width: 601px)" srcset="<?php echo esc_url($teacher_photo_desktop['url']); ?>">
                <?php endif; ?>
                <img src="<?php echo esc_url($teacher_photo_desktop ? $teacher_photo_desktop['url'] : $teacher_photo_mobile['url']); ?>" alt="<?php the_title(); ?>">
            </picture>
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/default-photo.jpg" alt="<?php the_title(); ?>">
        <?php endif; ?>
    </div>
    <div class="teacher-info">
        <h2><?php the_title(); ?></h2>
        <div class="teacher-buttons">
            <button>Jeux-video</button>
            <button>Web</button>
        </div>
        <div class="accordion">
    <p class="accordion-intro"><?php echo $intro_content; ?></p>
    <div class="accordion-content">
        <p><?php echo $full_content; ?></p>
    </div>
    <button class="accordion-toggle">Voir plus</button>
</div>
 
    </div>
</div>
<?php get_footer(); ?>
 
<script>
document.addEventListener('DOMContentLoaded', () => {
    const accordions = document.querySelectorAll('.accordion');

    const isMobile = window.innerWidth <= 768;

    accordions.forEach((accordion) => {
        const toggleButton = accordion.querySelector('.accordion-toggle');
        const content = accordion.querySelector('.accordion-content');

        const toggleAccordion = () => {
            const isOpen = content.classList.contains('open');

            if (isOpen) {
                content.style.maxHeight = null;
                content.classList.remove('open');
                toggleButton.textContent = 'Voir plus';
            } else {
                if (isMobile) {
                    content.style.maxHeight = '768px';
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                }
                content.classList.add('open');
                toggleButton.textContent = 'Voir moins';
            }
        };

        toggleButton.addEventListener('click', toggleAccordion);
        toggleButton.addEventListener('touchstart', toggleAccordion, { passive: true });
    });
});
</script>
 
 
 
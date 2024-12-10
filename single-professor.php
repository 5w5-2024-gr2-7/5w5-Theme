<?php get_header(); ?>

<?php
$content = get_the_content(); // Récupère tout le contenu
$sentences = preg_split('/(\.|\!|\?)(\s)/', $content, 5, PREG_SPLIT_DELIM_CAPTURE); // Divise en phrases avec délimiteurs

// Construction des parties : les trois premières phrases et le reste
$intro_content = $sentences[0] . $sentences[1] . $sentences[2] . $sentences[3] . $sentences[4];
$full_content = implode('', array_slice($sentences, 5)); // Le reste du contenu
?>



<div class="profile-container">
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

    accordions.forEach((accordion) => {
        const toggleButton = accordion.querySelector('.accordion-toggle');
        const content = accordion.querySelector('.accordion-content');

        toggleButton.addEventListener('click', () => {
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
        });
    });
});
</script>


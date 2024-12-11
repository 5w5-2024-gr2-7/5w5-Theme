<?php get_header(); ?>
        <!-- Bouton retour pour venir mobile -->
        <button class="bouton-retour" onclick="window.history.back()">
        <svg class="svg-bouton-retour" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM215 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L392 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-214.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L103 273c-9.4-9.4-9.4-24.6 0-33.9L215 127z"/></svg>
        </button>
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
        <p><?php the_content(); ?></p>
    </div>
</div>
<?php get_footer(); ?>

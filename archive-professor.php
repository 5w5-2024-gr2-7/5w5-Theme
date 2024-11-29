<?php get_header(); ?>

<main>
    <h1>Professeurs</h1>
    <div class="professor-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="professor-card">
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <?php
                        $teacher_photo_desktop = get_field('teacher_photo_desktop');
                        if ($teacher_photo_desktop): ?>
                            <img src="<?php echo esc_url($teacher_photo_desktop['url']); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" alt="Default Image">
                        <?php endif; ?>
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>" class="button-link">En savoir plus</a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun professeur trouvé.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
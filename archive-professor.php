<?php get_header(); ?>
 
<main>
    <div class="logo-tim-h">
        <a href="<?php echo esc_url(home_url('/')); ?>">TIM</a>
    </div>
    <h1 class="h1_prof">Nos professeurs</h1>
    <div class="professor-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="professor-card">
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        </a>
                    <?php else : ?>
                        <?php
                        $teacher_photo_desktop = get_field('teacher_photo_desktop');
                        if ($teacher_photo_desktop): ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($teacher_photo_desktop['url']); ?>" alt="<?php the_title(); ?>">
                            </a>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" alt="Default Image">
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                    <button class="button-link"><a href="<?php the_permalink(); ?>">En savoir plus...</a></button>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun professeur trouvé.</p>
        <?php endif; ?>
    </div>
</main>
 
<?php get_footer(); ?>
 
 
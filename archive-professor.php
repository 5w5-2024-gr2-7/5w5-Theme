<?php get_header(); ?>

<main>
    <h1><?php post_type_archive_title(); ?></h1>
    <div class="professor-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="professor-card">
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" alt="Default Image">
                    <?php endif; ?>
                    <button><a href="<?php the_permalink(); ?>">En savoir plus</a></button>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun professeur trouvé.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

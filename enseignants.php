<?php
/* Template Name: Enseignants */

get_header(); ?>

<main>
    <h1>Les Profs du TIM</h1>
    <div class="professor-container">
        <?php
        // Query to get all professors
        $query = new WP_Query(array(
            'post_type' => 'professor', // Your custom post type
            'posts_per_page' => -1 // Fetch all professors
        ));

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="professor-card">
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" alt="Default Image"> <!-- Fallback image -->
                    <?php endif; ?>
                    <button><a href="<?php the_permalink(); ?>">En savoir plus</a></button>
                </div>
            <?php endwhile;
            wp_reset_postdata(); // Reset the post data
        else : ?>
            <p>Aucun professeur trouvé.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main class="resultats-recherche">
    <h1>Résultats de recherche pour : <?php echo get_search_query(); ?></h1>

    <?php if (have_posts()) : ?>
        <div class="resultats-container">
            <?php while (have_posts()) : the_post(); ?>
                <div class="resultat-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="resultat-thumbnail small-thumbnail">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="resultat-extrait">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="description-recherche">
                        <?php 
                            $course_description = get_field('course_description');
                            if ($course_description) {
                                echo wp_trim_words($course_description, 20, '...');
                            } else {
                                echo wp_trim_words(get_field('description'), 20, '...');
                            }
                        ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>Aucun résultat trouvé pour "<?php echo get_search_query(); ?>".</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

<?php get_header(); ?>

<main class="search-results">
    <h1>Search Results for: <?php echo get_search_query(); ?></h1>

    <div class="search-results-list">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="search-result">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="result-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                    <?php endif; ?>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile; ?>

            <div class="pagination">
                <?php 
                    echo paginate_links( array(
                        'prev_text' => 'Previous',
                        'next_text' => 'Next',
                    ) );
                ?>
            </div>

        <?php else : ?>
            <p>Aucuns résultats trouvés pour : <?php echo get_search_query(); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
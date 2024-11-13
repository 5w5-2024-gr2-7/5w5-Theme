<?php get_header(); ?>

<main class="galerie-projets">
    <h1><?php post_type_archive_title(); ?></h1>
    
    <!-- Custom Dropdown Filter -->
    <div class="header-item">
        <div class="volet-dropdown">
            <span>Volet:</span>
            <select id="categoryFilter">
                <option value="">Tous</option>
                <option value="web">Web</option>
                <option value="jeux">Jeux</option>
                <option value="video">Vidéo</option>
                <option value="design">Design</option>
            </select>
        </div>
    </div>

    <div class="projets">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="projet" data-category="<?php echo get_field('category_slug'); ?>">
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" alt="Default Image">
                    <?php endif; ?>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="button-link">Learn More</a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No projects found.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
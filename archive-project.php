<?php get_header(); ?>

<main class="galerie-projets">
    <h1>Projets</h1>
    
    <div class="header-item">
        <div class="volet-dropdown">
            <span>Volet:</span>
            <select id="categoryFilter">
                <option value="" <?php echo (isset($_GET['category']) && $_GET['category'] == '') ? 'selected' : ''; ?>>Tous</option>
                <option value="web" <?php echo (isset($_GET['category']) && $_GET['category'] == 'web') ? 'selected' : ''; ?>>Web</option>
                <option value="jeux" <?php echo (isset($_GET['category']) && $_GET['category'] == 'jeux') ? 'selected' : ''; ?>>Jeux</option>
                <option value="vidéo" <?php echo (isset($_GET['category']) && $_GET['category'] == 'vidéo') ? 'selected' : ''; ?>>Vidéo</option>
                <option value="design" <?php echo (isset($_GET['category']) && $_GET['category'] == 'design') ? 'selected' : ''; ?>>Design</option>
                <option value="autre" <?php echo (isset($_GET['category']) && $_GET['category'] == 'autre') ? 'selected' : ''; ?>>Autre</option>
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
                    <a href="<?php the_permalink(); ?>" class="button-link">En savoir plus...</a>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No projects found.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

<script>
    document.getElementById('categoryFilter').addEventListener('change', function() {
        let category = this.value;
        let url = new URL(window.location.href);
        if (category) {
            url.searchParams.set('category', category);
        } else {
            url.searchParams.delete('category');
        }
        window.location.href = url.toString();
    });
</script>
<?php get_header(); ?>

<main class="galerie-projets">
    <h1>Projets</h1>

    <div class="header-item">
        <div class="volet-dropdown">
            <span>Volet:</span>
            <select id="categoryFilter">
                <option value="">Tous</option>
                <option value="web">Web</option>
                <option value="jeu">Jeu</option>
                <option value="vidéo">Vidéo</option>
                <option value="design">Design</option>
                <option value="autre">Autre</option>
            </select>
        </div>
    </div>

    <div class="projets" id="projectsContainer">
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
            <p>Aucun projets trouvés</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

<script type="text/javascript">
    var projectFilterData = {
        ajax_url: '<?php echo admin_url( 'admin-ajax.php' ); ?>'
    };

    jQuery(document).ready(function($) {
        $('#categoryFilter').on('change', function() {
            let category = $(this).val();
            $.ajax({
                url: projectFilterData.ajax_url,
                type: 'POST',
                data: {
                    action: 'filter_projects',
                    category: category
                },
                success: function(response) {
                    $('#projectsContainer').html(response);
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        });
    });
</script>

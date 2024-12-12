<?php get_header(); ?>
<div class="logo-tim-h">
        <a href="<?php echo esc_url(home_url('/')); ?>">TIM</a>
    </div>
<main class="galerie-projets">
    <h1>Galerie de projets</h1>

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
        <div class="projets-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="projet" data-category="<?php echo get_field('category'); ?>"> <!-- Adjusted to the actual ACF field name -->
                    <h2><?php the_title(); ?></h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('Large'); ?>" alt="<?php the_title(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.png" alt="Default Image">
                    <?php endif; ?>
                    <p><?php the_excerpt(); ?></p>
                    <button class="button-link"><a href="<?php the_permalink(); ?>">En savoir plus...</a></button>
                    </div>
                
            <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun projets trouvés</p>
        <?php endif; ?>
        </div>
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
            $(window).trigger('resize');
        },
        error: function(error) {
            console.log('Error:', error);
        }
    });
});
    });
</script>
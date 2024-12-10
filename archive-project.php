<?php get_header(); ?>

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
                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
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

<script>
document.addEventListener('DOMContentLoaded', () => {
    const accordions = document.querySelectorAll('.accordion');

    accordions.forEach((accordion) => {
        const header = accordion.querySelector('.accordion-header');
        const content = accordion.querySelector('.accordion-content');

        header.addEventListener('click', () => {
            const isOpen = content.style.maxHeight;
            if (isOpen) {
                content.style.maxHeight = null; // Fermer
                header.textContent = 'Voir plus';
            } else {
                content.style.maxHeight = content.scrollHeight + "px"; // Ouvrir
                header.textContent = 'Voir moins';
            }
        });
    });
});
</script>
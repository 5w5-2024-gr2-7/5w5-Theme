<?php get_header(); ?>

<main class="page-404">
    <div class="container">
        <h1 class="error-title">404 - Page introuvable</h1>
        <p class="error-message">Oups! La page que vous recherchez n'existe pas ou a été déplacée.</p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/404-illustration.png" alt="Illustration de 404" class="error-image" />

        <div class="error-links">
            <p>Essayez de revenir à l'une des pages principales :</p>
            <ul>
                <li><a href="<?php echo home_url(); ?>">Page d'accueil</a></li>
                <li><a href="<?php echo get_post_type_archive_link('professor'); ?>">Professeurs</a></li>
                <li><a href="<?php echo get_post_type_archive_link('course'); ?>">Cours</a></li>
                <li><a href="<?php echo get_post_type_archive_link('project'); ?>">Projets</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>">Contactez-nous</a></li>
            </ul>
        </div>
    </div>
</main>

<?php get_footer(); ?>
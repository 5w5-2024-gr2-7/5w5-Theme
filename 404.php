<?php get_header(); ?>

<main class="page-404">
    <div class="container">
        <div class="titre-404">
        <h1 class="error-title">Désolé, cette page n'existe pas</h1>
        </div>
        
        <p class="error-message">Oups! La page que vous recherchez n'existe pas ou a été déplacée. Retournons sur le bon chemin ensemble voulez-vous.</p>
        <button class="error-boutton"><a href="<?php echo home_url(); ?>">Page d'accueil</a></button>
        <img class="error-img" src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/12/JSEperdu.png" alt="À propos">

        
        <!-- <div class="error-links">
            <p>Essayez de revenir à l'une des pages principales :</p>
            <ul>
                <li><a href="<?php echo home_url(); ?>">Page d'accueil</a></li>
                <li><a href="<?php echo get_post_type_archive_link('professor'); ?>">Professeurs</a></li>
                <li><a href="<?php echo get_post_type_archive_link('course'); ?>">Cours</a></li>
                <li><a href="<?php echo get_post_type_archive_link('project'); ?>">Projets</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>">Contactez-nous</a></li>
            </ul>
        </div> -->
    </div>
</main>

<?php get_footer(); ?>
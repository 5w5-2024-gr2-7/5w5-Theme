<?php
get_header();
?>

<div class="projet-single">

        <!-- Bouton retour pour venir mobile -->
        <button class="bouton-retour" onclick="window.history.back()">
        <svg class="svg-bouton-retour" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM215 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L392 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-214.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L103 273c-9.4-9.4-9.4-24.6 0-33.9L215 127z"/></svg>
        </button>

    <!-- Contenu dynamique du projet -->
    <div class="projet-single-information">
        <div class="projet-titres">
            <h1 class="titre-projet"><?php the_title(); ?></h1>
            <h2 class="par-projet">Par : <?php the_field('auteur'); ?></h2>
        </div>

        <div class="description-projet">
            <div class="carrousel-container">
                <div class="carrousel">
                    <?php
                    // Récupérer les images du projet avec SCF
                    $images = [];
                    for ($i = 1; $i <= 5; $i++) {
                        $image = get_field('image_projet' . $i); // Récupérer les champs d'images SCF
                        if ($image) {
                            $images[] = $image;
                        }
                    }

                    // Afficher les images dans le carrousel
                    foreach ($images as $image) : ?>
                        <div class="carrousel__item">
                            <img class="carrousel__image" src="<?php echo esc_url($image); ?>" alt="Image du projet">
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Flèches de navigation -->
                <button class="carrousel__prev">&#10094;</button>
                <button class="carrousel__next">&#10095;</button>
            </div>

            <!-- Autres informations sur le projet -->
            <div class="description-projet2">
                <p class="texte-projet"><?php the_field('description'); ?></p>
                <a class="button-projet" href="<?php the_field('lien_projet'); ?>" target="_blank" rel="noopener noreferrer">Voir le projet</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php
get_header();
?>

<div class="projet-single">
    <!-- Bouton retour pour mobile -->
    <button class="bouton-retour">
        <svg class="svg-bouton-retour" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
        </svg>
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
                <a class="button-link" href="<?php the_field('lien_projet'); ?>" target="_blank" rel="noopener noreferrer">Voir le projet</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

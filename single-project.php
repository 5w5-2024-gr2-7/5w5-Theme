<?php
get_header();
?>

<!----------------------- CONTENU ---------------------->

<div class="projet-single">

    <!-- Bouton retour pour mobile -->
    <button class="bouton-retour">
        <svg class="svg-bouton-retour" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
    </button>

    <!-- reste de la page : Titre-Image_texte -->
    <div class="projet-single-information">
        <div class="projet-titres">
            <!-- Titre dynamique -->
            <h1 class="titre-projet"><?php the_title(); ?></h1>
            <!-- Auteur statique, mais tu peux aussi le rendre dynamique si nécessaire -->
            <h2 class="par-projet">Par : <?php the_field('auteur'); ?></h2>
        </div>

        <div class="description-projet">
            <!-- Image dynamique -->
                <img class="image-projet" src="<?php the_field('image_projet1'); ?>" alt="Image du projet">
            

            <div class="description-projet2">
                <!-- Contenu dynamique -->
                <p class="texte-projet"><?php the_field('description'); ?></p>
                
                

                <!-- Lien dynamique avec SCF -->
                    <a class="button-a" href="<?php the_field('lien_projet'); ?>">
                        <button class="button-projet">Voir le projet</button>
                    </a>
                
            </div>
        </div>        
    </div>
</div>

<!----------------------- FOOTER ---------------------->

<?php
get_footer()
?>
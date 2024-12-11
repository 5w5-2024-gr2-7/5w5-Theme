<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <main class="main-cours-individuel">

        <!-- Bouton retour pour venir mobile -->
        <button class="bouton-retour" onclick="window.history.back()">
        <svg class="svg-bouton-retour" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM215 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L392 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-214.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L103 273c-9.4-9.4-9.4-24.6 0-33.9L215 127z"/></svg>
        </button>

            <!-- Titre du cours/Pastille informations -->
            <div class="partie1-cours-individuel">
                <h1 class="h1-cours-individuel">
                    <?php the_field('course_title'); ?>
                </h1>
                <span class="span-cours-individuel">

                <!-- Dépendament de quel session il s'agit on change la bulle de couleur -->
                <div class="info-session-cours 
                    <?php 
                        $session = get_field('session');
                        if ($session == 'Session 1') {
                            echo 'session-jaune';
                        } elseif ($session == 'Session 2') {
                            echo 'session-bleu';
                        } elseif ($session == 'Session 3') {
                            echo 'session-vert';
                        } elseif ($session == 'Session 4') {
                            echo 'session-rose';
                        } elseif ($session == 'Session 5') {
                            echo 'session-marine';
                        } elseif ($session == 'Session 6') {
                            echo 'session-rouge';
                        } 
                    ?>">
                    <?php echo esc_html($session); ?>
                </div>

                    <!-- Prend l'information de la catégorie -->
                    <div class="info-bulle-cours">
                        <?php the_field('category'); ?>
                    </div>

                    <!-- Si deuxieme categorie on l'affiche sinon Non -->
                    <?php if( get_field('category2') ): ?>
                        <div class="info-bulle-cours">
                            <?php the_field('category2'); ?>
                        </div>
                    <?php endif; ?>
                    
                </span>
            </div>

            <!-- La ligne de séparaion -->
            <div class="ligne-cours"></div>

            <!-- Deuxieme partie / Texte et Logiciel -->
            <div class="information-cours">
                <div class="texte-cours-information">
                    <?php 
                    // Prend la description de ASF et l'affiche
                    $course_description = get_field('course_description');
                    echo $course_description;
                    ?>
                </div>
                
                <!-- aFFICHE l'image du logiciel du cours -->
                <div class="logiciel-info">
                <h2 class="h2-logiciel-info">
    <span class="bold-text">Logiciels utilisés</span> durant ce cours :
</h2>
                    <div class="div-image-logiciel">
                        <img class="image-logiciel-info" src="<?php the_field('software_image'); ?>" alt="">
                        <img class="image-logiciel-info" src="<?php the_field('software_image2'); ?>" alt="">

                    </div>
                </div>
            </div>
        </main>

    <?php endwhile;
endif;

get_footer();
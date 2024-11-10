<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <main class="main-cours-individuel">

            <button class="bouton-retour">
                <svg class="svg-bouton-retour" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/>
                </svg>
            </button>

            <div class="partie1-cours-individuel">
                <h1 class="h1-cours-individuel">
                    <?php the_field('course_title'); ?>
                </h1>
                <span class="span-cours-individuel">
                    <div class="info-session-cours">
                        <?php the_field('session'); ?>
                    </div>
                    <div class="info-bulle-cours">
                        <?php the_field('category'); ?>
                    </div>
                </span>
            </div>

            <div class="ligne-cours"></div>

            <div class="information-cours">
                <div>
                    <h3 class="texte-cours-information">
                        <?php the_field('course_description'); ?>
                    </h3>
                </div>

                <div class="logiciel-info">
                    <h2 class="h2-logiciel-info">
                        Logiciels utilisés durant ce cours :
                    </h2>
                    <img class="image-logiciel-info" src="<?php the_field('software_image'); ?>" alt="">
                </div>
            </div>
        </main>

    <?php endwhile;
endif;

get_footer();
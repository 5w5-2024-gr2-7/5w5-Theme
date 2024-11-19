<?php

/* Template Name: Home */
?>
<?php
get_header();
?>
<div class="OuLa">
    <div class="content-wrapper">
        <h1 class="titre-principale">
            Où la <span class="titre-principale-italique">création</span><br>commencee
        </h1>

        <div>
            
        </div>
    </div>
    <!-- <div class="Swirl">
        <picture>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/Swirl.png" alt="">
        </picture>
    </div> -->
</div>

<div class="APropos">

<svg id="corner-shape" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path class="line inactive" d="M100 -10 Q 70 30 80 50 T 50 110" />
    <path class="line inactive" d="M-10 40 Q 20 50 50 110" />
    <path class="line inactive" d="M50 -10 Q 50 40 -10 40" />
</svg>

    <header>
      <div class="titre-principal">
        <h2>À propos</h2>
      </div>
    </header>

    <div class="contenu-about">
      <div class="image-apropos">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/Apropos.jpg" alt="À propos">
      </div>
      <div class="about-contenu">
        <p>Cette formation de trois ans prépare les étudiants à relever les défis du secteur technologique et créatif en constante évolution...</p>
        <div class="info-additionnel">
          <h3>Conception graphique</h3>
          <h3>Programmation et développement web</h3>
          <h3>Production audiovisuelle</h3>
          <h3>Gestion de projet multimédia</h3>
          <h3>Intégration et optimisation de solutions interactives</h3>
          <h3><?php echo do_shortcode('[compteur_visites]'); ?></h3>
          
        </div>
      </div>
    </div>
  </div>

<!-- <header>
    <div class="titre-principal">Explorez l'innovation <br> numérique*</div>
</header>

<div class="conteneur-boutons">
    <a href="<?php echo get_post_type_archive_link('project'); ?>?category=Jeu" class="bouton" id="jeu">
        <div class="bouton-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/jeu.jpg');"></div>
        <div class="bouton-title">Jeu</div>
    </a>
    <a href="<?php echo get_post_type_archive_link('project'); ?>?category=Web" class="bouton" id="web">
        <div class="bouton-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/web.jpg');"></div>
        <div class="bouton-title">Web</div>
    </a>
    <a href="<?php echo get_post_type_archive_link('project'); ?>?category=Design" class="bouton" id="conception-graphique">
        <div class="bouton-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/conceptionGraphique.jpg');"></div>
        <div class="bouton-title">Conception graphique</div>
    </a>
    <a href="<?php echo get_post_type_archive_link('project'); ?>?category=Vidéo" class="bouton" id="3D">
        <div class="bouton-image" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/3D.jpg');"></div>
        <div class="bouton-title">Montage et vidéo</div>
    </a>
</div> -->

<div class="section-projet">
    <h class="h1-projet">Pour voir nos</h>

        <div class="projet-mot">
                <div class="projet-container">
                    <span class="lettre">P</span>
                    <div class="projet-titre">Projet 1</div>
                </div>
                <div class="projet-container">
                    <span class="lettre">R</span>
                    <div class="projet-titre">Projet 2</div>
                </div>
                <div class="projet-container lettreO">
                    <span class="lettre">O</span>
                    <div class="projet-titre">Projet 3</div>
                </div>
                <div class="projet-container">
                    <span class="lettre">J</span>
                    <div class="projet-titre">Projet 4</div>
                </div>
                <div class="projet-container">
                    <span class="lettre">E</span>
                    <div class="projet-titre">Projet 5</div>
                </div>
                <div class="projet-container">
                    <span class="lettre">T</span>
                    <div class="projet-titre">Projet 6</div>
                </div>
                <div class="projet-container">
                    <span class="lettre">S</span>
                    <div class="projet-titre">Projet 7</div>
                </div>
            </div>
            </div>



<header>
    <div class="titre-principal">Nos professeurs</div>
</header>

<div class="contenu">
    <div class="card__contenu">
        <article class="card__article">
            <div class="card__img" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lesSectionDeTipeDeCourWEB.png');"></div>

            <div class="card__data">
                <h2 class="card__title">Web</h2>
                <a href="<?php echo get_post_type_archive_link('professor'); ?>?category=Web" class="card__bouton">Voir les professeurs de web</a>
            </div>
        </article>

        <article class="card__article">
            <div class="card__img" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lesSectionDeTipeDeCourJEUX.png');"></div>

            <div class="card__data">
                <h2 class="card__title">Jeu</h2>
                <a href="<?php echo get_post_type_archive_link('professor'); ?>?category=Jeu" class="card__bouton">Voir les professeurs de jeu</a>
            </div>
        </article>

        <article class="card__article">
            <div class="card__img" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lesSectionDeTipeDeCourVIDEO.png')"></div>

            <div class="card__data">
                <h2 class="card__title">Montage et vidéo</h2>
                <a href="<?php echo get_post_type_archive_link('professor'); ?>?category=Vidéo" class="card__bouton">Voir les professeurs de montage et vidéo</a>
            </div>
        </article>

        <article class="card__article">
            <div class="card__img" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lesSectionDeTipeDeCourDESIGN.png')"></div>

            <div class="card__data">
                <h2 class="card__title">Conception Graphique</h2>
                <a href="<?php echo get_post_type_archive_link('professor'); ?>?category=Design" class="card__bouton">Voir les professeurs de Design</a>
            </div>
        </article>
    </div>
</div>

<?php
get_footer();
?>
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

    <style>
       
.h1-projet{
  text-align: left;
    width: 100%;
    display: block;
    color: white;
    padding: 1rem 1rem;
    font-family: "garamond-premier-pro-subhead", serif;
    font-weight: 400;
    font-style: normal;
    font-size: clamp(3.125rem, 2.031rem + 5vw, 4.063rem);
}



.projet-mot{
  display: flex;
  flex-direction: column;
  align-items: center; 
  font-family: 'FontGreycliffBold';
  color: white;
}

.projet-container {
  position: relative;
  display: flex;
  flex: 1; 
  justify-content: flex-start;
  padding-left: 1rem;
  align-items: center; 
  transition: flex 0.3s ease;
  overflow: hidden;
  height: 100%; 
  z-index: 1; 
  width: 100%;
}


.lettre {
  font-size: clamp(5.313rem, 3.854rem + 6.667vw, 6.563rem);
  font-weight: bold;
  transition: transform 0.3s ease, background-color 0.3s ease; !important;
  display: inline-block;
  cursor: pointer;
  background-color: transparent;
  padding: 0;
  border-radius: 5px;
  text-align: center;
  z-index: 2; 
  margin: -.5rem;
}

.projet-container:hover {
  flex: 2;
}

.projet-container:hover::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  z-index: 1;
  transition: background-image 0.3s ease;
  display: block;
}

.projet-container:nth-child(1){ 
background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lettreQuiManque2.png');
  background-size: cover;
}

.projet-container:nth-child(2){ 
background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lettreProjetV2_1.png');
  background-size: cover;
}

.projet-container:nth-child(3){ 
    background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lettreProjetV2_2.png');
  background-size: cover;
}

.projet-container:nth-child(4){ 
background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lettreProjetV2_4.png');
  background-size: cover;
}

.projet-container:nth-child(5){ 
    background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lettreProjetV2_5.png');
  background-size: cover;
}

.projet-container:nth-child(6){ 
    background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lettreProjetV2_3.png');
  background-size: cover;
}

.projet-container:nth-child(7){ 
    background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lettreProjetV2_8.png');
  background-size: cover;
}


.projet-titre {
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  background-color: #333;
  color: white;
  padding: 10px;
  border-radius: 5px;
  white-space: nowrap;
  opacity: 0;
  transition: opacity 0.3s ease, transform 0.3s ease;
  transform: translateY(10px);
}



@media screen and (min-width: 650px){
  
  .h1-projet{
    font-size: clamp(4.063rem, 2.855rem + 2.973vw, 7.5rem);
    text-align: center;
  }


.projet-mot {
  flex-direction: row;
  justify-content: space-between;
  width: 90vw; 
  position: relative;
  height: 20rem;
  width: 100%;

}



.projet-container {
  position: relative;
  display: flex;
  flex: 1; 
  justify-content: center;
  align-items: center; 
  transition: flex 0.3s ease;
  overflow: hidden;
  height: 100%; 
  z-index: 1; 
  width: 100%;
}

.projet-container:nth-child(1){ 
  background-image: none
}

.lettre {
  font-size: clamp(4.688rem, 1.394rem + 8.108vw, 14.063rem);
  font-weight: bold;
  transition: transform 0.3s ease, background-color 0.3s ease;
  display: inline-block;
  cursor: pointer;
  background-color: transparent;
  padding: 0;
  border-radius: 5px;
  text-align: center;
  z-index: 2; 
  margin: -.5rem;
}



.projet-container:nth-child(1),
.projet-container:nth-child(2),
.projet-container:nth-child(3),
.projet-container:nth-child(4),
.projet-container:nth-child(5),
.projet-container:nth-child(6),
.projet-container:nth-child(7){ 
  background-image: none;
}


.projet-container:nth-child(1):hover::before { 
background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lettreQuiManque1.png');
}

.projet-container:nth-child(2):hover::before { 
    background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/ProjetLettre1.png');
}

.projet-container:nth-child(3):hover::before { 
    background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/ProjetLettre2.png');
}

.projet-container:nth-child(4):hover::before { 
background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/ProjetLettre3.png');
}

.projet-container:nth-child(5):hover::before { 
background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/ProjetLettre4.png');
}

.projet-container:nth-child(6):hover::before { 
background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/ProjetLettre5.png');
}

.projet-container:nth-child(7):hover::before { 
background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/ProjetLettre7.png');
}


.projet-container:hover .lettre {
  transform: scaleX(2);
  color: white; /* La couleur de la lettre devient blanche */
}

// Ajustement lettre O
.projet-titre:hover .lettreO {
  transform: scaleX(1.5); 
  color: white;
  z-index: 10;
}


.projet-container:hover .projet-titre {
  opacity: 1;
  transform: translateY(0);
}
}

@media screen and (min-width: 650px){
  .projet-mot{
    height: 40rem;
  }
}
        
    </style>
    <div class="section-projet">
        <h class="h1-projet">Pour voir nos</h>
        <div class="projet-mot">
        <div class="projet-container">
        <span class="lettre" onclick="window.location.href='<?php echo 'https://gftnth00.mywhc.ca/tim51/projects/achernar/'; ?>'">P</span>
        <div class="projet-titre">Projet 1</div>
                </div>
            <div class="projet-container">
            <span class="lettre" onclick="window.location.href='<?php echo 'https://gftnth00.mywhc.ca/tim51/projects/checo/'; ?>'">R</span>
                <div class="projet-titre">Projet 2</div>
            </div>
            <div class="projet-container">
            <span class="lettre" onclick="window.location.href='<?php echo 'https://gftnth00.mywhc.ca/tim51/projects/spaceship/'; ?>'">O</span>
                <div class="projet-titre">Projet 3</div>
            </div>
            <div class="projet-container">
            <span class="lettre" onclick="window.location.href='<?php echo 'https://gftnth00.mywhc.ca/tim51/projects/jai-envie-de-chier/'; ?>'">J</span>
                <div class="projet-titre">Projet 4</div>
            </div>
            <div class="projet-container">
            <span class="lettre" onclick="window.location.href='<?php echo 'https://gftnth00.mywhc.ca/tim51/projects/vengeance-et-vertu/'; ?>'">E</span>
                <div class="projet-titre">Projet 5</div>
            </div>
            <div class="projet-container">
            <span class="lettre" onclick="window.location.href='<?php echo 'https://gftnth00.mywhc.ca/tim51/projects/triptique/'; ?>'">T</span>
                <div class="projet-titre">Projet 6</div>
            </div>
            <div class="projet-container">
            <span class="lettre" onclick="window.location.href='<?php echo 'https://gftnth00.mywhc.ca/tim51/projects/matinou-bg/'; ?>'">S</span>
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
            <div class="card__img" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lesSectionDeTipeDeCourWEBEssaie3.png');"></div>

            <div class="card__data">
                <h2 class="card__title">Web</h2>
                <a href="<?php echo get_post_type_archive_link('professor'); ?>?category=Web" class="card__bouton">Voir les professeurs de web</a>
            </div>
        </article>

        <article class="card__article">
            <div class="card__img" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lesSectionDeTipeDeCourJEUX2.png');"></div>

            <div class="card__data">
                <h2 class="card__title">Jeu</h2>
                <a href="<?php echo get_post_type_archive_link('professor'); ?>?category=Jeu" class="card__bouton">Voir les professeurs de jeu</a>
            </div>
        </article>

        <article class="card__article">
            <div class="card__img" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2024/11/lesSectionDeTipeDeCourVIDEO2.png')"></div>

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
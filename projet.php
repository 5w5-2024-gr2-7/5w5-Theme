<?php
/* model de base */ ?>
<?php get_header() ?>

<section class="galerie-projets">
        <h1>Galerie de projets</h1>
        <div class="volet-dropdown">
            <span>volet</span>
            <select>
                <option value="web">Web</option>
                <option value="jeux">Jeux</option>
                <option value="graphisme">Graphisme</option>
            </select>
        </div>
    
        <div class="projets">
            <a href="exemple-projet.html">
                <div class="projet">
                    <img src="images/conceptionGraphique.jpg" alt="Projet 1">
                    <p>Nom du Projet 1</p>
                </div>
            </a>
            <a href="">
                <div class="projet">
                    <img src="images/Apropos.jpg" alt="Projet 2">
                    <p>Nom du Projet 2</p>
                </div>
            </a>
            <a href="">
                <div class="projet">
                    <img src="images/3D.jpg" alt="Projet 3">
                    <p>Nom du Projet 3</p>
                </div>
            </a>
        </div>
    </section>

    <?php
get_footer();
?>
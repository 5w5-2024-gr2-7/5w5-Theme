<?php get_header(); ?>

<main>
    <section class="stages-section">
        <h1>Les stages</h1>

        <div class="filtration-stage">
            <div class="stage-type">
                <div class="volet-dropdown">
                    <span>Type</span>
                    <select>
                        <option value="web">Design</option>
                        <option value="jeux">Jeux</option>
                        <option value="graphisme">Web</option>
                        <option value="graphisme">Vidéo</option>
                    </select>
                </div>
            </div>
            <div class="stage-company">
                <div class="volet-dropdown">
                    <span>Compagnie</span>
                    <select>
                        <option value="ubisoft">Ubisoft</option>
                        <option value="bombardier">Bombardier</option>
                        <option value="uptimum">Groupe Uptimum</option>
                        <option value="repentigny">Ville de Repentigny</option>
                        <option value="ubisoft2">Ubisoft 2</option>
                        <option value="indexdesign">Index-Design</option>
                        <option value="princecharles">Prince Charles</option>
                        <option value="sinep">Sinep</option>
                        <option value="lipari">Lipari design</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="stage-details">
            <h1>Ubisoft</h1>

            <div class="description-stage">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Apropos.jpg" alt="Logo Ubisoft">
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
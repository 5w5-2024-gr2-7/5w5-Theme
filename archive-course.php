<?php get_header(); ?>


<section class="cours-section">
        <div class="header">
            <div class="header-item">
                <div class="volet-dropdown">
                    <span>Session</span>
                    <select>
                        <option value="web">Première</option>
                        <option value="jeux">Deuxième</option>
                        <option value="graphisme">Troisième</option>
                        <option value="graphisme">Quatrième</option>
                        <option value="graphisme">Cinquième</option>
                        <option value="graphisme">Sixième</option>
                    </select>
                </div>
            </div>
            <div class="header-item">
                <div class="volet-dropdown">
                    <span>Volet</span>
                    <select>
                        <option value="web">Web</option>
                        <option value="jeux">Jeux</option>
                        <option value="graphisme">Vidéo</option>
                        <option value="graphisme">Design</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="course-container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="course-box">
                        <h3><?php the_title(); ?></h3>
                        <div class="course-info">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                            <div class="course-oval"><?php the_field('session'); ?></div>
                            <div class="course-oval"><?php the_field('category'); ?></div> <!-- ACF field -->
                            <button class="course-button">
                                <a href="<?php the_permalink(); ?>">➔</a>
                            </button>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Aucun cours trouvé.</p>
            <?php endif; ?>
        </div>
    </section>


<?php get_footer(); ?>
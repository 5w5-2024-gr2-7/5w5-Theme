<?php get_header(); ?>

<section class="cours-section">
    <div class="header">
        <div class="header-item">
            <div class="volet-dropdown">
                <span>Session</span>
                <select id="session-filter">
                    <option value="">Tous</option>
                    <option value="Session 1" <?php echo (isset($_GET['session']) && $_GET['session'] == 'Session 1') ? 'selected' : ''; ?>>Session 1</option>
                    <option value="Session 2" <?php echo (isset($_GET['session']) && $_GET['session'] == 'Session 2') ? 'selected' : ''; ?>>Session 2</option>
                    <option value="Session 3" <?php echo (isset($_GET['session']) && $_GET['session'] == 'Session 3') ? 'selected' : ''; ?>>Session 3</option>
                    <option value="Session 4" <?php echo (isset($_GET['session']) && $_GET['session'] == 'Session 4') ? 'selected' : ''; ?>>Session 4</option>
                    <option value="Session 5" <?php echo (isset($_GET['session']) && $_GET['session'] == 'Session 5') ? 'selected' : ''; ?>>Session 5</option>
                    <option value="Session 6" <?php echo (isset($_GET['session']) && $_GET['session'] == 'Session 6') ? 'selected' : ''; ?>>Session 6</option>
                </select>
            </div>
        </div>
        <div class="header-item">
            <div class="volet-dropdown">
                <span>Volet</span>
                <select id="volet-filter">
                    <option value="">Tous</option>
                    <option value="Web" <?php echo (isset($_GET['volet']) && $_GET['volet'] == 'Web') ? 'selected' : ''; ?>>Web</option>
                    <option value="Jeux" <?php echo (isset($_GET['volet']) && $_GET['volet'] == 'Jeux') ? 'selected' : ''; ?>>Jeux</option>
                    <option value="Vidéo" <?php echo (isset($_GET['volet']) && $_GET['volet'] == 'Vidéo') ? 'selected' : ''; ?>>Vidéo</option>
                    <option value="Design" <?php echo (isset($_GET['volet']) && $_GET['volet'] == 'Design') ? 'selected' : ''; ?>>Design</option>
                    <option value="Design" <?php echo (isset($_GET['volet']) && $_GET['volet'] == 'Autre') ? 'selected' : ''; ?>>Autre</option>
                </select>
            </div>
        </div>
    </div>

    <div class="course-container">
        <?php 
        $args = array(
            'post_type' => 'course',
            'posts_per_page' => -1,
        );

        if (isset($_GET['session']) && !empty($_GET['session'])) {
            $args['meta_query'][] = array(
                'key' => 'session',
                'value' => sanitize_text_field($_GET['session']),
                'compare' => '='
            );
        }

        if (isset($_GET['volet']) && !empty($_GET['volet'])) {
            $args['meta_query'][] = array(
                'key' => 'category',
                'value' => sanitize_text_field($_GET['volet']),
                'compare' => '='
            );
        }

        $query = new WP_Query($args);

        if ($query->have_posts()) : 
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="course-box">
                    <h3><?php the_title(); ?></h3>
                    <div class="course-info">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="course-oval"><?php the_field('session'); ?></div>
                        <div class="course-oval"><?php the_field('category'); ?></div>
                        <a href="<?php the_permalink(); ?>" class="course-button">➔</a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>Aucun cours trouvé.</p>
        <?php endif; ?>
    </div>
</section>

<script>
    document.getElementById('session-filter').addEventListener('change', function() {
        let session = this.value;
        let volet = document.getElementById('volet-filter').value;
        let url = new URL(window.location.href);
        if (session) url.searchParams.set('session', session);
        else url.searchParams.delete('session');
        if (volet) url.searchParams.set('volet', volet);
        else url.searchParams.delete('volet');
        window.location.href = url.toString();
    });

    document.getElementById('volet-filter').addEventListener('change', function() {
        let volet = this.value;
        let session = document.getElementById('session-filter').value;
        let url = new URL(window.location.href);
        if (session) url.searchParams.set('session', session);
        else url.searchParams.delete('session');
        if (volet) url.searchParams.set('volet', volet);
        else url.searchParams.delete('volet');
        window.location.href = url.toString();
    });
</script>

<?php get_footer(); ?>
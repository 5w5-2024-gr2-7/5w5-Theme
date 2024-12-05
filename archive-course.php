<?php get_header(); ?>

<section class="cours-section">
    <div class="header-cours">
        <div class="header-item">
            <div class="volet-dropdown">
                <span>Session</span>
                <select id="session-filter">
                    <option value="">Tous</option>
                    <option value="Session 1">Session 1</option>
                    <option value="Session 2">Session 2</option>
                    <option value="Session 3">Session 3</option>
                    <option value="Session 4">Session 4</option>
                    <option value="Session 5">Session 5</option>
                    <option value="Session 6">Session 6</option>
                </select>
            </div>
        </div>
        <div class="header-item">
            <div class="volet-dropdown">
                <span>Catégorie</span>
                <select id="volet-filter">
                    <option value="">Tous</option>
                    <option value="Web">Web</option>
                    <option value="Jeu">Jeu</option>
                    <option value="Vidéo">Vidéo</option>
                    <option value="Design">Design</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
        </div>
    </div>

    <div class="course-container" id="coursesContainer">
        <?php 
            $args = array(
                'post_type' => 'course',
                'posts_per_page' => -1,
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) : 
                while ($query->have_posts()) : $query->the_post();
        ?>
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
        <?php endwhile; ?>
        <?php else : ?>
            <p>Aucun cours trouvé</p>
        <?php endif; ?>
    </div>

    <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                <stop id="stop1" stop-color="rgba(55, 218.58, 248, 0.37)" offset="0%"></stop>
                <stop id="stop2" stop-color="rgba(251, 31, 150.704, 0.34)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path fill="url(#sw-gradient)" d="M18.9,-28.6C23.7,-22.5,26.2,-15.9,30,-8.7C33.8,-1.5,38.9,6.4,37.3,12.3C35.6,18.2,27.3,22.2,20,27.1C12.7,32,6.3,37.9,-0.8,39C-8,40.1,-16,36.6,-20.1,30.6C-24.3,24.7,-24.7,16.4,-24.7,9.6C-24.8,2.8,-24.5,-2.5,-24,-8.9C-23.4,-15.2,-22.6,-22.6,-18.5,-28.9C-14.5,-35.3,-7.2,-40.6,-0.1,-40.4C7,-40.3,14.1,-34.7,18.9,-28.6Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: 0.3s;" stroke="url(#sw-gradient)"></path>
    </svg>
</section>

<?php get_footer(); ?>

<script type="text/javascript">
    var courseFilterData = {
        ajax_url: '<?php echo admin_url( 'admin-ajax.php' ); ?>'
    };

    jQuery(document).ready(function($) {
        $('#session-filter, #volet-filter').on('change', function() {
            var session = $('#session-filter').val();
            var volet = $('#volet-filter').val();

            $.ajax({
                url: courseFilterData.ajax_url,
                type: 'POST',
                data: {
                    action: 'filter_courses',
                    session: session,
                    volet: volet
                },
                success: function(response) {
                    $('#coursesContainer').html(response);
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        });
    });
</script>
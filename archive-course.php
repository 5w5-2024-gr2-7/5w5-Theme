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
                <span>Catégories</span>
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
        'orderby' => 'date',
        'order' => 'ASC',
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
            
            <?php 
                $session = get_field('session'); 
                $session_class = '';
                if ($session == 'Session 1') {
                    $session_class = 'session-jaune';
                } elseif ($session == 'Session 2') {
                    $session_class = 'session-bleu';
                } elseif ($session == 'Session 3') {
                    $session_class = 'session-vert';
                } elseif ($session == 'Session 4') {
                    $session_class = 'session-rose';
                } elseif ($session == 'Session 5') {
                    $session_class = 'session-marine';
                } elseif ($session == 'Session 6') {
                    $session_class = 'session-rouge';
                }
            ?>

            <div class="course-oval <?php echo esc_attr($session_class); ?>">
                <?php echo esc_html($session); ?>
            </div>

            <div class="course-oval">
                <?php the_field('category'); ?>
            </div>
            
            <a href="<?php the_permalink(); ?>" class="course-button">➔</a>
        </div>
    </div>
<?php endwhile; ?>
<?php else : ?>
    <p>Aucun cours trouvé</p>
<?php endif; ?>
</div>
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
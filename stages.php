<?php
/*
Template Name: Stages
*/
get_header();
?>

<main>
    <section class="stages-section">
        <h1>Les stages</h1>
        <div class="stage-list">
            <?php
            $args = array('post_type' => 'stages', 'posts_per_page' => -1);
            $stages_query = new WP_Query($args);
            if ($stages_query->have_posts()) :
                while ($stages_query->have_posts()) : $stages_query->the_post();
            ?>
                    <div class="stage-item">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_field('description'); ?></p>
                        <?php
$logo = get_field('logo_de_lentreprise');
if ($logo) :
?>
    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php the_title(); ?>">
<?php endif; ?>

                    </div>
            <?php
                endwhile;
            else :
                echo '<p>Aucun stage trouvé</p>';
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>

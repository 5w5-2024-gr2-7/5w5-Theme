<?php
get_header();
?>

<main>
    <section class="stages-section">
        <div class="stage-details">
            <h1><?php the_title(); ?></h1>
            <div class="description-stage">
                <div>
                    <p><?php the_field('description'); ?></p>
                </div>
                <?php
                $logo = get_field('logo_de_lentreprise');
                if ($logo) :
                ?>
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
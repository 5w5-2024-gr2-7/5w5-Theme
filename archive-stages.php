<?php
get_header();
?>

<main>
    <section class="stages-section">
        <h1>Les Stages</h1>
        <div class="stage-wrapper">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="stage-company">
                        <div class="stage-title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="stage-content">
                            <?php
                            $logo = get_field('logo_de_lentreprise');
                            if ($logo) :
                            ?>
                                <div class="stage-image">
                                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php the_title(); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="stage-description">
                                <p><?php the_field('description'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Aucun stage trouvé</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
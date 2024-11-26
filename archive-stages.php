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
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php
                        $logo = get_field('logo_de_lentreprise');
                        if ($logo) :
                        ?>
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Aucun stage trouvé</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
<?php
get_header();
?>
<?php
get_header();
?>

<main>
    <section class="single-stage">
        <h1><?php the_title(); ?></h1>
        <div class="stage-content">
            <?php the_content(); ?>
        </div>
        <p><?php the_field('description'); ?></p>
        <?php
        $logo = get_field('logo_de_lentreprise');
        if ($logo) :
        ?>
            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
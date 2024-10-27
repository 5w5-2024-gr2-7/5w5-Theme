<?php
/* Template Name: Individual Professor */
get_header();
?>
<main class="individual-professor-page">
    <div class="professor-wrapper" style="display: flex; align-items: flex-start; gap: 20px;">
        <!-- Teacher Image on the Left -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="professor-image" style="flex: 0 0 30%;">
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" style="max-width: 100%; height: auto;">
            </div>
        <?php endif; ?>

        <!-- Teacher Information on the Right -->
        <div class="professor-info" style="flex: 1; display: flex; flex-direction: column;">

            <!-- Teacher Name -->
            <h1 style="margin-bottom: 10px;"><?php the_title(); ?></h1>

            <!-- Classes Section (To be filled later with SQL integration) -->
            <div class="professor-classes">
                <h2 style="margin-bottom: 5px;">Classes enseignées :</h2>

                <?php 
                // Placeholder: SQL library to fetch classes will be implemented here.
                // Uncomment and modify later when integrating SQL.

                /*
                echo '<ul>';
                foreach ($classes as $class) {
                    echo '<li>' . htmlspecialchars($class['class_name']) . '</li>';
                }
                echo '</ul>';
                */
                ?>

                <p style="font-style: italic;">(Classes will be added soon.)</p> <!-- Temporary message -->
            </div>

            <!-- Teacher Description -->
            <div class="professor-description" style="margin-top: 20px;">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
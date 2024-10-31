<?php get_header(); ?>
<div class="profile-container">
    <div class="teacher-photo">
        <?php
        $teacher_photo_mobile = get_field('teacher_photo_mobile');
        $teacher_photo_desktop = get_field('teacher_photo_desktop');
        if ($teacher_photo_mobile || $teacher_photo_desktop): ?>
            <picture>
                <?php if ($teacher_photo_mobile): ?>
                    <source media="(max-width: 600px)" srcset="<?php echo esc_url($teacher_photo_mobile['url']); ?>">
                <?php endif; ?>
                <?php if ($teacher_photo_desktop): ?>
                    <source media="(min-width: 601px)" srcset="<?php echo esc_url($teacher_photo_desktop['url']); ?>">
                <?php endif; ?>
                <img src="<?php echo esc_url($teacher_photo_desktop ? $teacher_photo_desktop['url'] : $teacher_photo_mobile['url']); ?>" alt="<?php echo esc_attr(get_field('teacher_name')); ?>">
            </picture>
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/default-photo.jpg" alt="Default Teacher Image">
        <?php endif; ?>
    </div>
    <div class="teacher-info">
        <h2><?php echo esc_html(get_field('teacher_name')); ?></h2>
        <div class="teacher-buttons">
            <button>Jeux-video</button>
            <button>Web</button>
        </div>
        <p><?php echo nl2br(esc_html(get_field('teacher_description'))); ?></p>
    </div>
</div>
<?php get_footer(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refonte Tim - Maisonneuve</title>
  
  <?php wp_head(); ?>
</head>
<body>
  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>

  <nav class="header">
    <a href="<?php echo esc_url(home_url('/')); ?>">Maisonneuve</a>
    <div class="nav-droite">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'principal',
            'container' => false,
            'menu_class' => 'nav-links',
        ));
        ?>
    </div>
  </nav>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <script src="<?php echo get_template_directory_uri() . '/js/script.js' ;?>">
</script>
</body>
</html>
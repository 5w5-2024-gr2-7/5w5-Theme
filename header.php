<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refonte Tim - Maisonneuve</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css'; ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>">
  <?php wp_head(); ?>
</head>

<body>
  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>

  <nav class="header">
    <!-- Homepage Link -->
    <a href="<?php echo esc_url(home_url('/')); ?>">Maisonneuve</a>

    <div class="nav-droite">
      <!-- Custom Links -->
      <a href="<?php echo esc_url(home_url('/stages')); ?>">Stages</a>
      <a href="<?php echo esc_url(home_url('/cours')); ?>">Cours</a>
      <a href="<?php echo esc_url(home_url('/professors')); ?>">Professeurs</a> <!-- Updated link -->
      <a href="<?php echo esc_url(home_url('/projets')); ?>">Projets</a>
    </div>
  </nav>
  
  <?php
    wp_nav_menu(array(
        'menu' => 'principal',
        'container' => 'nav'
    ));
  ?>
</body>
</html>
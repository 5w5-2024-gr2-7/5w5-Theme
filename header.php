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

  <nav>
    <!-- Homepage Link -->
    <a href="<?php echo esc_url(home_url('/')); ?>">Maisonneuve</a>

    <div class="nav-droite">
      <!-- Links with page IDs for Plain Permalinks -->
      <a href="<?php echo esc_url(add_query_arg('page_id', 5, home_url())); ?>">Stages</a>
      <a href="<?php echo esc_url(add_query_arg('page_id', 6, home_url())); ?>">Cours</a>
      <a href="<?php echo esc_url(add_query_arg('page_id', 9, home_url())); ?>">Professeurs</a>  <!-- Enseignants -->
      <a href="<?php echo esc_url(add_query_arg('page_id', 8, home_url())); ?>">Projets</a>
    </div>
  </nav>

  <header>

  </header>
</body>
</html>
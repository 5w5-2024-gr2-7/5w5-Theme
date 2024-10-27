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
    <a href="<?php echo home_url(); ?>">Maisonneuve</a>
    <div class="nav-droite">
      <a href="<?php echo home_url('/stages'); ?>">Stages</a>
      <a href="<?php echo home_url('/cours'); ?>">Cours</a>
      <a href="<?php echo home_url('/enseignants'); ?>">Professeurs</a>
      <a href="<?php echo home_url('/projet'); ?>">Projets</a>
    </div>
  </nav>

  <header>
    <div class="titre-principal">Où la création commence *</div>
  </header>
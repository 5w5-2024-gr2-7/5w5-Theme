<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refonte Tim - Maisonneuve</title>
  
  <?php wp_head(); ?>
</head>
<body>

<header>
    <nav>
        <ul class="nav-bar">
            <input type="checkbox" id="check" />
            <span class="menu">
                <div class="logo-tim">
                    <a href="<?php echo esc_url(home_url('/')); ?>">TIM</a>
                </div>
                
                <div class="search-container">
                    <?php get_search_form(); ?>
                </div>

                <div class="nav-droite">
                    <?php
                    // Génère le menu principal dans la div "nav-droite"
                    wp_nav_menu(array(
                        'theme_location' => 'principal',
                        'container' => false,
                        'menu_class' => 'nav-links'
                    ));
                    ?>
                </div>

                <label for="check" class="ferme-menu"><i class="fas fa-times"></i></label>
            </span>
            
            <label for="check" class="ouvre-menu"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
</header>

<!-- Script pour le menu burger pour ne pas pouvoir défilé en arrière plan lorsque click dessus -->
<script>
    const checkbox = document.getElementById('check');
    const body = document.body;

    // SI le bouton du menu est coché, on arrête le défilement, sinon on le reprend
    checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
            body.classList.add('no-scroll');  // Retire le scrolling
        } else {
            body.classList.remove('no-scroll');  // Active le scrolling
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<script src=<?php echo get_template_directory_uri() . '/js/carrousel.js' ;?>></script>
<script src="<?php echo get_template_directory_uri() . '/js/script.js' ;?>"></script>

</body>
</html>
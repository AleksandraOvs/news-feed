<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head() ?>
</head>
<body>

<header class="header fixed-top">
    <div class="main-container">
<nav class="navbar">
<a href="/" class="navbar-brand">
                    <?php
                        $header_logo = get_theme_mod('header_logo');
                        $img = wp_get_attachment_image_src($header_logo, 'full');
                        if ($img) :
                    ?>
                    <img src="<?php echo $img[0]; ?>" alt="">
                    <?php endif; ?>
                </a>
  
  <?php 
            // if( has_nav_menu( 'head_menu' )) {
            //     wp_nav_menu( array(
            //         'theme_location' => 'head_menu',
            //         'container' => false,
            //         'menu_class' => 'nav navbar-default',
            //         'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            //         'depth' => 2
            //     ));
            // }
        ?>
    <button class="color-switcher" type="button"></button>
  </button>
 
</nav>

    </div>


</header>

<main>

<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="site-header">
        <h1>
        <?php
            if ( has_custom_logo() ) {
                echo get_custom_logo();
            } else {
                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
            }
        ?>
        </h1>
        <?php wp_nav_menu ([
        'theme_location'=>'top-menu',
        'menu_class'=>'menu-primary-ul menu additional-menu ',
        'container'=>'nav',
        'container_class'=>'menu-primary-top',
        'link_before'=>'<span class="visually-hidden">',
            'link_end'=>'</span>',
        ]);?>
    </div>

</header>
<main>
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
        <?php
            if ( has_custom_logo() ) {
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                echo '<a href="'.site_url().'" ><h1 style="background-image:url('.$image[0].');" ><span class="visually-hidden" >'. get_bloginfo( 'name' ) .'</span></h1></a>';
            } else {
                echo '<a href="'.site_url().'" ><h1 >'. get_bloginfo( 'name' ) .'</h1></a>';
            }
        ?>
        <?php wp_nav_menu ([
            'theme_location'=>'top-menu',
            'menu_class'=>'menu-primary-ul menu additional-menu ',
            'container'=>'nav',
            'container_class'=>'header-menu',
        ]);?>
        <div class="button-con" >
            <button type="button" id="mainMenu"><i class="fas fa-hamburger"></i></button>
        </div>
    </div>
</header>
<main>
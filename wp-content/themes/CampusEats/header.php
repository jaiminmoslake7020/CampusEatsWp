<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="blog-info" >
        <h1><a href="<?php site_url();?>" ><?php bloginfo('name');?></a>&nbsp;<span><?php bloginfo('description');?></span></h1>
    </div>
	<?php
        wp_nav_menu([
            'theme_location'=>'top-menu',
            'menu_class'=>'menu-primary-ul menu additional-menu ',
            'container'=>'nav',
            'container_class'=>'menu-primary-top',
            'link_before'=>'<span class="visually-hidden">',
            'link_end'=>'</span>',
        ]);
	?>
</header>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
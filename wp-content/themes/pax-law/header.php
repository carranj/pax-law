<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <title>Paw Law, PLLC <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <article>
    <header>
      <nav class="navbar navbar-expand-lg justify-content-between container">
          
          <div id="logo" class="navbar-brand">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo-full.jpg" alt=""></a>
          </div>
          
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="#navbarNav" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
          </button>
          
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="nav-items">
              <?php
              $args = array(
                'menu'      => 'menu-1',
                'container' => 'ul',
                'menu_class'      => 'navbar-nav',
              );
              wp_nav_menu($args);
              ?>
            </div>
          </div>

        
      </nav>
    </header>
    <main>
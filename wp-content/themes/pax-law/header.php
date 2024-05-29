<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">


  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/images/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/images/site.webmanifest">
  <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/images/safari-pinned-tab.svg" color="#5bbad5">


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <title>Paw Law, PLLC <?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YH3R01X2DE"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YH3R01X2DE');
  </script>
</head>

<body <?php body_class(); ?>>
  <article>
    <header>
      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-12 text-end">
            <a href="tel:+12103460716">210.346.0716</a>
            </div>
          </div>
        </div>
      </section>

      <nav class="navbar navbar-expand-lg">
      <div class="container">
      <a id="logo" class="navbar-brand" href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri() ?>/images/paxlaw-full.svg" alt="">
      </a>        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
        <?php
              $args = array(
                'menu'      => 'menu-1',
                'container' => 'ul',
                'menu_class'      => 'navbar-nav navbar-right',
              );
              wp_nav_menu($args);
              ?>

        </div>
      </div>
    </nav>
    </header>
    <main>
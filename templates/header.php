<html>

<head>
  <title>My Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- site-header -->

  <header>
    <div class="banner__full-image--aircraft" style="background-image: url(<?php header_image(); ?>);">
      <div class="container">
        <div class="block__brand">
          <span class="large-text" >O<span class="no-spacing">P</span></span>
          <span class="small-text">&</span>
          <span class="large-text" >S</span>
        </div>
        <div class="tagline">
          <?php bloginfo('description'); ?>
        </div>
        <nav class="navbar">
          <?php 
            wp_nav_menu( array( 'theme_location' => 'menu-1' ) );
          ?>
        </nav>
      </div>
    </div>

    <!-- /navigation-bar -->

  </header>

  <!-- /site-header -->
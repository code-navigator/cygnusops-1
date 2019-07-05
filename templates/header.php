<html>

<head>
  <title>My Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="container">
  
  <!-- Main Toolbar -->
    <header class="container-toolbar">
      
      <!-- Logo  -->
      <div class="container-branding">
        <p class="brand">
          <?php echo get_bloginfo( 'name' ); ?>
        </p>
        <p class="tagline">
          <?php echo get_bloginfo( 'description' ); ?>
        </p>
      </div><!-- .container-branding -->

      <!-- Menu -->
      <nav class="container-navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>
      </nav>

    </header>

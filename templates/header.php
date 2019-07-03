<html>

<head>
  <title>My Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container banner__full-image--aircraft">
  <div class="corner-top-right-bevel">
    <p class="large-text p1">OPS</p>
    <p class="small-text p2">Cygnus Online Procedures and Specs</p>
  </div>
  <nav>
    <?php wp_nav_menu(array('theme_location' => 'header_menu')) ?>
  </nav>
</div>



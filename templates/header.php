<html>
<head>
  <title>My Title</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="banner__full-image--aircraft" 
      
      <?php if (get_header_image() != '') : ?>
        style="background-image: url(<?php header_image(); ?>);"
      <?php endif; ?>>
      
      <div class="block__brand">
        <span class="large-text" >O<span class="no-spacing">P</span></span><span class="small-text">&</span><span class="large-text" >S</span>
      </div>
    </div>

    <nav>

    </nav>
  </header>
<div class="main-column">
  <!-- The loop -->
  <?php while(have_posts()): ?>
    
    <?php the_post(); ?>
    <h1>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </h1>

    <?php the_content(); ?>
  <?php endwhile; ?>
</div>
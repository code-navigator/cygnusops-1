<!-- Header -->
<?php get_header(); ?>

<div class="full-width">
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

<!-- Footer -->
<? get_footer(); ?>
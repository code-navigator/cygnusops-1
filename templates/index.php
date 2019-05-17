<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

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

</body>
</html>
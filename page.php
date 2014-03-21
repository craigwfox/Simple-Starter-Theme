<?php get_header(); ?>
    <div class="main cf">
      <section class="content grid-3-4 cf">
        <h1><?php the_title(); ?></h1>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content('Read the rest of this entry &raquo;'); ?>
        <?php endwhile; ?>
        <?php else : ?>
          <h2>Not Found</h2>
          <p>Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>
      </section><?php // Content ?>
      <?php get_sidebar(); ?>
    </div><?php // Main ?>
<?php get_footer(); ?>
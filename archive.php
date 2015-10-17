<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>

<div class="main cf">

  <section class="content grid-2-3">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <?php query_posts('showposts=-1'); ?>
    <ul class="archives-list">
      <?php while (have_posts()) : the_post(); ?>
      <?php endwhile;?>
    </ul>
  </section><?php // Content ?>

  <?php get_sidebar(); ?>

</div><?php // Main ?>

<?php get_footer(); ?>
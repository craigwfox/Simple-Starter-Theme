<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

<div id="home-slider" class="grid-row hero-slider hero-slider--home">

  <?php
    $mainSliderArgs = array(
      'post-type' => 'sspt_banners',
      'sspt_tax_banners' => 'main-slider',
      'showposts' => 10,
    );
    $mainSliderQuery = new WP_Query($mainSliderArgs);
    while ($mainSliderQuery->have_posts()) : $mainSliderQuery->the_post(); {
  ?>
  <div class="hero-slider__item">
    <?php the_post_thumbnail('sst_hero_img'); ?>
  </div>
  <?php } endwhile; wp_reset_postdata(); ?>

</div>
<?php // Home Slider ?>


<section class="grid-row callouts callouts--home">

  <?php
    $mainSliderArgs = array(
      'post-type' => 'sspt_callouts',
      'sspt_tax_callouts' => 'main-callouts',
      'showposts' => 4,
    );
    $mainSliderQuery = new WP_Query($mainSliderArgs);
    while ($mainSliderQuery->have_posts()) : $mainSliderQuery->the_post(); {
  ?>
  <article class="callout">
    <h2 class="callout__title"><?php the_title(); ?></h2>
    <div class="callout__img">
      <?php the_post_thumbnail('sst_callout_img'); ?>
    </div>
    <div class="callout__content">
      <?php the_content(); ?>
      <a href="<?php the_permalink(); ?>" class="callout__more">Learn More</a>
    </div>
  </article>
  <?php } endwhile; wp_reset_postdata(); ?>

</section><?php // Home Callouts ?>


<div class="grid-row main main--home">
  
  <div class="grid-2-3 content--home">
    <section class="intro">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
          <?php the_content('Read the rest of this entry &raquo;'); ?>
      <?php endwhile; ?>
      <?php else : ?>
        <h2>Not Found</h2>
        <p>Sorry, but you are looking for something that isn't here.</p>
      <?php endif; ?>
    </section>
  </div><?php // home Content ?>

  <?php get_sidebar(); ?>

</div><?php // Home Main ?>

<?php get_footer(); ?>
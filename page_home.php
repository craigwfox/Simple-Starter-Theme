<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
    <div class="main cf">
      <div id="mainSlider" class="slider main-slider">
        <?php
          $mainSliderArgs = array(
            'post-type' => 'sspt_banners',
            'sspt_tax_banners' => 'main-slider',
            'showposts' => 10,
          );
          $mainSliderQuery = new WP_Query($mainSliderArgs);
          while ($mainSliderQuery->have_posts()) : $mainSliderQuery->the_post(); {
        ?>
        <?php } endwhile; wp_reset_postdata(); ?>
      </div><!-- Main Slider -->

      <div class="home-content grid-row">
        <section class="intro grid-2-3">
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
              <?php the_content('Read the rest of this entry &raquo;'); ?>
          <?php endwhile; ?>
          <?php else : ?>
            <h2>Not Found</h2>
            <p>Sorry, but you are looking for something that isn't here.</p>
          <?php endif; ?>
        </section>
        <aside class="home-sidebar grid-1-3">
          <?php
            $mainSliderArgs = array(
              'post-type' => 'sspt_callouts',
              'sspt_tax_callouts' => 'main-callouts',
              'showposts' => 4,
            );
            $mainSliderQuery = new WP_Query($mainSliderArgs);
            while ($mainSliderQuery->have_posts()) : $mainSliderQuery->the_post(); {
          ?>
          <?php } endwhile; wp_reset_postdata(); ?>
        </aside>
      </div><!-- Home Content -->

    </div><!-- Main -->
<?php get_footer(); ?>
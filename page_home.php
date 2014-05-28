<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
    <div class="main cf">
      <div class="slider main-slider">
        <?php
          $mainSliderArgs = array(
            'post-type' => 'scpt_banners',
            'scpt_tax_banners' => ,
            'showposts' => 10,
          );
          $mainSliderQuery = new WP_Query($mainSliderArgs);
          while ($mainSliderQuery->have_posts()) : $mainSliderQuery->the_post(); {
        ?>
        <?php } endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
<?php get_footer(); ?>
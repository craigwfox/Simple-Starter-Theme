<?php get_header(); ?>
    <div class="main cf">
      <section class="content grid-3-4 cf">
      
        <h1><?php the_title(); ?></h1>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="post">
          <?php the_content('Read the rest of this entry &raquo;'); ?>
        </article>
        <?php endwhile; ?>
        
        <ul class="navigation"> 
          <li class="previous-entries"><?php previous_post_link(' %link') ?></li>
          <li class="next-entries"><?php next_post_link('%link') ?></li> 
        </ul>

        <div class="comments">
          
        </div>
        <?php else : ?>
          <h2>Not Found</h2>
          <p>Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>
      </section><!-- Content -->
      <?php get_sidebar(); ?>
    </div><!-- Main -->
<?php get_footer(); ?>
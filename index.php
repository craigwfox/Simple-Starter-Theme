<?php get_header(); ?>
    <div class="main cf">
      <section class="content grid-2-3">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="post">
            <ul class="post-info">
              <li class="post-date"><?php the_time('F j, Y') ?></li>
              <li class="post-cat"><?php the_category(', ') ?></li>
            </ul>
            <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <?php the_content('Read More &raquo;'); ?>
        </article>
        <?php endwhile; ?>
        <ul class="navigation"> 
          <li class="previous-entries"><?php next_posts_link('Older Entries') ?></li>
          <li class="next-entries"><?php previous_posts_link('Newer Entries') ?></li> 
        </ul>
      <?php else : ?>
        <h2>Not Found</h2>
        <p>Sorry, but you are looking for something that isn't here.</p>
      <?php endif; ?>
      </section><!-- Content -->
      <?php get_sidebar(); ?>
    </div><!-- Main -->
<?php get_footer(); ?>
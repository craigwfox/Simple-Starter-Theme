<?php get_header(); ?>
    <div class="main cf">
      <section class="content grid-3-4 cf">
      <h1>Search results for: "<?php the_search_query(); ?>"</h1>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <article class="post">
            <ul class="post-info">
              <li class="post-month"><?php the_time('M') ?></li>
              <li class="post-day"><?php the_time('j') ?></li>
              <li class="post-cat"><?php the_category(', ') ?></li>
            </ul>
            <h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(''); ?>
            <p class="post-more"><a href="<?php the_permalink(); ?>">Read More&hellip;</a></p>
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

      </section>
      <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
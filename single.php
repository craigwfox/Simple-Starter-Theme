<?php get_header(); ?>
		<div class="main cf">
			<section class="content cf">
			
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
			<?php else : ?>
				<h2>Not Found</h2>
				<p>Sorry, but you are looking for something that isn't here.</p>
			<?php endif; ?>

			</section>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>
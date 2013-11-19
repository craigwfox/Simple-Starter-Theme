<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
		<div class="main cf">
			<section class="content cf">

				<h1><?php the_title(); ?></h1>
				<?php query_posts('showposts=-1'); ?>
				<ul class="archives-list">
					<?php while (have_posts()) : the_post(); ?>
					<?php endwhile;?>
				</ul>

			</section>
			<?php get_sidebar(); ?>
		</div>
<?php get_footer(); ?>
		<footer class="site-foot">
			<section class="foot-nav">
				<ul>
					<?php $menuParameters = array(
						'theme_location' => 'main_nav',
						'container'       => false,
						'echo'            => true,
						'items_wrap'      => '%3$s',
						'depth'           => 0,
					);
					echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
					?>
				</ul>
			</section>
			<p class="credits">&copy;<?php echo date('Y'); ?> <a href="https://github.com/craigwfox/Simple-Starter-Theme">Simple Starter Theme</a> by <a href="http://www.craigwfox.com">Craig Fox</a></p>
		</footer><?php // Site Footer ?>
		<?php wp_footer() ?>
	</body>
</html>
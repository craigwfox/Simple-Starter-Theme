    <footer class="site-footer">
      <section class="site-footer__nav">
        <ul>
          <?php $menuParameters = array(
            'theme_location' => 'footer_nav',
            'container'       => false,
            'echo'            => true,
            'items_wrap'      => '%3$s',
            'depth'           => 0,
          );
          echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
          ?>
        </ul>
      </section>
      <div class="site-footer__credits">
        <ul>
          <li>&copy;<?php echo date('Y'); ?> <a href="https://github.com/craigwfox/Simple-Starter-Theme">Simple Starter Theme</a> by <a href="http://www.craigwfox.com">Craig Fox</a></li>
          <li>Something Else</li>
        </ul>
      </div>
    </footer><!-- Site Footer -->
    <?php wp_footer() ?>
  </body>
</html>
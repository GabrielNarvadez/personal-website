<?php

/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
</div><!-- .site-mask -->
<footer id="footer" class="footer-wrap">
  <?php if (is_active_sidebar('foot_sidebar')) { ?>
    <!--FOOTER WIDGETS-->
    <div class="top-footer-wrap">
      <div class="grid-container">
        <div class="grid-x grid-padding-x align-center ">
          <?php if (is_active_sidebar('dynamic_sidebar') || !dynamic_sidebar('foot_sidebar')) : ?><?php endif; ?>
        </div>
      </div>
    </div>
    <!--FOOTER WIDGETS END-->
  <?php } ?>
  <?php
  silkblog_site_info();
  ?>
  <a href="#0" class="scroll_to_top cd-top floating-action button secondary" data-smooth-scroll>
    <i class="fa fa-angle-up "></i>
  </a>
</footer>
</div><!-- #site-wrapper -->
<?php wp_footer(); ?>
</body>

</html>
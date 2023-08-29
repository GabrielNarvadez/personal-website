<?php if (is_active_sidebar('right-sidebar')) : ?>
  <div class="cell small-24 medium-22 large-7">
    <div class="sticky sidebar-stic">
      <div id="sidebar" class="sidebar-inwrap">
        <div class="grid-x grid-margin-x ">
          <?php dynamic_sidebar('right-sidebar'); ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
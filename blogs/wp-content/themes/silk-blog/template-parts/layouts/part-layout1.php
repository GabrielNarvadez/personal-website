<?php
/**
 * post layout1 for displaying postpage
 *
 * @package Silk Themes
 * @subpackage silkblog
 * @since silkblog 1.0
 */
 ?>

<article class=" post-wrap-layout-1 radius ">
  <div class="grid-x grid-padding-x grid-padding-y ">
    <?php if ( has_post_thumbnail() ) { ?>
    <div class="large-10 medium-10 small-24 align-self-middle">
      <div class="post-thumb-warp">
        <div class="post-thumb">
          <?php the_post_thumbnail( 'silkblog-post-layout1',array('class' => 'object-fit-images','link_thumbnail' =>TRUE)  ); ?>
        </div>
      </div>
    </div>
    <?php } ?>
    <div class="large-auto medium-auto small-24 cell align-self-middle ">
      <div class="post-body-warp">
        <div class="post-header-warp">
          <div class="entry-category">
            <div class="meta-info meta-info-cat is-font-size-6">
              <?php silkblog_category_list(); ?>
            </div>
          </div>
          <?php the_title( sprintf( '<h3 class="post-title is-font-size-3"><a class="post-title-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
          <div class="entry-category">
            <?php echo silkblog_time_link(); ?>
          </div>
        </div>
        <div class="post-excerpt">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </div>
  </div>
</article>

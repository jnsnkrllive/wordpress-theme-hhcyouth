<?php
/**
 ** PAGE
 **
 ** Displays all of the content on a page
 **
 **/
?>

<?php get_header(); ?>

    <div id="content-page">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">
          <div class="post-title">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="post-entry-page">
            <?php the_content(); ?>
            <?php edit_post_link('Edit.', '<p>', '</p>'); ?>
          </div>
          <div class="clear"></div>
        </div><!-- (class="post") -->
      <?php endwhile; endif; ?>

    </div><!-- (id="content-page") -->

<?php get_footer(); ?>
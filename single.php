<?php
/**
 ** INDEX
 **
 ** Displays all of the content on the main page
 **
 **/
?>

<?php get_header(); ?>

    <div id="content">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="post">
            <div class="post-title">
              <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </div>
            <div class="post-metadata">
              <span class="post-metadata-author">Author: <?php the_author() ?><br /></span>
              <span class="post-metadata-date">Date: <?php the_date(); ?><br /></span>
              <span class="post-metadata-category">Categories: <?php the_category(', ') ?><br /></span>
              <span class="post-metadata-tags"><?php the_tags('Tags: ', ', ', '<br />'); ?></span>
              <span class="post-metadata-comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?><br /></span>
            </div>
            <div class="post-entry">
              <?php the_content('Read the rest of this entry &raquo;'); ?>
              <?php edit_post_link('Edit.', '<p>', '</p>'); ?>
            </div>
            <div class="clear"></div>
          </div><!-- (class="post") -->

        <?php comments_template(); ?>

        <div class="navigation">
          <div class="alignleft"><?php previous_post('&laquo; Previous Post: %', '', 'yes'); ?></div>
          <div class="alignright"><?php next_post('Next Post: % &raquo;', '', 'yes'); ?></div>
        </div><!-- (class="navigation") -->

      <?php endwhile; else : ?>

        <h2>Error 404 - Not Found</h2>
        <p>Sorry, but you are looking for something that isn't here.</p>

      <?php endif; ?>

    </div><!-- (id="content") -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
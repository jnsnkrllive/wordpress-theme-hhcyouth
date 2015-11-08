<?php
/**
 ** SIDEBAR
 **
 ** Displays the sidebar
 **
 **/
?>

    <div id="sidebar">

      <div class="widget-area" id="primary">

        <ul class="none">

          <?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

            <li id="search" class="widget-container widget_search">
              <?php get_search_form(); ?>
            </li>

            <li id="archives" class="widget-container">
              <h3 class="widget-title"><?php _e( 'Archives' ); ?></h3>
              <ul>
                <?php wp_get_archives( 'type=monthly' ); ?>
              </ul>
            </li>

            <li id="meta" class="widget-container">
              <h3 class="widget-title"><?php _e( 'Meta' ); ?></h3>
              <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
              </ul>
            </li>
          <?php endif; // end primary widget area ?>

        </ul>

      </div><!-- (class="widget-area" id="primary") -->

      <?php if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

        <div class="widget-area" id="secondary">

          <ul class="none">
            <?php dynamic_sidebar( 'secondary-widget-area' ); ?>
          </ul>

        </div><!-- (class="widget-area" id="secondary") -->

      <?php endif; ?>

    </div><!-- (id="sidebar") -->
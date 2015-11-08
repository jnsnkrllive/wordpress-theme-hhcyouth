<?php
/**
 ** HEADER
 **
 ** Displays all of the <head> section and everything up to <div id="content">
 **
 **/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<!-- ******************************************************************* -->
<head>
  <link rel="shortcut icon" href="/01incl/hhc-favicon.ico" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <?php wp_head(); ?>
</head>
<!-- ******************************************************************* -->
<body>

  <div id="sitenavbar">
    <ul id="sitenavlist">
      <li><a href="/" class="currentpage">Entry Page</a></li>
      <li><a href="/fw/">FW MidHigh Group</a></li>
      <li><a href="/cx/">CX High School Group</a></li>
    </ul>
  </div><!-- (id="sitenavbar") -->

  <div id="container">
    <div id="header">
      <span>
        <a href="<?php bloginfo('url'); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a>
        <span id="subheader"><?php bloginfo('description'); ?></span>
      </span>
    </div><!-- (id="header") -->

    <div id="pagenavbar">
      <ul id="pagenavlist">
        <?php /**/ ?><li<?php if(is_home()) echo ' class="current_page_item"' ?>><a href="<?php bloginfo('url'); ?>/">Home</a></li><?php /**/ ?>
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </div><!-- (id="pagenavbar") -->
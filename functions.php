<?php
//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Register Widget Areas
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'First Widget Area',
    'id' => 'primary-widget-area',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Second Widget Area',
    'id' => 'secondary-widget-area',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));

// Search Bar
function my_search_form( $form ) {
  get_search_query();
  $form = '<form method="get" id="searchform" action="' . home_url( '/' ) . '" >';
  $form .= '<div>';
  $form .= '<input type="text" value="type and hit enter to search" name="s" id="s" accesskey="4" title="Type in search field and hit enter to search this site"';
  $form .= 'onfocus="this.value=(this.value==\'type and hit enter to search\') ? \'\' : this.value;" onblur="this.value=(this.value==\'\') ? \'type and hit enter to search\' : this.value;" />';
  $form .= '</div>';
  $form .= '</form>';
  return $form;
}
add_filter( 'get_search_form', 'my_search_form' );

// Custom Header
function holydesert_customheader_setup() {
  define('HEADER_TEXTCOLOR', '');
  define('HEADER_IMAGE', '%s/images/painted-desert.jpg'); // %s is the template dir uri
  define('HEADER_IMAGE_WIDTH', 900); // use width and height appropriate for your theme
  define('HEADER_IMAGE_HEIGHT', 180);
  define('NO_HEADER_TEXT', true );

  //Gets included in the site header
  function header_style() {
    ?><style type="text/css">
        #header {
          background: url(<?php header_image(); ?>);
        }
      </style>
    <?php
  }

  //Gets included in the admin header
  function admin_header_style() {
    ?><style type="text/css">
        #headimg {
          width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
          height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
        }
      </style>
    <?php
  }

  header_style();
  admin_header_style();

  add_custom_image_header('header_style', 'admin_header_style');

  //Register Default Header Images
  register_default_headers( array(
    'painted-desert' => array(
      'url' => '%s/images/painted-desert.jpg',
      'thumbnail_url' => '%s/images/painted-desert_thumb.jpg',
      /* translators: header image description */
      'description' => __( 'Painted Desert', 'holydesert' )
    ),
	'green-forest' => array(
      'url' => '%s/images/green-forest.jpg',
      'thumbnail_url' => '%s/images/green-forest_thumb.jpg',
      /* translators: header image description */
      'description' => __( 'Green Forest', 'holydesert' )
    ),
    'w900h180' => array(
      'url' => '%s/images/w900h180.jpg',
      'thumbnail_url' => '%s/images/w900h180_thumb.jpg',
      /* translators: header image description */
      'description' => __( 'Width=900 Height=180', 'holydesert' )
    ),
  ) );

}

holydesert_customheader_setup();

// Disable Admin Bar
function holydesert_admin_bar() {
  return false;
}
add_filter( 'show_admin_bar' , 'holydesert_admin_bar');

?>
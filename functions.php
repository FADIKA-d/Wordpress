<?php

/**
 * youpi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage youpi
 * @since youpi 1.0.0
 */

 function youpi_theme_support() 
{
  
  
  add_editor_style();
  add_theme_support( 'post-formats', array('aside', 'image', 'link', 'quote', 'status') );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'custom-background', array ('default-color'=> 'e6e6e6',));
  add_theme_support( 'menus');
  add_theme_support( 'register_navwalker', require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php');
  register_nav_menu( "principal", "Menu principal");
  register_nav_menu( "secondaire", "Menu secondaire");
  add_theme_support(
		'custom-logo',
		array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    )
  );
  
  load_theme_textdomain( 'youpi');
}
add_action( 'after_setup_theme', 'youpi_theme_support' );



function youpi_read_more_tag( $html ) 
{
	return preg_replace( '/<a(.*)>(.*)<\/a>/iU', sprintf( '<div class="read-more-button-wrap"><a$1><span class="faux-button">$2</span> <span class="screen-reader-text">"%1$s"</span></a></div>', get_the_title( get_the_ID() ) ), $html );
}

add_filter( 'the_content_more_link', 'youpi_read_more_tag' );


// fonction logo
// function youpi_custom_logo_setup() 
// {
//    $aParams = array(
//       'height'      => 100,
//       'width'       => 400,
//       'flex-height' => true,
//       'flex-width'  => true,
//       'header-text' => array( 'site-title', 'site-description' ),
//    );

//    // Ajout du support 
//    add_theme_support('custom-logo', $aParams );
// }

// add_action( 'after_setup_theme', 'youpi_custom_logo_setup' );

// fonction sidebar
function youpi_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<aside class="widget %2$s" id="%1$s">',
		'after_widget'  => '</aside>',
	);

	// main sidebar
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'main sidebar', 'youpi' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets qui apparait dans les pages et postes', 'youpi' ),
			)
		)
  );
} 
  add_action( 'widgets_init', 'youpi_sidebar_registration' );

// fonction sur le texte
function excerpt_display_strong($texte) 
 {
     return "<strong>".$texte."</strong>";
 } 
  add_filter('get_the_excerpt', 'excerpt_display_strong');

// fonction menu
// function register_navwalker() 
//   {
//       require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
//   }
  
//   add_action( 'after_setup_theme', 'register_navwalker' );
  
  
  
  

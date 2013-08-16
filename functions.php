<?php
/**
 * filiservice functions and definitions
 *
 * @package filiservice
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'filiservice_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function filiservice_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on filiservice, use a find and replace
	 * to change 'filiservice' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'filiservice', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'post_image', 1000, 800 );
	add_image_size( 'taxonomy-pages', 600, 276 );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'filiservice' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'filiservice_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // filiservice_setup
add_action( 'after_setup_theme', 'filiservice_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function filiservice_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'filiservice' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Home', 'filiservice' ),
		'id'            => 'infohome-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'filiservice_widgets_init' );

// Carregar o contact form 7 só na página contato

add_action( 'wp_print_scripts', 'deregister_cf7_javascript', 'contato' );
function deregister_cf7_javascript() {
    if ( !is_page('contato') ) {
        wp_deregister_script( 'contact-form-7' );
    }
}

add_action( 'wp_print_styles', 'deregister_cf7_styles', 'contato' );
function deregister_cf7_styles() {
    if ( !is_page('contato') ) {
        wp_deregister_style( 'contact-form-7' );
    }
}

/**
 * Enqueue scripts and styles
 */
function filiservice_scripts() {

	if (is_home()) {
		wp_enqueue_script('flexslider', get_template_directory_uri().'/assets/js/jquery.flexslider-min.js', array('jquery'));
		wp_enqueue_script('flexslider-init', get_template_directory_uri().'/assets/js/flexslider-init.js', array('jquery', 'flexslider'));
		wp_enqueue_style('flexslider', get_template_directory_uri().'/assets/css/flexslider.css');
	}
	
	wp_enqueue_style( 'filiservice-style', get_stylesheet_uri() );
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/fonts/font-awesome/css/font-awesome.min.css');

	wp_enqueue_script( 'filiservice-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'filiservice-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'filiservice-keyboard-image-navigation', get_template_directory_uri() . '/assets/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'filiservice_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Limitando palavras/strings do excerpt, sendo usado no Flexslider - NÃO REMOVER
function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

/************************************/
/*	Custom WordPress Login Logo		*/
/************************************/
function login_css() {
	wp_enqueue_style( 'login_css', get_stylesheet_directory_uri() . '/assets/css/login.css' );
}
add_action('login_head', 'login_css');
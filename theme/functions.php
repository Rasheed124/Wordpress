<?php
/**
 * themeduro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package themeduro
 */

if ( ! defined( 'THEMEDURO_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'THEMEDURO_VERSION', '0.1.0' );
}

if ( ! defined( 'THEMEDURO_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `themeduro_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'THEMEDURO_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'themeduro_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function themeduro_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on themeduro, use a find and replace
		 * to change 'themeduro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'themeduro', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'themeduro' ),
				'menu-2' => __( 'Footer Menu', 'themeduro' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

   			// Add Custom header 
		add_theme_support( 'custom-header' );
	   // Add theme logo 
		add_theme_support( 'custom-logo' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'themeduro_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */



 /*
 * Set Theme logo
*/
 function themename_custom_logo_setup() {
	$defaults = array(
	
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themeduro_setup' );





/*
 * Set post views count using post meta
*/
function track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    $views_key = 'post_views_count';
    $views = get_post_meta( $post_id, $views_key, true );
    if ( $views == '' ) {
        $views = 0;
        delete_post_meta( $post_id, $views_key );
        add_post_meta( $post_id, $views_key, '0' );
    } else {
        $views++;
        update_post_meta( $post_id, $views_key, $views );
    }
}
add_action( 'wp_head', 'track_post_views');


function themeduro_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'themeduro' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'themeduro' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'themeduro_widgets_init' );

/**
 * Enqueue scripts and styles.
 array(), true, 'all'
 */
function themeduro_scripts() {
	wp_enqueue_style( 'themeduro-style', get_stylesheet_uri(), array(), THEMEDURO_VERSION );
		wp_enqueue_style( 'themeduro-custom-style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
	wp_enqueue_script( 'themeduro-script', get_template_directory_uri() . '/js/script.min.js', array(), THEMEDURO_VERSION, true );


		wp_enqueue_style( 'owl-carousel-style-one', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all' );
		wp_enqueue_style( 'owl-carousel-style-two', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all' );
	

	
			wp_enqueue_script( 'owl-carousel-script-one', get_template_directory_uri() . '/js/owl.carousel.js', array(), THEMEDURO_VERSION, true );
	wp_enqueue_script( 'themeduro-custom-script', get_template_directory_uri() . '/js/script.js',   array(), true, 'all');
	  wp_enqueue_script( 'jquery' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'themeduro_scripts' );




/**
 * Enqueue the block editor script.
 */
function themeduro_enqueue_block_editor_script() {
	wp_enqueue_script(
		'themeduro-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		THEMEDURO_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'themeduro_enqueue_block_editor_script' );

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from THEMEDURO_TYPOGRAPHY_CLASSES.
 */
function themeduro_enqueue_typography_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'themeduro-typography',
			get_template_directory_uri() . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			THEMEDURO_VERSION,
			true
		);
		wp_add_inline_script( 'themeduro-typography', "tailwindTypographyClasses = '" . esc_attr( THEMEDURO_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'themeduro_enqueue_typography_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function themeduro_tinymce_add_class( $settings ) {
	$settings['body_class'] = THEMEDURO_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'themeduro_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/** Custom Post Types */
function single_post_testimonials() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'testimonial' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'testimonial' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'testimonial' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'testimonial' ),
       
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
		'menu_icon'   => 'dashicons-products',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
        'show_in_rest'       => true
    );
     
    register_post_type( 'Testimonials', $args );
}
add_action( 'init', 'single_post_testimonials' );
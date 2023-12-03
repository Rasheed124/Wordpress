<?php
/**
 * durotheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package durotheme
 */

if ( ! defined( 'DUROTHEME_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'DUROTHEME_VERSION', '0.1.0' );
}

if ( ! defined( 'DUROTHEME_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `durotheme_content_class`
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
		'DUROTHEME_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'durotheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function durotheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on durotheme, use a find and replace
		 * to change 'durotheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'durotheme', get_template_directory() . '/languages' );

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
				   'top-menu' => 'Top menu location',
				   'menu-2' => __( 'Footer Menu', 'durotheme' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		//Menus
		add_theme_support('menus');



		// Add Custom header 
		add_theme_support( 'custom-header' );

		add_theme_support('post-thumbnails', array(
		'post',
		'blog',
		'custom-post-type-name',
		));
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
add_action( 'after_setup_theme', 'durotheme_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function durotheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'durotheme' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'durotheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'durotheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function durotheme_scripts() {

	  // Register Swiper.js library
    //wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), '11.0.3', );
   wp_enqueue_script( 'durotheme-custom-script', get_template_directory_uri() . '/js/script.js',   array(), true, 'all');


    // Enqueue Swiper.js library
    //wp_enqueue_script('swiper');
    // Load Swiper CSS (optional)
  	wp_enqueue_style( 'durotheme-style', get_stylesheet_uri(), array(), DUROTHEME_VERSION );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    //wp_enqueue_style('swiper-style', get_template_directory_uri() . '/css/swiper.min.css', array(), '11.0.3');

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'durotheme_scripts' );





/**
 * Enqueue the block editor script.
 */
function durotheme_enqueue_block_editor_script() {
	wp_enqueue_script(
		'durotheme-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		DUROTHEME_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'durotheme_enqueue_block_editor_script' );

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from DUROTHEME_TYPOGRAPHY_CLASSES.
 */
function durotheme_enqueue_typography_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'durotheme-typography',
			get_template_directory_uri() . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			DUROTHEME_VERSION,
			true
		);
		wp_add_inline_script( 'durotheme-typography', "tailwindTypographyClasses = '" . esc_attr( DUROTHEME_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'durotheme_enqueue_typography_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function durotheme_tinymce_add_class( $settings ) {
	$settings['body_class'] = DUROTHEME_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'durotheme_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';



/** Reveiews */
function single_post_reviews() {

    $labels = array(
        'name'                  => _x( 'Reviews', 'Post type general name', 'review' ),
        'singular_name'         => _x( 'Review', 'Post type singular name', 'review' ),
        'menu_name'             => _x( 'Reviews', 'Admin Menu text', 'review' ),
        'name_admin_bar'        => _x( 'Review', 'Add New on Toolbar', 'review' ),
       
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Review custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'review' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
		'menu_icon'   => 'dashicons-businessperson',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
        'show_in_rest'       => true
    );
     
    register_post_type( 'Reviews', $args );
}
add_action( 'init', 'single_post_reviews' );



// Add links to each li and link tags

function add_additional_class_on_li($classes, $item, $args_menu)
{
    if (isset($args_menu->add_li_class)) {
        $classes[] = $args_menu->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



function add_menu_link_class($atts, $item, $args_menu)
{
    if (property_exists($args_menu, 'link_class')) {
        $atts['class'] = $args_menu->link_class;
    }
    return $atts;
}
add_filter('nav_menu_css_class', 'add_menu_link_class', 1, 3);






//BLOG BANNER CUSTOMIZER
function custom_theme_customize_register($wp_customize) {
    $wp_customize->add_section('banner_section', array(
        'title' => __('Main Page Banner', 'custom-theme'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('banner_image', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('banner_link', array(
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
        'label' => __('Banner Image', 'custom-theme'),
        'section' => 'banner_section',
    ))); // <-- Add a closing parenthesis here

    $wp_customize->add_control('banner_link', array(
        'label' => __('Banner Link', 'custom-theme'),
        'section' => 'banner_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'custom_theme_customize_register');


// Assuming Flutterwave sends the callback to http://yoursite.com/payment-callback
add_action('init', 'process_flutterwave_callback');

function process_flutterwave_callback() {
    if (isset($_POST['tx_ref'])) {
        // Process the callback data
        $tx_ref = sanitize_text_field($_POST['tx_ref']);
        $status = sanitize_text_field($_POST['status']);

        // Check if payment is successful
        if ($status === 'successful') {
            // Redirect to a success page
            wp_redirect(home_url('/payment-successful/'));
            exit;
        } else {
            // Redirect to a failure page
            wp_redirect(home_url('/payment-failed/'));
            exit;
        }
    }
}



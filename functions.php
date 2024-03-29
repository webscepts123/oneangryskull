<?php
/**
 * OneAngrySkull functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package OneAngrySkull
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function oneangryskull_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on OneAngrySkull, use a find and replace
		* to change 'oneangryskull' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'oneangryskull', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'oneangryskull' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'oneangryskull_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'oneangryskull_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oneangryskull_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'oneangryskull_content_width', 640 );
}
add_action( 'after_setup_theme', 'oneangryskull_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oneangryskull_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'oneangryskull' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'oneangryskull' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'oneangryskull_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function oneangryskull_scripts() {
	wp_enqueue_style( 'oneangryskull-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'oneangryskull-style', 'rtl', 'replace' );

	wp_enqueue_script( 'oneangryskull-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


// new style and css   my custom
/*
wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css', false, '1.1', 'all');
wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', false, '1.1', 'all');
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', false, '1.1', 'all');
wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/css/font-awesome.css', false, '1.1', 'all');
wp_enqueue_style( 'ion-range-slider', get_template_directory_uri() . '/css/ion-range-slider.css', false, '1.1', 'all');
wp_enqueue_style( 'linear-icons', get_template_directory_uri() . '/css/linear-icons.css', false, '1.1', 'all');
wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', false, '1.1', 'all');
wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css', false, '1.1', 'all');



wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.bootstrap.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.owl.carousel.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.ion.rangeSlider.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), 1.1, true);
*/
//End my customfiles


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}
add_action( 'wp_enqueue_scripts', 'oneangryskull_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// remove action
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);



// single page details
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);


function my_theme_wrapper_start() {
    echo '<section id="main">';
}
function my_theme_wrapper_end() {
    echo '</section>';
}




/*
add_action( 'woocommerce_before_add_to_cart_form', 'brand_name', 5 );
function brand_name(){
	echo 'Sample Brand name';
}
add_action( 'woocommerce_before_add_to_cart_form', 'brand_meterial', 5 );
function brand_meterial(){
	echo 'Sample Materials';
}
add_action( 'woocommerce_single_variation', 'woocommerce_single_variation', 10 );
function woocommerce_single_variation(){
	echo '$ 1999,00';
}

add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 11 );
function woocommerce_template_loop_add_to_cart(){
	echo ' <button type="submit" class="btn btn-buy" data-text="Buy"></button>';
}
*/
// Change add to cart text on single product page





add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');




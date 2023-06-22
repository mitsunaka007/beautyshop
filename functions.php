<?php
/**
 * BeautyShop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BeautyShop
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
function beautyshop_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on BeautyShop, use a find and replace
		* to change 'beautyshop' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'beautyshop', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'beautyshop' ),
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
			'beautyshop_custom_background_args',
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
add_action( 'after_setup_theme', 'beautyshop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function beautyshop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'beautyshop_content_width', 640 );
}
add_action( 'after_setup_theme', 'beautyshop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function beautyshop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'beautyshop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'beautyshop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'beautyshop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function beautyshop_scripts() {
	wp_enqueue_style( 'beautyshop-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'beautyshop-style', 'rtl', 'replace' );

	wp_enqueue_script( 'beautyshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'beautyshop_scripts' );

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

function add_scripts() {
	wp_enqueue_style('add-style', get_template_directory_uri().'/add-style.css', filemtime( get_theme_file_path('/add-style.css')),
	 'all');
	wp_enqueue_style('fontawesome_script', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'); 
	wp_enqueue_style('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
	wp_enqueue_script('hamburger', get_theme_file_uri(). '/js/hamburger.js', array('jquery'), 'all');
	wp_enqueue_script('scripts', get_theme_file_uri(). '/js/scripts.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('bookmarklet', get_theme_file_uri(). '/js/bookmarklet.js', array('jquery'), 'all');
	wp_enqueue_script('infiniteslidev2', get_theme_file_uri(). '/js/infiniteslidev2.js', array('jquery'), 'all');
	
	// ダウンロードしたSwiperのJavaScriptとCSSファイルを読み込んでいます。
	// wp_enqueue_script( 'swiperJS', get_theme_file_uri(). '/js/swiper.min.js', array(), _S_VERSION, true );
	// wp_enqueue_style('swiperCSS', get_template_directory_uri().'/swiper.min.css', array(), 'all');

	wp_enqueue_script( 'slickJS', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" );
	wp_enqueue_style('slickCSS', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css");

}
add_action( 'wp_enqueue_scripts', 'add_scripts' );

// 電話番号リンクをスマホのみ有効にするfunction - START
function my_wp_head_tel_link(){
	if(!wp_is_mobile()): ?>
		<style type="text/css">
		a[href*="tel:"] {
		pointer-events: none;
		cursor: default;
		text-decoration: none;
	}
	</style>
	<?php endif;
}
add_action('wp_head', 'my_wp_head_tel_link');
// 電話番号リンクをスマホのみ有効にするfunction - END
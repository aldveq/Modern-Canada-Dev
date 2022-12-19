<?php
/**
 * modern functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package modern
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'modern_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function modern_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on modern, use a find and replace
		 * to change 'modern' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'modern', get_template_directory() . '/languages' );

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
				'main-menu' => esc_html__( 'Primary', 'modern' ),
				'second-menu' => esc_html__('Second', 'modern')
			)
		);

        add_theme_support( 'align-wide' );

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
				'modern_custom_background_args',
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

		// Agregar soporte para que los bloques se vean WIDE en el admin
		add_theme_support( 'align-wide' );
	}
endif;
add_action( 'after_setup_theme', 'modern_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function modern_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'modern_content_width', 640 );
}
add_action( 'after_setup_theme', 'modern_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function modern_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'modern' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'modern' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'modern_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function modern_scripts() {
	wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '6.3.5');
	wp_enqueue_style( 'modern-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'modern-style', 'rtl', 'replace' );

	wp_enqueue_script( 'modern-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'modern-google-captcha', 'https://www.google.com/recaptcha/api.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'modern-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	wp_localize_script( 'modern-main', 'modern_main_data',
        array( 
            'is_french_page' => pll_current_language('slug'),
        )
    );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'modern_scripts' );

/**
* Load CSS Styles
*/
function mytheme_block_styles() {
	wp_enqueue_style( 'block-styles', get_stylesheet_uri(), array(), _S_VERSION  );
	wp_enqueue_script( 'block-javascript', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	
}
add_action( 'enqueue_block_editor_assets', 'mytheme_block_styles' );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Add nav-link css class to a html tag in header nav
function add_nav_link_main_menu( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'main-menu' ) {
      	// add the desired attributes:
		$atts['class'] = 'nav-link';
	}
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_nav_link_main_menu', 10, 3 );


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
 * Register custom Blocks acf
 */
require get_template_directory() . '/inc/custom-acf/register-acf-blocks.php';

/**
 *  Custom color palet for block guttember
 */
require get_template_directory() . '/inc/custom-acf/color-blocks-native.php';

/**
 * custom shortcode polylang
 */
require get_template_directory() . '/inc/polylang-switch.php';

/**
 * option page fotter info
 */
require get_template_directory() . '/inc/options-page/footer-option.php';

/**
 * Forms Thank You Pages Options
 */
require get_template_directory() . '/inc/options-page/forms-options.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Bootstrap Nav Walker
 */
require get_template_directory() . '/inc/class-wp-boostrap-navwalker.php';


/**
 *  Register custom strings support translate
 */
require get_template_directory() . '/inc/strings-theme/custom-string-register.php';

/**
 *  Utilities
 */
require get_template_directory() . '/inc/utilities/utilities.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
<?php
/**
 * Radar Tributario PTW functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Radar_Tributario_PTW
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
function radar_tributario_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Radar Tributario PTW, use a find and replace
		* to change 'radar-tributario' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'radar-tributario', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'radar-tributario' ),
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
			'radar_tributario_custom_background_args',
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
add_action( 'after_setup_theme', 'radar_tributario_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function radar_tributario_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'radar_tributario_content_width', 640 );
}
add_action( 'after_setup_theme', 'radar_tributario_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function radar_tributario_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'radar-tributario' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'radar-tributario' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'radar_tributario_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function radar_tributario_scripts() {
    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    // Estilo principal del tema
    wp_enqueue_style( 'radar-tributario-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'radar-tributario-style', 'rtl', 'replace' );

    // Google Fonts
    wp_enqueue_style(
        'radar-tributario-google-fonts',
        'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&family=Montserrat:wght@400;500;600&display=swap',
        array(),
        null
    );

    // CSS personalizado
    wp_enqueue_style(
        'radar-tributario-custom',
        $theme_uri . '/css/styles.css',
        array(),
        file_exists( $theme_path . '/css/styles.css' ) ? filemtime( $theme_path . '/css/styles.css' ) : _S_VERSION
    );

    // Tailwind config (debe cargarse ANTES del CDN)
    wp_enqueue_script(
        'tailwind-config',
        $theme_uri . '/js/tailwind.config.js',
        array(),
        file_exists( $theme_path . '/js/tailwind.config.js' ) ? filemtime( $theme_path . '/js/tailwind.config.js' ) : _S_VERSION,
        false // en <head>
    );

    // Tailwind CDN (depende de la config)
    wp_enqueue_script(
        'tailwindcdn',
        'https://cdn.tailwindcss.com',
        array( 'tailwind-config' ),
        null,
        false // en <head>
    );

    // Navigation.js (si lo usas)
    if ( file_exists( $theme_path . '/js/navigation.js' ) ) {
        wp_enqueue_script(
            'radar-tributario-navigation',
            $theme_uri . '/js/navigation.js',
            array(),
            filemtime( $theme_path . '/js/navigation.js' ),
            true // en footer
        );
    }

    // Main.js
    if ( file_exists( $theme_path . '/js/main.js' ) ) {
        wp_enqueue_script(
            'radar-tributario-main',
            $theme_uri . '/js/main.js',
            array(), // agrega 'jquery' aquí si lo usas
            filemtime( $theme_path . '/js/main.js' ),
            true // en footer
        );
    }

    // Habilitar respuesta de comentarios
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'radar_tributario_scripts' );


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


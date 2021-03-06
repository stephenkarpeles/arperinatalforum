<?php
/**
 * arperinatal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package arperinatal
 */

if ( ! function_exists( 'arperinatal_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function arperinatal_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on arperinatal, use a find and replace
		 * to change 'arperinatal' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'arperinatal', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Main Navigation', 'arperinatal' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'arperinatal_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'arperinatal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function arperinatal_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'arperinatal_content_width', 640 );
}
add_action( 'after_setup_theme', 'arperinatal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function arperinatal_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'arperinatal' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'arperinatal' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arperinatal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function arperinatal_scripts() {
	wp_enqueue_style( 'arperinatal-normalize', get_template_directory_uri() . '/css/normalize.css');

	wp_enqueue_style( 'arperinatal-style', get_stylesheet_uri() );

	wp_enqueue_style( 'arperinatal-style-custom', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_script( 'match-height', get_template_directory_uri() . '/js/matchHeight.js', array('jquery'), true);

	wp_enqueue_script( 'arperinatal-main-scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), '20151215', true);

	wp_enqueue_script( 'arperinatal-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'arperinatal_scripts' );

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
 * Hide admin bar on front facing pages
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Allow SVG uploads to WordPress media library
 */ 
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

/**
 * Custom Post Types
 */

add_action( 'init', 'arp_post_types_init' );

function arp_post_types_init() {

	$news_labels = array(
		'name'               => _x( 'News', 'post type general name', 'arp' ),
		'singular_name'      => _x( 'News Item', 'post type singular name', 'arp' ),
		'menu_name'          => _x( 'News', 'admin menu', 'arp' ),
		'name_admin_bar'     => _x( 'News', 'add new on admin bar', 'arp' ),
		'add_new'            => _x( 'Add New', 'News Item', 'arp' ),
		'add_new_item'       => __( 'Add New News Item', 'arp' ),
		'new_item'           => __( 'New News Item', 'arp' ),
		'edit_item'          => __( 'Edit News Item', 'arp' ),
		'view_item'          => __( 'View News Item', 'arp' ),
		'all_items'          => __( 'All News', 'arp' ),
		'search_items'       => __( 'Search News', 'arp' ),
		'parent_item_colon'  => __( 'Parent News:', 'arp' ),
		'not_found'          => __( 'No News Items found.', 'arp' ),
		'not_found_in_trash' => __( 'No News Items found in Trash.', 'arp' )
	);

	$news_args = array(
		'labels'             => $news_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' )
	);

	register_post_type( 'news', $news_args );
	
	$event_labels = array(
		'name'               => _x( 'Events', 'post type general name', 'arp' ),
		'singular_name'      => _x( 'Event', 'post type singular name', 'arp' ),
		'menu_name'          => _x( 'Events', 'admin menu', 'arp' ),
		'name_admin_bar'     => _x( 'Events', 'add new on admin bar', 'arp' ),
		'add_new'            => _x( 'Add New', 'Event', 'arp' ),
		'add_new_item'       => __( 'Add New Event', 'arp' ),
		'new_item'           => __( 'New Event', 'arp' ),
		'edit_item'          => __( 'Edit Event', 'arp' ),
		'view_item'          => __( 'View Event', 'arp' ),
		'all_items'          => __( 'All Events', 'arp' ),
		'search_items'       => __( 'Search Events', 'arp' ),
		'parent_item_colon'  => __( 'Parent Events:', 'arp' ),
		'not_found'          => __( 'No Events found.', 'arp' ),
		'not_found_in_trash' => __( 'No Events found in Trash.', 'arp' )
	);

	$event_args = array(
		'labels'             => $event_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'event' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' )
	);

	register_post_type( 'event', $event_args );

	$resource_labels = array(
		'name'               => _x( 'Resources', 'post type general name', 'arp' ),
		'singular_name'      => _x( 'Resource', 'post type singular name', 'arp' ),
		'menu_name'          => _x( 'Resources', 'admin menu', 'arp' ),
		'name_admin_bar'     => _x( 'Resources', 'add new on admin bar', 'arp' ),
		'add_new'            => _x( 'Add New', 'Event', 'arp' ),
		'add_new_item'       => __( 'Add New Resource', 'arp' ),
		'new_item'           => __( 'New Resource', 'arp' ),
		'edit_item'          => __( 'Edit Resource', 'arp' ),
		'view_item'          => __( 'View Resource', 'arp' ),
		'all_items'          => __( 'All Resources', 'arp' ),
		'search_items'       => __( 'Search Resources', 'arp' ),
		'parent_item_colon'  => __( 'Parent Resources:', 'arp' ),
		'not_found'          => __( 'No Resources found.', 'arp' ),
		'not_found_in_trash' => __( 'No Resources found in Trash.', 'arp' )
	);

	$resource_args = array(
		'labels'             => $resource_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'resource' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'taxonomies'         => array( 'category', 'post_tag' ),
		'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' )
	);

	register_post_type( 'resource', $resource_args );

}


/**
 * Add CPTs to search
 */
add_filter( 'pre_get_posts', 'custom_cpt_search' );
/**
 * This function modifies the main WordPress query to include an array of 
 * post types instead of the default 'post' post type.
 *
 * @param object $query  The original query.
 * @return object $query The amended query.
 */
function custom_cpt_search( $query ) {
	
    if ( $query->is_search ) {
	$query->set( 'post_type', array( 'event', 'resource', 'news' ) );
    }
    
    return $query;
    
}

/**
 * Custom login logo
 */
function custom_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/APF_logo.svg);
						height: auto;
						width: 320px;
						background-size: 320px auto;
						background-repeat: no-repeat;
        	padding-bottom: 100px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_logo' );
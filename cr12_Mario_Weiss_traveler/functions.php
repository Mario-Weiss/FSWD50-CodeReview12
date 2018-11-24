<?php  

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu'),
) );

/**
 * Filter the except length to 30 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '…';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function template_files() {
	// wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js',NULL,'3.3.1',true);
	wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',NULL,'1.14.3',true);
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',NULL,'4.1.3',true);
	// wp_enqueue_script('main-script', get_theme_file_uri('/js/main.js'),NULL,'1.0',TRUE);
	wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.5.0/css/all.css');
	wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','template_files');


//Widget - sidebar, socialbars
function wpb_init_widgets(){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>'
		));
	register_sidebar(array(
		'name' => 'Socialheader',
		'id' => 'socialheader',
		'before_widget' => '<div style="display: none" id="social-h">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => ''
		));
	register_sidebar(array(
		'name' => 'Socialfooter',
		'id' => 'socialfooter',
		'before_widget' => '<div style="display: none" id="social-f">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => ''
		));
	
}
add_action('widgets_init', 'wpb_init_widgets');


if ( ! function_exists( 'theme_slug_setup' ) ) :
    /**
     * Sets up theme and registers support for various WordPress features.
     */
    function theme_slug_setup() {
        // Other Theme Setup code...

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Set detfault Post Thumbnail size.
        set_post_thumbnail_size( 350, 200, true );

        // Add custom image size for single posts.
        add_image_size( 'theme-slug-single-post', 800, 9999 );
    }
endif;

add_action( 'after_setup_theme', 'theme_slug_setup' );

 ?>
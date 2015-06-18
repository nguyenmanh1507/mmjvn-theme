<?php
/**
 * mmjvn-theme functions and definitions
 *
 * @package mmjvn-theme
 */

if ( ! function_exists( 'mmjvn_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mmjvn_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mmjvn-theme, use a find and replace
	 * to change 'mmjvn-theme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mmjvn-theme', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'mmjvn-theme' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'mmjvn-theme' )
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mmjvn_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // mmjvn_theme_setup
add_action( 'after_setup_theme', 'mmjvn_theme_setup' );
 
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mmjvn_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mmjvn_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'mmjvn_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function mmjvn_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mmjvn-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'mmjvn_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mmjvn_theme_scripts() {
	wp_enqueue_style( 'googlefont', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,900' );

	wp_enqueue_style( 'libs-css', get_template_directory_uri() . '/css/libraries.min.css' ); 

	wp_enqueue_style( 'mmjvn-theme-style', get_stylesheet_uri() );

	wp_enqueue_script ( 'libs-js', get_template_directory_uri() . '/js/vendor/libraries.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script ( 'zf-js', get_template_directory_uri() . '/js/vendor/foundation.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script ( 'app-js', get_template_directory_uri() . '/js/app.min.js', array( 'jquery' ), '', true );

	// wp_enqueue_script( 'mmjvn-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	// wp_enqueue_script( 'mmjvn-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mmjvn_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Walker class to enable ZF5 navigation
 */
class F5_TOP_BAR_WALKER extends Walker_Nav_Menu
{ 
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) 
	{
    $element->has_children = !empty( $children_elements[$element->ID] );
    
    if(!empty($element->classes)){
    	$element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
    	$element->classes[] = ( $element->has_children ) ? 'has-dropdown' : '';	        
    }

    parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
  }
    
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"sub-menu dropdown\">\n";
	}
    
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{
		$item_output = '';
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';
		$class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-'. $item->ID;
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';
		$output.= $indent.'<li id="menu-item-'. $item->ID.'" '.$class_names.'>';
		
		if ( empty( $item->title ) && empty( $item->url )) 
		{
			$item->url = get_permalink($item->ID);
			$item->title = $item->post_title;
			
			$attributes = $this->attributes($item);
 
            $item_output .= '<a'. $attributes .'>';
			$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
			$item_output .= '</a>';
		}
		else
		{
			$attributes = $this->attributes($item);
	
			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;
		}
		
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
	}
	
	private function attributes($item)
	{
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		
		return $attributes;
	}
	
	public static function items_default_wrap($menu_text) {
		/**
		 * Set default menu for menus not yet linked to theme location
		 * Method courtesy of robertomatute - https://github.com/roots/roots/issues/939
		 */
		return str_replace('<ul>', '<ul class="right">', $menu_text);
	}
      
	public static function items_remove_defaut_wrapper() 
	{
		/**
		 * Remove default div wrapper around ul element
		 */
		?>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				var default_nav = $(".top-bar-section > div > ul");
				if(default_nav.parent("div").hasClass("right") === true){
		  		default_nav.unwrap();
				}
			});
		</script>
		<?php
	}
}
 
add_filter('wp_page_menu', array('F5_TOP_BAR_WALKER','items_default_wrap'));
add_action('wp_head', array('F5_TOP_BAR_WALKER','items_remove_defaut_wrapper'));

/**
 * Apply Now button shortcode
 */
function apply_now_button( $attrs ) {
	return '<a href="' . $attrs['url'] . '" class="button--apply">' . $attrs['text'] . '</a>';
}

add_shortcode( 'apply', 'apply_now_button' );

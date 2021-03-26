<?php
/**
 * ArtGallery functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 */

/**
 * Set a constant that holds the theme's minimum supported PHP version.
 */
define( 'ARTGALLERY_MIN_PHP_VERSION', '5.6' );

/**
 * Immediately after theme switch is fired we we want to check php version and
 * revert to previously active theme if version is below our minimum.
 */
add_action( 'after_switch_theme', 'artgallery_test_for_min_php' );

/**
 * Switches back to the previous theme if the minimum PHP version is not met.
 */
function artgallery_test_for_min_php() {

	// Compare versions.
	if ( version_compare( PHP_VERSION, ARTGALLERY_MIN_PHP_VERSION, '<' ) ) {
		// Site doesn't meet themes min php requirements, add notice...
		add_action( 'admin_notices', 'artgallery_min_php_not_met_notice' );
		// ... and switch back to previous theme.
		switch_theme( get_option( 'theme_switched' ) );
		return false;

	};
}

if ( ! function_exists( 'wp_body_open' ) ) {
        function wp_body_open() {
                do_action( 'wp_body_open' );
        }
}

/**
 * An error notice that can be displayed if the Minimum PHP version is not met.
 */
function artgallery_min_php_not_met_notice() {
	?>
	<div class="notice notice-error is_dismissable">
		<p>
			<?php esc_html_e( 'You need to update your PHP version to run this theme.', 'artgallery' ); ?> <br />
			<?php
			printf(
				/* translators: 1 is the current PHP version string, 2 is the minmum supported php version string of the theme */
				esc_html__( 'Actual version is: %1$s, required version is: %2$s.', 'artgallery' ),
				PHP_VERSION,
				ARTGALLERY_MIN_PHP_VERSION
			); // phpcs: XSS ok.
			?>
		</p>
	</div>
	<?php
}


require_once( trailingslashit( get_template_directory() ) . 'inc/customize-pro/class-customize.php' );

if ( ! function_exists( 'artgallery_setup' ) ) :
	/**
	 * ArtGallery setup.
	 *
	 * Set up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support post thumbnails.
	 *
	 */
	function artgallery_setup() {

		/*
		 * Make theme available for translation.
		 *
		 * Translations can be filed in the /languages/ directory
		 *
		 * If you're building a theme based on ArtGallery, use a find and replace
		 * to change 'artgallery' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'artgallery' );

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
		 */
		add_theme_support( 'post-thumbnails' );

	
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'editor-styles' );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, and column width.
	 	 */
		add_editor_style( array( 'assets/css/editor-style.css', 
								 get_template_directory_uri() . '/assets/css/font-awesome.css',
								 artgallery_fonts_url()
						  ) );

		/*
		 * Set Custom Background
		 */				 
		add_theme_support( 'custom-background', array ('default-color'  => '#ffffff') );

		// Set the default content width.
		$GLOBALS['content_width'] = 900;

		// This theme uses wp_nav_menu() in header menu
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'artgallery' ),
			'footer'    => __( 'Footer Menu', 'artgallery' ),
		) );

		$defaults = array(
	        'flex-height' => false,
	        'flex-width'  => false,
	        'header-text' => array( 'site-title', 'site-description' ),
	    );
	    add_theme_support( 'custom-logo', $defaults );

	    // Define and register starter content to showcase the theme on new sites.
		$starter_content = array(

			'widgets' => array(
				'sidebar-widget-area' => array(
					'search',
					'recent-posts',
					'categories',
					'archives',
				),

				'footer-column-1-widget-area' => array(
					'recent-comments'
				),

				'footer-column-2-widget-area' => array(
					'recent-posts'
				),

				'footer-column-3-widget-area' => array(
					'calendar'
				),
			),

			'posts' => array(
				'home',
				'blog',
				'about',
				'contact'
			),

			// Default to a static front page and assign the front and posts pages.
			'options' => array(
				'show_on_front' => 'page',
				'page_on_front' => '{{home}}',
				'page_for_posts' => '{{blog}}',
			),

			// Set the front page section theme mods to the IDs of the core-registered pages.
			'theme_mods' => array(
				'artgallery_slider_display' => 1,
				'artgallery_slide1_image' => esc_url( get_template_directory_uri() . '/images/slider/1.jpg' ),
				'artgallery_slide1_content' => _x( '<h2>Slide 1 Title</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><a href="#" title="Read more">Read more</a>', 'Theme starter content', 'artgallery' ),
				'artgallery_slide2_image' => esc_url( get_template_directory_uri() . '/images/slider/2.jpg' ),
				'artgallery_slide2_content' => _x( '<h2>Slide 2 Title</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><a href="#" title="Read more">Read more</a>', 'Theme starter content', 'artgallery' ),
				'artgallery_slide3_image' => esc_url( get_template_directory_uri() . '/images/slider/3.jpg' ),
				'artgallery_slide3_content' => _x( '<h2>Slide 3 Title</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><a href="#" title="Read more">Read more</a>', 'Theme starter content', 'artgallery' ),
			),

			'nav_menus' => array(
				// Assign a menu to the "primary" location.
				'primary' => array(
					'name' => __( 'Primary Menu', 'artgallery' ),
					'items' => array(
						'link_home',
						'page_blog',
						'page_contact',
						'page_about',
					),
				),

				// Assign a menu to the "footer" location.
				'footer' => array(
					'name' => __( 'Footer Menu', 'artgallery' ),
					'items' => array(
						'link_home',
						'page_about',
						'page_blog',
						'page_contact',
					),
				),
			),
		);

		$starter_content = apply_filters( 'artgallery_starter_content', $starter_content );
		add_theme_support( 'starter-content', $starter_content );
	}
endif; // artgallery_setup
add_action( 'after_setup_theme', 'artgallery_setup' );

if ( ! function_exists( 'artgallery_fonts_url' ) ) :
	/**
	 *	Load google font url used in the ArtGallery theme
	 */
	function artgallery_fonts_url() {

	    $fonts_url = '';
	 
	    /* Translators: If there are characters in your language that are not
	    * supported by Questrial, translate this to 'off'. Do not translate
	    * into your own language.
	    */
	    $questrial = _x( 'on', 'Questrial font: on or off', 'artgallery' );

	    if ( 'off' !== $questrial ) {
	        $font_families = array();
	 
	        $font_families[] = 'Overlock';
	 
	        $query_args = array(
	            'family' => urlencode( implode( '|', $font_families ) ),
	        );
	 
	        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
	    }
	 
	    return $fonts_url;
	}
endif; // artgallery_fonts_url

if ( ! function_exists( 'artgallery_load_scripts' ) ) :
	/**
	 * the main function to load scripts in the ArtGallery theme
	 * if you add a new load of script, style, etc. you can use that function
	 * instead of adding a new wp_enqueue_scripts action for it.
	 */
	function artgallery_load_scripts() {

		// load main stylesheet.
		wp_enqueue_style( 'font-awesome',
			get_template_directory_uri() . '/assets/css/font-awesome.css', array( ) );

		wp_enqueue_style( 'animate-css',
			get_template_directory_uri() . '/assets/css/animate.css', array( ) );

		wp_enqueue_style( 'artgallery-style', get_stylesheet_uri(), array() );
		
		wp_enqueue_style( 'artgallery-fonts', artgallery_fonts_url(), array(), null );
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_script( 'viewportchecker',
			get_template_directory_uri() . '/assets/js/viewportchecker.js',
			array( 'jquery' ) );
		
		// Load Utilities JS Script
		wp_enqueue_script( 'artgallery-utilities',
			get_template_directory_uri() . '/assets/js/utilities.js',
			array( 'jquery', 'viewportchecker' ) );

		$data = array(
	        'loading_effect' => ( get_theme_mod('artgallery_animations_display', 1) == 1 ),
	    );
	    wp_localize_script('artgallery-utilities', 'artgallery_options', $data);

	    
		wp_enqueue_script( 'jquery.easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array( 'jquery' ) );
		wp_enqueue_script( 'camera', get_template_directory_uri() . '/assets/js/camera.js', array( 'jquery' ) );
	}
endif; // artgallery_load_scripts
add_action( 'wp_enqueue_scripts', 'artgallery_load_scripts' );

if ( ! function_exists( 'artgallery_widgets_init' ) ) :
	/**
	 *	widgets-init action handler. Used to register widgets and register widget areas
	 */
	function artgallery_widgets_init() {
		
		// Register Sidebar Widget.
		register_sidebar( array (
							'name'	 		 =>	 __( 'Sidebar Widget Area', 'artgallery'),
							'id'		 	 =>	 'sidebar-widget-area',
							'description'	 =>  __( 'The sidebar widget area', 'artgallery'),
							'before_widget'	 =>  '',
							'after_widget'	 =>  '',
							'before_title'	 =>  '<div class="sidebar-before-title"></div><h3 class="sidebar-title">',
							'after_title'	 =>  '</h3><div class="sidebar-after-title"></div>',
						) );

		// Register Footer Column #1
		register_sidebar( array (
								'name'			 =>  __( 'Footer Column #1', 'artgallery' ),
								'id' 			 =>  'footer-column-1-widget-area',
								'description'	 =>  __( 'The Footer Column #1 widget area', 'artgallery' ),
								'before_widget'  =>  '',
								'after_widget'	 =>  '',
								'before_title'	 =>  '<h2 class="footer-title">',
								'after_title'	 =>  '</h2><div class="footer-after-title"></div>',
							) );
		
		// Register Footer Column #2
		register_sidebar( array (
								'name'			 =>  __( 'Footer Column #2', 'artgallery' ),
								'id' 			 =>  'footer-column-2-widget-area',
								'description'	 =>  __( 'The Footer Column #2 widget area', 'artgallery' ),
								'before_widget'  =>  '',
								'after_widget'	 =>  '',
								'before_title'	 =>  '<h2 class="footer-title">',
								'after_title'	 =>  '</h2><div class="footer-after-title"></div>',
							) );
		
		// Register Footer Column #3
		register_sidebar( array (
								'name'			 =>  __( 'Footer Column #3', 'artgallery' ),
								'id' 			 =>  'footer-column-3-widget-area',
								'description'	 =>  __( 'The Footer Column #3 widget area', 'artgallery' ),
								'before_widget'  =>  '',
								'after_widget'	 =>  '',
								'before_title'	 =>  '<h2 class="footer-title">',
								'after_title'	 =>  '</h2><div class="footer-after-title"></div>',
							) );
	}
endif; // artgallery_widgets_init
add_action( 'widgets_init', 'artgallery_widgets_init' );

if ( ! function_exists( 'artgallery_show_copyright_text' ) ) :
	/**
	 *	Displays the copyright text.
	 */
	function artgallery_show_copyright_text() {

		$footerText = get_theme_mod('artgallery_footer_copyright', null);

		if ( !empty( $footerText ) ) {

			echo esc_html( $footerText ) . ' | ';		
		}
	}
endif; // artgallery_show_copyright_text

if ( ! function_exists( 'artgallery_display_slider' ) ) :
	/**
	 * Displays the slider
	 */
	function artgallery_display_slider() {
	?>
		<div class="camera_wrap camera_emboss" id="camera_wrap">
			<?php
				// display slides
				for ( $i = 1; $i <= 3; ++$i ) {
						
						$defaultSlideImage = get_template_directory_uri().'/images/slider/' . $i .'.jpg';

						$slideContent = get_theme_mod( 'artgallery_slide'.$i.'_content' );
						$slideImage = get_theme_mod( 'artgallery_slide'.$i.'_image', $defaultSlideImage );

					?>

						<div data-thumb="<?php echo esc_attr( $slideImage ); ?>" data-src="<?php echo esc_attr( $slideImage ); ?>">
							<div class="camera_caption fadeFromBottom">
								<?php echo $slideContent; ?>
							</div>
						</div>
	<?php		} /**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function artgallery_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'artgallery_skip_link_focus_fix' );

?>
		</div><!-- #camera_wrap -->
	<?php 
	}
endif; // artgallery_display_slider

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

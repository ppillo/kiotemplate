<?php
	
// Add scripts and stylesheets - Bootstrap core CSS - Bootstrap core JavaScript
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );	
	wp_enqueue_script( 'npm', get_template_directory_uri() . '/js/npm.js');	
	wp_enqueue_script( 'npm', get_template_directory_uri() . '/js/general.js');		
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css' );
	wp_enqueue_style( 'custome', get_template_directory_uri() . '/css/custome.css' );
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/carousel.css');	
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );

// Add Google Fonts
	
// Add Google Fonts
function startwordpress_google_fonts() {
	wp_register_style('Raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,600,700');
	wp_enqueue_style( 'Raleway');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Kioru Settings', 'Kioru Settings', 'manage_options', 'kioru-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Kioru Settings</h1>
    <form method="post" action="options.php">
       <?php
		settings_fields( 'section' );
		do_settings_sections( 'theme-options' );      
		submit_button();         
       ?>   
              
    </form>
  </div>
<?php }
	
// Options 
//You can see the example for application on sidebar.php
function setting_twitter() { ?>
<input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }
	
function video_title() { ?>
<input type="text" name="main-video-title" id="main-video-title" value="<?php echo get_option( 'main-video-title' ); ?>" />
<?php }

function video_subtitle() { ?>
<input type="text" name="main-video-subtitle" id="main-video-subtitle" value="<?php echo get_option( 'main-video-subtitle' ); ?>" />
<?php }
	
function custom_settings_page_setup() {
	add_settings_section( 'section', 'All Settings', null, 'theme-options' );
	add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
	add_settings_field( 'main-video-title', 'Main Video Title', 'video_title', 'theme-options', 'section' );
	add_settings_field( 'main-video-subtitle', 'Main Video SubTitle', 'video_subtitle', 'theme-options', 'section' );

	register_setting('section', 'twitter');
	register_setting('section', 'main-video-title');
	register_setting('section', 'main-video-subtitle');
}

add_action( 'admin_init', 'custom_settings_page_setup' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Insert Custom Login Logo
 */

function custom_login_logo() {
    echo '
        <style>
            .login h1 a { background-image: url("http://www.kioru.com/templates/gk_creativity/images/logo.png") !important; background-size: 234px 67px; width:234px; height:67px; display:block; }
        </style>
    ';
}
add_action( 'login_head', 'custom_login_logo' );

/**
 * Modify Admin Footer Text
 */

function modify_footer() {
    echo 'Created by <a href="kioru.com">Kioru</a>.';
}
add_filter( 'admin_footer_text', 'modify_footer' );

/**
 * Add widget 
 */
 function my_widgets_init(){
	 
	register_sidebar( array(
		'name' => 'Main Menu',
		'id' => 'main-menu',	
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
	));
	
	register_sidebar( array('name' => 'Home - Header','id' => 'header','before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget'  => '</div>','before_title'  => '<h2 class="widgettitle">','after_title'   => '</h2>'));
	
	register_sidebar( array('name' => 'Home - Header Blog','id' => 'header_blog','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="top_header_blog">','after_title'  => '</h2>'));
	
	register_sidebar( array('name' => 'Home - Sectio 1','id' => 'section1','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="section_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Home - Sectio 2','id' => 'section2','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="section_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Home - Sectio 3','id' => 'section3','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="section_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Home - Sectio 4','id' => 'section4','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="section_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Home - Sectio 5','id' => 'section5','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="section_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Home - Sectio 6','id' => 'section6','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="section_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Home - Sectio 7','id' => 'section7','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="section_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Home - Sectio 8','id' => 'section8','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="section_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Home - Sectio 9','id' => 'section9','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="section_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Home - Sectio 10','id' => 'section10','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="section_title">','after_title'   => '</h2>'));
	
	register_sidebar( array('name' => 'Page - Top 1','id' => 'top1','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="top_header">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Page - Top 2','id' => 'top2','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="top_title2">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Page - Top 3','id' => 'top3','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="top_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Page - Top 4','id' => 'top4','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="top_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Page - Top 6','id' => 'top6','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="top_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Page - Top 7','id' => 'top7','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="top_title">','after_title'   => '</h2>'));
	register_sidebar( array('name' => 'Page - Top 8','id' => 'top8','before_widget' => '','after_widget'  => '','before_title'  => '<h2 class="top_title">','after_title'   => '</h2>'));

	
	register_sidebar( array(
		'name' => 'Footer 1',
		'id' => 'f1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'	 
	));
	register_sidebar( array(
		'name' => 'Footer 2',
		'id' => 'f2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'	
	));
	register_sidebar( array(
		'name' => 'Footer 3',
		'id' => 'f3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'	
	));

	 
 }
 add_action('widgets_init','my_widgets_init');
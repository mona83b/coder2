
<?php


function avada_css_js_file_links() {

		wp_enqueue_style('normalize', get_stylesheet_directory_uri(). '/css/normalize.css');
		wp_enqueue_style('bootstrappp', get_stylesheet_directory_uri(). '/css/bootstrap.min.css');
		wp_enqueue_style('prettyPhoto', get_stylesheet_directory_uri(). '/css/prettyPhoto.css');
		wp_enqueue_style('font-aw', get_stylesheet_directory_uri(). '/css/font-awesome.min.css');
		wp_enqueue_style('sttt', get_template_directory_uri(). '/style.css');
		wp_enqueue_style('childstyle', get_stylesheet_directory_uri(). '/css/childstyle.css');
		
		



		
		wp_enqueue_script('jquery-1.11.3', get_stylesheet_directory_uri().'/js/jquery-1.11.3.min.js', ['jquery'], NULL, true);
		wp_enqueue_script('prettyPhoto', get_stylesheet_directory_uri().'/js/jquery.prettyPhoto.js', ['jquery'], NULL, true);
		wp_enqueue_script('custom1', get_stylesheet_directory_uri().'/js/custom1.js', ['jquery'], NULL, true);
		wp_enqueue_script('bootstrapp', get_stylesheet_directory_uri().'/js/bootstrap.min.js', ['jquery'], NULL, true);
		wp_enqueue_script('popperr', get_stylesheet_directory_uri().'/js/popper.min.js', ['jquery'], NULL, true);
		//wp_enqueue_script('jqueryyy', get_stylesheet_directory_uri().'/js/jquery-3.3.1.min.js', ['jquery'], NULL, true);	
		
}
add_action( 'wp_enqueue_scripts', 'avada_css_js_file_links' );



//linking shortcodes.........................



include_once "inc/shortcodes/diorphotogallery.php";
include_once "inc/shortcodes/dropdown-search.php";
include_once "inc/shortcodes/slider-carawsel.php";
include_once "inc/shortcodes/slider-carawsel-short-photo.php";
include_once "inc/shortcodes/slider-carawsel-video.php";
include_once "inc/shortcodes/single-photo-duo.php";
include_once "inc/shortcodes/latest-reviews.php";
include_once "inc/shortcodes/slider-carawsel-intern.php";
include_once "inc/shortcodes/slider-photo-gallery.php";
include_once "inc/shortcodes/slider-duo-photo-gallery.php";




?>







		
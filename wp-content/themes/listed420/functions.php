<?php
/**
 * Houzez functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Houzez
 * @since Houzez 1.0
 * @author Waqas Riaz
 */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
global $wp_version;
/**
*	----------------------------------------------------------------------------------------------------------------------------------------------------
*	Define constants
*	----------------------------------------------------------------------------------------------------------------------------------------------------
*/
define( 'HOUZEZ_THEME_NAME', 'Houzez' );
define( 'HOUZEZ_THEME_SLUG', 'houzez' );
define( 'HOUZEZ_THEME_VERSION', '1.5.7' );
/**
*	----------------------------------------------------------------------------------------------------------------------------------------------------
*	Set up theme default and register various supported features.
*	----------------------------------------------------------------------------------------------------------------------------------------------------
*/
if ( ! function_exists( 'houzez_setup' ) ) {
	function houzez_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		//Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		//Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		set_post_thumbnail_size( 150, 150 );
		add_image_size( 'houzez-single-big-size', 1170, 600, true ); // toparea-v1.php , single-property.php
		add_image_size( 'houzez-property-thumb-image', 385, 258, true ); // List, grid view. Include VC modules grid view, content-grid-1.php
		add_image_size( 'houzez-property-thumb-image-v2', 380, 280, true ); // List, grid view. Include VC modules grid view, content-grid-1.php
		add_image_size( 'houzez-image570_340', 570, 340, true ); // for property carousels and property grids
		add_image_size( 'houzez-property-detail-gallery', 810, 430, true ); // Slideshow.php , blog-function.php
		add_image_size( 'houzez-imageSize1170_738', 1170, 738, true ); // lightbox.php , toparea-v2.php
		add_image_size( 'houzez-prop_image1440_610', 1440, 610, true ); // property-slider.php
		add_image_size( 'houzez-image350_350', 350, 350, true ); // author.php , content-grid-2.php , single-houzez_agent.php , template-agent.php
		add_image_size( 'houzez-widget-prop', 150, 110, true ); // slideshow.php , dashboard_property_unit.php
		add_image_size( 'houzez-image_masonry', 350, 9999, false ); // blog-masonry.php
		add_image_size( 'houzez-toparea-v5', 0, 480, false ); // toparea-v5.php
		

		/**
		*	Register nav menus. 
		*/
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Main Menu', 'houzez' ),
				'top-menu' => esc_html__( 'Top Menu', 'houzez' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'houzez' )
			)
		);

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
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(

		) );

		//remove gallery style css
		add_filter( 'use_default_gallery_style', '__return_false' );
		
	}

	add_action( 'after_setup_theme', 'houzez_setup' );
}

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Make the theme available for translation.
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
load_theme_textdomain( 'houzez', get_template_directory() . '/languages' );

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Set up the content width value based on the theme's design.
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
if( !function_exists('houzez_content_width') ) {
	function houzez_content_width()
	{
		$GLOBALS['content_width'] = apply_filters('houzez_content_width', 1170);
	}

	add_action('after_setup_theme', 'houzez_content_width', 0);
}


/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Enqueue scripts and styles.
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
require_once( get_template_directory() . '/inc/register-scripts.php' );

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	TMG plugin activation
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
	require_once( get_template_directory() . '/framework/class-tgm-plugin-activation.php' );
	require_once( get_template_directory() . '/framework/register-plugins.php' );

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Visual Composer
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
if (is_plugin_active('js_composer/js_composer.php') && is_plugin_active('houzez-theme-functionality/houzez-theme-functionality.php') ) {

	if( !function_exists('houzez_include_composer') ) {
		function houzez_include_composer()
		{
			require_once(get_template_directory() . '/framework/vc_extend.php');
		}

		add_action('init', 'houzez_include_composer', 9999);
	}

	// Filter to replace default css class names for vc_row shortcode and vc_column
	if( !function_exists('houzez_custom_css_classes_for_vc_row_and_vc_column') ) {
		add_filter('vc_shortcodes_css_class', 'houzez_custom_css_classes_for_vc_row_and_vc_column', 10, 2);
		function houzez_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag)
		{
			if ($tag == 'vc_row' || $tag == 'vc_row_inner') {
				$class_string = str_replace('vc_row-fluid', 'row-fluid', $class_string);
				$class_string = str_replace('vc_row', 'row', $class_string);
				$class_string = str_replace('wpb_row', '', $class_string);
			}
			if ($tag == 'vc_column' || $tag == 'vc_column_inner') {
				$class_string = preg_replace('/vc_col-sm-(\d{1,2})/', 'col-sm-$1', $class_string);
				$class_string = str_replace('wpb_column', '', $class_string);
				$class_string = str_replace('vc_column_container', '', $class_string);
			}
			return $class_string;
		}
	}

}
/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Functions
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
require_once( get_template_directory() . '/framework/functions/price_functions.php' );
require_once( get_template_directory() . '/framework/functions/helper_functions.php' );
require_once( get_template_directory() . '/framework/functions/profile_functions.php' );
require_once( get_template_directory() . '/framework/functions/property_functions.php' );
require_once( get_template_directory() . '/framework/functions/emails-functions.php' );
require_once( get_template_directory() . '/framework/functions/blog-functions.php' );
require_once( get_template_directory() . '/framework/functions/membership-functions.php' );
require_once( get_template_directory() . '/framework/functions/cron-functions.php' );
require_once( get_template_directory() . '/framework/functions/property-expirator.php');
require_once( get_template_directory() . '/framework/functions/messages_functions.php');
require_once( get_template_directory() . '/framework/functions/property_rating.php');

if( $wp_version < '4.7.0' ) {
	require_once( get_template_directory() . '/framework/functions/houzez-localization.php');
} else {
	require_once(get_theme_file_path('framework/functions/houzez-localization.php'));
}

require_once( get_template_directory() . '/framework/thumbnails/better-jpgs.php');
require_once( get_template_directory() . '/framework/thumbnails/honor-ssl-for-attachments.php');

require_once( get_template_directory() . '/framework/functions/db-update.php' );
require_once( get_template_directory() . '/inc/header/favicon-apple-icons.php' );
require_once( get_template_directory() . '/inc/yelpauth/yelpoauth.php' );

if ( class_exists( 'ReduxFramework' ) ) {
	require_once( get_template_directory() . '/inc/styling-options.php' );
	require_once( get_template_directory() . '/framework/functions/demo-importer.php' );
}

/**
 *	---------------------------------------------------------------------------------------
 *	Widgets
 *	---------------------------------------------------------------------------------------
 */
require_once ( get_template_directory() . '/inc/widgets/houzez-featured-properties.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-properties.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-property-taxonomies.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-advanced-search.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-about.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-contact.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-latest-posts.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-code-banner.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-facebook.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-flickr-photos.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-image-banner-300-250.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-mortgage-calculator.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-instagram.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-twitter.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-properties-viewed.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-agents-search.php' );

if( class_exists('Houzez_login_register') ) {
	require_once( get_template_directory() . '/inc/widgets/houzez-login-widget.php');
}

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Twitter Oauth
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
if(!class_exists('TwitterOAuth',false)) {
	require_once( get_template_directory() . '/inc/twitteroauth/twitteroauth.php' );
}


/**
 *	---------------------------------------------------------------------------------------
 *	Classes
 *	---------------------------------------------------------------------------------------
 */
require_once( get_template_directory() . '/framework/classes/houzez_data_source.php' );
require_once( get_template_directory() . '/framework/classes/Houzez_Compare_Properties.php' );

/**
 *	---------------------------------------------------------------------------------------
 *	Meta Boxes
 *	---------------------------------------------------------------------------------------
 */
require_once( get_template_directory() . '/framework/metaboxes/metaboxes.php' );
require_once( get_template_directory() . '/framework/metaboxes/property-status-meta.php' );
require_once( get_template_directory() . '/framework/metaboxes/property-label-meta.php' );
require_once( get_template_directory() . '/framework/metaboxes/property-area-meta.php' );
require_once( get_template_directory() . '/framework/metaboxes/property-cities-meta.php' );
require_once( get_template_directory() . '/framework/metaboxes/property-state-meta.php' );

$activation_status = get_option( 'houzez_activation' );
if( $activation_status == 'activated') {
	require_once(get_template_directory() . '/framework/metaboxes/houzez-meta-boxes.php');
}

/**
 *	---------------------------------------------------------------------------------------
 *	Options Admin Panel
 *	---------------------------------------------------------------------------------------
 */
require_once( get_template_directory() . '/framework/options/remove-tracking-class.php' ); // Remove tracking
require_once( get_template_directory() . '/framework/options/fave-options.php' );
require_once( get_template_directory() . '/framework/options/fave-option.php' );


/*-----------------------------------------------------------------------------------*/
/*	Register blog sidebar, footer and custom sidebar
/*-----------------------------------------------------------------------------------*/
if( !function_exists('houzez_widgets_init') ) {
	add_action('widgets_init', 'houzez_widgets_init');
	function houzez_widgets_init()
	{
		register_sidebar(array(
			'name' => esc_html__('Default Sidebar', 'houzez'),
			'id' => 'default-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in the blog sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Property Listings', 'houzez'),
			'id' => 'property-listing',
			'description' => esc_html__('Widgets in this area will be shown in property listings sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Single Property', 'houzez'),
			'id' => 'single-property',
			'description' => esc_html__('Widgets in this area will be shown in single property sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Agency Sidebar', 'houzez'),
			'id' => 'agency-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in agencies template and agency detail page.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Agent Sidebar', 'houzez'),
			'id' => 'agent-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in agents template and angent detail page.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Search Sidebar', 'houzez'),
			'id' => 'search-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in search result page.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Page Sidebar', 'houzez'),
			'id' => 'page-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in page sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('IDX Sidebar', 'houzez'),
			'id' => 'idx-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in idx template sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Create Listing Sidebar', 'houzez'),
			'id' => 'create-listing-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in create listing sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Footer Area 1', 'houzez'),
			'id' => 'footer-sidebar-1',
			'description' => esc_html__('Widgets in this area will be show in footer column one', 'houzez'),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Footer Area 2', 'houzez'),
			'id' => 'footer-sidebar-2',
			'description' => esc_html__('Widgets in this area will be show in footer column two', 'houzez'),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Footer Area 3', 'houzez'),
			'id' => 'footer-sidebar-3',
			'description' => esc_html__('Widgets in this area will be show in footer column three', 'houzez'),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Footer Area 4', 'houzez'),
			'id' => 'footer-sidebar-4',
			'description' => esc_html__('Widgets in this area will be show in footer column four', 'houzez'),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
	}
}

if ( !current_user_can('administrator') && !is_admin() ) {
	show_admin_bar( false );
}

if( !function_exists('houzez_vcSetAsTheme') ) {
	add_action('vc_before_init', 'houzez_vcSetAsTheme');
	function houzez_vcSetAsTheme()
	{
		vc_set_as_theme($disable_updater = false);
	}
}

if ( !function_exists( 'houzez_block_users' ) ) :

	add_action( 'init', 'houzez_block_users' );

	function houzez_block_users() {
		$users_admin_access = houzez_option('users_admin_access');

		if( is_user_logged_in() ) {
			if ($users_admin_access != 0) {
				if (is_admin() && !current_user_can('administrator') && isset( $_GET['action'] ) != 'delete' && !(defined('DOING_AJAX') && DOING_AJAX)) {
					wp_die(esc_html("You don't have permission to access this page.", "Houzez"));
					exit;
				}
			}
		}
	}

endif;

if( !function_exists('houzez_custom_ppp') ) {
	function houzez_custom_ppp($query)
	{
		if (!is_admin() && $query->is_tax(array('property_type', 'property_feature', 'property_status', 'property_city', 'property_area', 'property_state', 'property_label')) && $query->is_main_query()) {
			$taxonomy_num_posts = houzez_option('taxonomy_num_posts');
			$query->set('posts_per_page', $taxonomy_num_posts);
		}
	}

	add_action('pre_get_posts', 'houzez_custom_ppp');
}

//Delete property attachments when delete property
add_action( 'before_delete_post', 'houzez_delete_property_attachments' );
if( !function_exists('houzez_delete_property_attachments') ) {
	function houzez_delete_property_attachments($postid)
	{

		// We check if the global post type isn't ours and just return
		global $post_type;

		if ($post_type == 'property') {
			$media = get_children(array(
				'post_parent' => $postid,
				'post_type' => 'attachment'
			));
			if (!empty($media)) {
				foreach ($media as $file) {
					// pick what you want to do
					//unlink(get_attached_file($file->ID));
					wp_delete_attachment($file->ID);
				}
			}
			$attachment_ids = get_post_meta($postid, 'fave_property_images', false);
			if (!empty($attachment_ids)) {
				foreach ($attachment_ids as $id) {
					wp_delete_attachment($id);
				}
			}
		}
		return;
	}
}

add_action( 'admin_menu', 'addCustomMenuItem' );
function addCustomMenuItem(){

add_menu_page('Property Price', 'Property Price Settings', 'manage_options', 'custom_admin_page_slug', 'pg_building_function','',80);

add_submenu_page( 'custom_admin_page_slug', 'Update Price', 'Update Price', 'manage_options', 'update_price', 'pg_building_function_submenu' );


}

function pg_building_function(){
if(!current_user_can('manage_options')){
//wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}//end if user is allowed.


//add any form processing code here in PHP:
?>



<div class="wrap">
<h1>Property Price Settings</h1>

<!-- This Section is currently in development. -->


<?php

if(isset($_REQUEST['submit_property'])){

	$assessed= $_REQUEST['propety_assessed'];
	$persf= $_REQUEST['propety_persf'];

	if( (!empty($assessed)) && (!empty($persf)) ) {
		update_option( 'propety_assessed', $assessed );
		update_option( 'propety_persf', $persf);

		?>
<div id="message" class="updated"><p>Assessed value and price updated successfully.</p></div>
		<?php

	}else{ ?>

		<div id="message" class="error"><p>Something went wrong, try again.</p></div>

<?php

	}

}

?>


<form method="POST">

	<table class="form-table">
		<tbody>
		<tr>
			<th scope="row">
				<label for="assessed">Assessed Multiplier:</label>
			</th>
			<td><input type="text" class="regular-text code" name="propety_assessed" value="<?php echo get_option( 'propety_assessed' );?>" ></td>
		</tr>

		<tr>
			<th scope="row">
				<label for="pricesf">Price Per SF (In $):</label>
			</th>
			<td><input type="text" class="regular-text code" name="propety_persf" value="<?php echo get_option( 'propety_persf' );?>" ></td>
		</tr>
	
	</tbody>

	</table>

	<p class="submit"><input type="submit" name="submit_property" id="submit" class="button button-primary" value="Save Changes"></p>
  
  
</form>

</div>

<?php


}//end pg_building_function function.




function pg_building_function_submenu(){

if(!current_user_can('manage_options')){
//wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
}//end if user is allowed.

?>


<div class="wrap">
<h1>Update Property Price</h1>


<?php
// echo "sub menu page";

if ($_REQUEST['action'] == 'update_property') { ?>

<div id="message" class="updated"><p>Property Price Updated Successfully.</p></div>

<?php
	global $wpdb;

$metas = $wpdb->get_results( 
  $wpdb->prepare("SELECT post_id FROM $wpdb->postmeta where meta_key = %s", 'fave_property_price')
 );


// echo '<pre>';
// print_r( $metas );

$assessed_multiplier = get_option( 'propety_assessed' );

// echo " -- ";

$persf_multiplier = get_option( 'propety_persf' );

$ac_to_sf = 43560;

// echo "<br>";

foreach ($metas as $key => $value) {

	$estimated_price = 0;

	# code...
	$post_id = $value->post_id;
	
	// echo " -- ";
	// echo get_post_meta($post_id, 'totalassessedvalue', true);
	// echo " -- ";
	// echo get_post_meta($post_id, 'fave_property_land', true);
	// echo " -- ";
	// echo get_post_meta($post_id, 'fave_property_land_postfix', true);
	

	$assessed_value = get_post_meta($post_id, 'totalassessedvalue', true);

	$sf_value = get_post_meta($post_id, 'fave_property_land', true);

	$sf_type = get_post_meta($post_id, 'fave_property_land_postfix', true);
	


	// update the property price as per assessed value

	if( (!empty($assessed_value)) && ($assessed_value !=0) ){
		
		$estimated_price = $assessed_value * $assessed_multiplier;

		update_post_meta($post_id, 'fave_property_price', $estimated_price);

		// echo " -- ";
		// echo "update from assessed value.";

	}elseif( ( !empty($sf_value) ) && ( !empty($sf_type) ) ){

		// calculate the estimate property price = (per SF * 350)

		// for per SF
		if($sf_type == 'SF'){

			$estimated_price = $sf_value * $persf_multiplier;

			update_post_meta($post_id, 'fave_property_price', $estimated_price);

			// echo " -- ";
			// echo "update from sf value.";

		}

		// for per SF
		if($sf_type == 'AC'){

			$estimated_price = $sf_value * $ac_to_sf * $persf_multiplier;

			update_post_meta($post_id, 'fave_property_price', $estimated_price);

			// echo " -- ";
			// echo "update from sf value with convert.";


		}

	} // end of elseif

	
} // end of foreach


}  // end of request.

?>

<div class="property_update">

	<a href="?page=update_price&action=update_property"><b>Click Here</b></a> to update the property price by Assessed Multiplier(<?php echo get_option( 'propety_assessed' );?>) and Price per SF($<?php echo get_option( 'propety_persf' );?>).
	<div class="price_cal">
	<div style="margin-bottom: 5px;"><b>Update Propert Price Logic:</b></div>
	<div>
	IF assessedValue exist <br>
		propertyPrice = assessedValue * assessedMultiplier <br>
	ELSE <br>
		propertyPrice = landArea in SF * perSfPrice <br>
		</div>
	</div>
</div>

</div>
<style>
.property_update{font-size: 15px;line-height: 20px;margin-top: 16px;}
.price_cal {
    margin-top: 15px;
}
</style>

<?php
} // end of pg_building_function_submenu

//add any form processing code here in PHP:



function get_author_role()
{
    global $authordata;

    $author_roles = $authordata->roles;
    $author_role = array_shift($author_roles);

    return $author_role;
}
<?php

error_reporting(0);
set_time_limit(0);
ini_set('display_errors', 0);
ini_set('memory_limit', '10240000M');

require_once("wp-load.php");

require_once("config.php");

global $wpdb;



$metas = $wpdb->get_results( 
  $wpdb->prepare("SELECT post_id FROM $wpdb->postmeta where meta_key = %s", 'fave_property_price')
 );



// get last post id of generated image
$last_satellete_image_postID = get_option('satellitePropertyImage_maxPostID'); 


// generate images
foreach ($metas as $key => $value) {
	
	$post_id = $value->post_id;

	if($post_id > $last_satellete_image_postID){

		$propertyAddress = get_post_meta($post_id, 'fave_property_map_address', true);

		$propertyAddress = str_replace(' ', '+', $propertyAddress);

		$image_url = 'https://maps.googleapis.com/maps/api/staticmap?center='.$propertyAddress.'&zoom=20&size=640x640&maptype=satellite&key='.GOOGLE_KEY;


		// generate satellite image
		$image = file_get_contents($image_url); 

		$fp  = fopen(SI_UPLOAD_PATH_.$post_id.'.jpg', 'w+'); 

		fputs($fp, $image); 

		fclose($fp); 

		unset($image);

		
		// add image url in post meta
		update_post_meta($post_id, 'satellitePropertyImage', SI_UPLOAD_URL_.$post_id.'.jpg');


		// update max post id
		update_option('satellitePropertyImage_maxPostID', $post_id);

	}

}




echo 'done';
<?php

include('config.php');

global $wpdb;


$metas = $wpdb->get_results( 
  $wpdb->prepare("SELECT post_id FROM $wpdb->postmeta where meta_key = %s", 'fave_property_price')
 );

// echo '<pre>';
// print_r( $metas );


foreach ($metas as $key => $value) {
	// echo $key.' --> '.$value->post_id;
	// echo "<br>";

	$post_id = $value->post_id;

	$propertyAddress = get_post_meta($post_id, 'fave_property_map_address', true);


	$propertyAddress = str_replace(' ', '+', $propertyAddress);

	$image_url = 'https://maps.googleapis.com/maps/api/staticmap?center='.$propertyAddress.'&zoom=20&size=640x640&maptype=satellite&key='.GOOGLE_KEY;



	// generate satellite image
	$image = file_get_contents($image_url); 

	$fp  = fopen(SI_UPLOAD_PATH_.$post_id.'.jpg', 'w+'); 

	fputs($fp, $image); 

	fclose($fp); 

	unset($image);

	// add post meta
	update_post_meta($post_id, 'satellitePropertyImage', SI_UPLOAD_URL_.$post_id.'.jpg');

}
?>


<script>
	location.href = "?page=property_image";
</script>
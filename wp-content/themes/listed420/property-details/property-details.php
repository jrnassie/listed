<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 08/01/16
 * Time: 4:23 PM
 */
global $post_meta_data;

$prop_id = get_post_meta( get_the_ID(), 'fave_property_id', true );
$prop_price = get_post_meta( get_the_ID(), 'fave_property_price', true );
$prop_size = get_post_meta( get_the_ID(), 'fave_property_size', true );
$land_area = get_post_meta( get_the_ID(), 'fave_property_land', true );
$bedrooms = get_post_meta( get_the_ID(), 'fave_property_bedrooms', true );
$bathrooms = get_post_meta( get_the_ID(), 'fave_property_bathrooms', true );
$year_built = get_post_meta( get_the_ID(), 'fave_property_year', true );
$garage = get_post_meta( get_the_ID(), 'fave_property_garage', true );
$property_status = houzez_taxonomy_simple('property_status');
$property_type = houzez_taxonomy_simple('property_type');
$garage_size = get_post_meta( get_the_ID(), 'fave_property_garage_size', true );
$additional_features_enable = get_post_meta( get_the_ID(), 'fave_additional_features_enable', true );
$additional_features = get_post_meta( get_the_ID(), 'additional_features', true );
$apn = get_post_meta( get_the_ID(), 'apn', true );
$pzip4 = get_post_meta( get_the_ID(), 'pzip4', true );
$punitnumber = get_post_meta( get_the_ID(), 'punitnumber', true );
$punittype = get_post_meta( get_the_ID(), 'punittype', true );
$pstreetname = get_post_meta( get_the_ID(), 'pstreetname', true );
$pstreetprefix = get_post_meta( get_the_ID(), 'pstreetprefix', true );
$pstreetsuffix = get_post_meta( get_the_ID(), 'pstreetsuffix', true );
$pstreettype = get_post_meta( get_the_ID(), 'pstreettype', true );
$countyname = get_post_meta( get_the_ID(), 'countyname', true );
$mailaddress = get_post_meta( get_the_ID(), 'mailaddress', true );
$mcity = get_post_meta( get_the_ID(), 'mcity', true );
$mstate = get_post_meta( get_the_ID(), 'mstate', true );
$mzip = get_post_meta( get_the_ID(), 'mzip', true );
$mzip4 = get_post_meta( get_the_ID(), 'mzip4', true );
$munitnumber = get_post_meta( get_the_ID(), 'munitnumber', true );
$munittype = get_post_meta( get_the_ID(), 'munittype', true );
$ownernames = get_post_meta( get_the_ID(), 'ownernames', true );
$ownername_formatted = get_post_meta( get_the_ID(), 'ownername_formatted', true );
$owner1fname = get_post_meta( get_the_ID(), 'owner1fname', true );
$owner1lname = get_post_meta( get_the_ID(), 'owner1lname', true );
$owner1mname = get_post_meta( get_the_ID(), 'owner1mname', true );
$owner2fname = get_post_meta( get_the_ID(), 'owner2fname', true );
$owner2lname = get_post_meta( get_the_ID(), 'owner2lname', true );
$owner2mname = get_post_meta( get_the_ID(), 'owner2mname', true );
$transfervalue = get_post_meta( get_the_ID(), 'transfervalue', true );
$lastsaledate = get_post_meta( get_the_ID(), 'lastsaledate', true );
$lastcontractdate = get_post_meta( get_the_ID(), 'lastcontractdate', true );
$lastsaledocnumber = get_post_meta( get_the_ID(), 'lastsaledocnumber', true );
$lastsalebooknumber = get_post_meta( get_the_ID(), 'lastsalebooknumber', true );
$lastsalepagenumber = get_post_meta( get_the_ID(), 'lastsalepagenumber', true );
$saletype = get_post_meta( get_the_ID(), 'saletype', true );
$owneroccupied = get_post_meta( get_the_ID(), 'owneroccupied', true );
$propertytype = get_post_meta( get_the_ID(), 'propertytype', true );
$numstories = get_post_meta( get_the_ID(), 'numstories', true );
$numunits = get_post_meta( get_the_ID(), 'numunits', true );
$yearbuilt = get_post_meta( get_the_ID(), 'yearbuilt', true );
$pool = get_post_meta( get_the_ID(), 'pool', true );
$tract = get_post_meta( get_the_ID(), 'tract', true );
$lotnumber = get_post_meta( get_the_ID(), 'lotnumber', true );
$areacode = get_post_meta( get_the_ID(), 'areacode', true );
$taxamount = get_post_meta( get_the_ID(), 'taxamount', true );
$delinquent = get_post_meta( get_the_ID(), 'delinquent', true );
$taxratecodearea = get_post_meta( get_the_ID(), 'taxratecodearea', true );
$taxyear = get_post_meta( get_the_ID(), 'taxyear', true );
$totalassessedvalue = get_post_meta( get_the_ID(), 'totalassessedvalue', true );
$assessedyear = get_post_meta( get_the_ID(), 'assessedyear', true );
$annivrecordingmonth = get_post_meta( get_the_ID(), 'annivrecordingmonth', true );
$assessedimprovementvalue = get_post_meta( get_the_ID(), 'assessedimprovementvalue', true );
$assessedimprovepercent = get_post_meta( get_the_ID(), 'assessedimprovepercent', true );
$assessedlandvalue = get_post_meta( get_the_ID(), 'assessedlandvalue', true );
$censustract = get_post_meta( get_the_ID(), 'censustract', true );
$fips = get_post_meta( get_the_ID(), 'fips', true );
$landuse = get_post_meta( get_the_ID(), 'landuse', true );
$legaldescription = get_post_meta( get_the_ID(), 'legaldescription', true );



$prop_details = false;

if( !empty( $prop_id ) ||
    !empty( $prop_price ) ||
    !empty( $prop_size ) ||
    !empty( $land_area ) ||
    !empty( $bedrooms ) ||
    !empty( $bathrooms ) ||
    !empty( $year_built ) ||
    !empty( $property_status ) ||
    !empty( $property_type ) ||
    !empty( $garage )
) {
    $prop_details = true;
}

$hide_detail_prop_fields = houzez_option('hide_detail_prop_fields');

if( $prop_details ) {
?>
<div id="detail" class="detail-list detail-block target-block">
    <div class="detail-title">
        <h2 class="title-left"><?php esc_html_e( 'Detail', 'houzez' ); ?></h2>

        <?php if( $hide_detail_prop_fields['updated_date'] != 1 ) { ?>
        <div class="title-right">
            <p><?php esc_html_e( 'Updated on', 'houzez' ); ?> <?php the_modified_time('F j, Y'); ?> <?php esc_html_e( 'at', 'houzez' ); ?> <?php the_modified_time('g:i a'); ?> </p>
        </div>
        <?php } ?>

    </div>
    <div class="alert alert-info">
        <ul class="list-three-col">
            <?php
            if( !empty( $prop_id ) && $hide_detail_prop_fields['prop_id'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'Property ID:', 'houzez').'</strong> '.houzez_propperty_id_prefix($prop_id).'</li>';
            }
            if( !empty( $prop_price ) && $hide_detail_prop_fields['sale_rent_price'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'Price:', 'houzez'). '</strong> '.houzez_listing_price().'</li>';
            }
            if( !empty( $prop_size ) && $hide_detail_prop_fields['area_size'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'Property Size:', 'houzez'). '</strong> '.houzez_property_size( 'after' ).'</li>';
            }
            if( !empty( $land_area ) && $hide_detail_prop_fields['land_area'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'Land Area:', 'houzez'). '</strong> '.houzez_property_land_area( 'after' ).'</li>';
            }
            if( !empty( $bedrooms ) && $hide_detail_prop_fields['bedrooms'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'Bedrooms:', 'houzez').'</strong> '.esc_attr( $bedrooms ).'</li>';
            }
            if( !empty( $bathrooms ) && $hide_detail_prop_fields['bathrooms'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'Bathrooms:', 'houzez').'</strong> '.esc_attr( $bathrooms ).'</li>';
            }
            if( !empty( $garage ) && $hide_detail_prop_fields['garages'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'Garage:', 'houzez').'</strong> '.esc_attr( $garage ).'</li>';
            }
            if( !empty( $garage_size ) && $hide_detail_prop_fields['garages'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'Garage Size:', 'houzez').'</strong> '.esc_attr( $garage_size ).'</li>';
            }
            if( !empty( $year_built ) && $hide_detail_prop_fields['year_built'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'Year Built:', 'houzez').'</strong> '.esc_attr( $year_built ).'</li>';
            }
            if( !empty( $property_type ) && ($hide_detail_prop_fields['prop_type']) != 1 ) {
                echo '<li class="prop_type"><strong>'.esc_html__( 'Property Type:', 'houzez').'</strong> '.esc_attr( $property_type ).'</li>';
            }
            if( !empty( $property_status ) && ($hide_detail_prop_fields['prop_status']) != 1 ) {
                echo '<li class="prop_status"><strong>'.esc_html__( 'Property Status:', 'houzez').'</strong> '.esc_attr( $property_status ).'</li>';
            }
            ?>
        </ul>
    </div>


        <div class="detail-title-inner">
            <h4 class="title-inner"><?php esc_html_e( 'New Additional Details', 'houzez' ); ?></h4>
        </div>
        <ul class="list-three-col">
            <?php
            if( !empty( $apn ) && $hide_detail_prop_fields['apn'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'APN:', 'houzez').'</strong> '.esc_attr($apn).'</li>';
            }
            if( !empty( $pzip4 ) && $hide_detail_prop_fields['pzip4'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'pzip4:', 'houzez').'</strong> '.esc_attr($pzip4).'</li>';
            }
            if( !empty( $punitnumber ) && $hide_detail_prop_fields['punitnumber'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'punitnumber:', 'houzez').'</strong> '.esc_attr($punitnumber).'</li>';
            }
            if( !empty( $punittype ) && $hide_detail_prop_fields['punittype'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'punittype:', 'houzez').'</strong> '.esc_attr($punittype).'</li>';
            }
            if( !empty( $pstreetname ) && $hide_detail_prop_fields['pstreetname'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'pstreetname: ', 'houzez').'</strong>';
                if( !empty( $pstreetprefix ) && $hide_detail_prop_fields['pstreetprefix'] != 1 ) {
                echo ''.esc_attr($pstreetprefix).'_';
                }
                echo ''.esc_attr($pstreetname).'';

                if( !empty( $pstreetsuffix ) && $hide_detail_prop_fields['pstreetsuffix'] != 1 ) {
                echo '_'.esc_attr($pstreetsuffix).'</li>';
                }              
            }
            
            
            if( !empty( $pstreettype ) && $hide_detail_prop_fields['pstreettype'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'pstreettype:', 'houzez').'</strong> '.esc_attr($pstreettype).'</li>';
            }
            if( !empty( $countyname ) && $hide_detail_prop_fields['countyname'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'County Name:', 'houzez').'</strong> '.esc_attr($countyname).'</li>';
            }
            ?>
        </ul>
        <div class="detail-title-inner">
            <h4 class="title-inner"><?php esc_html_e( 'Mail Details', 'houzez' ); ?></h4>
        </div>
        <ul class="list-three-col">
            <?php
            if( !empty( $mailaddress ) && $hide_detail_prop_fields['mailaddress'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'mailaddress:', 'houzez').'</strong> '.esc_attr($mailaddress).'</li>';
            }
            if( !empty( $mcity ) && $hide_detail_prop_fields['mcity'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'mcity:', 'houzez').'</strong> '.esc_attr($mcity).'</li>';
            }
            if( !empty( $mstate ) && $hide_detail_prop_fields['mstate'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'mstate:', 'houzez').'</strong> '.esc_attr($mstate).'</li>';
            }
            if( !empty( $mzip ) && $hide_detail_prop_fields['mzip'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'mzip:', 'houzez').'</strong> '.esc_attr($mzip).'</li>';
            }
            if( !empty( $mzip4 ) && $hide_detail_prop_fields['mzip4'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'mzip4:', 'houzez').'</strong>'.esc_attr($mzip4).'</li>';                             
            }
            if( !empty( $munitnumber ) && $hide_detail_prop_fields['munitnumber'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'munitnumber:', 'houzez').'</strong> '.esc_attr($munitnumber).'</li>';
            }
            if( !empty( $munittype ) && $hide_detail_prop_fields['munittype'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'munittype:', 'houzez').'</strong> '.esc_attr($munittype).'</li>';
            }
            ?>
        </ul>
        <div class="detail-title-inner">
            <h4 class="title-inner"><?php esc_html_e( 'Owner Details', 'houzez' ); ?></h4>
        </div>
        <ul class="list-three-col">
            <?php
            if( !empty( $ownernames ) && $hide_detail_prop_fields['ownernames'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'ownername(s):', 'houzez').'</strong> '.esc_attr($ownernames).'</li>';
            }
            if( !empty( $ownername_formatted ) && $hide_detail_prop_fields['ownername_formatted'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'Ownername Formatted:', 'houzez').'</strong> '.esc_attr($ownername_formatted).'</li>';
            }
            if( !empty( $owner1fname ) && $hide_detail_prop_fields['owner1fname'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'owner1fname:', 'houzez').'</strong> '.esc_attr($owner1fname).'</li>';
            }
            if( !empty( $owner1lname ) && $hide_detail_prop_fields['owner1lname'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'owner1lname:', 'houzez').'</strong> '.esc_attr($owner1lname).'</li>';
            }
            if( !empty( $owner1mname ) && $hide_detail_prop_fields['owner1mname'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'owner1mname:', 'houzez').'</strong>'.esc_attr($owner1mname).'</li>';                             
            }
            if( !empty( $owner2fname ) && $hide_detail_prop_fields['owner2fname'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'owner2fname:', 'houzez').'</strong> '.esc_attr($owner2fname).'</li>';
            }
            if( !empty( $owner2lname ) && $hide_detail_prop_fields['owner2lname'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'owner2lname:', 'houzez').'</strong> '.esc_attr($owner2lname).'</li>';
            }
            if( !empty( $owner2mname ) && $hide_detail_prop_fields['owner2mname'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'owner2mname:', 'houzez').'</strong> '.esc_attr($owner2mname).'</li>';
            }
            ?>
        </ul>
        <div class="detail-title-inner">
            <h4 class="title-inner"><?php esc_html_e( 'Sales Details', 'houzez' ); ?></h4>
        </div>
        <ul class="list-three-col">
            <?php
            if( !empty( $transfervalue ) && $hide_detail_prop_fields['transfervalue'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'transfervalue:', 'houzez').'</strong> '.esc_attr($transfervalue).'</li>';
            }
            if( !empty( $lastsaledate ) && $hide_detail_prop_fields['lastsaledate'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'lastsaledate:', 'houzez').'</strong> '.esc_attr($lastsaledate).'</li>';
            }
            if( !empty( $lastcontractdate ) && $hide_detail_prop_fields['lastcontractdate'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'lastcontractdate:', 'houzez').'</strong> '.esc_attr($lastcontractdate).'</li>';
            }
            if( !empty( $lastsaledocnumber ) && $hide_detail_prop_fields['lastsaledocnumber'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'lastsaledocnumber:', 'houzez').'</strong> '.esc_attr($lastsaledocnumber).'</li>';
            }
            if( !empty( $lastsalebooknumber ) && $hide_detail_prop_fields['lastsalebooknumber'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'lastsalebooknumber:', 'houzez').'</strong>'.esc_attr($lastsalebooknumber).'</li>';                             
            }
            if( !empty( $lastsalepagenumber ) && $hide_detail_prop_fields['lastsalepagenumber'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'lastsalepagenumber:', 'houzez').'</strong> '.esc_attr($lastsalepagenumber).'</li>';
            }
            if( !empty( $saletype ) && $hide_detail_prop_fields['saletype'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'saletype:', 'houzez').'</strong> '.esc_attr($saletype).'</li>';
            }
            if( !empty( $owneroccupied ) && $hide_detail_prop_fields['owneroccupied'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'owneroccupied:', 'houzez').'</strong> '.esc_attr($owneroccupied).'</li>';
            }
            ?>
        </ul>
        <div class="detail-title-inner">
            <h4 class="title-inner"><?php esc_html_e( 'Additional Property Details', 'houzez' ); ?></h4>
        </div>
        <ul class="list-three-col">
            <?php
            if( !empty( $propertytype ) && $hide_detail_prop_fields['propertytype'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'propertytype:', 'houzez').'</strong> '.esc_attr($propertytype).'</li>';
            }
            if( !empty( $numstories ) && $hide_detail_prop_fields['numstories'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'numstories:', 'houzez').'</strong> '.esc_attr($numstories).'</li>';
            }
            if( !empty( $numunits ) && $hide_detail_prop_fields['numunits'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'numunits:', 'houzez').'</strong> '.esc_attr($numunits).'</li>';
            }
            if( !empty( $yearbuilt ) && $hide_detail_prop_fields['yearbuilt'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'yearbuilt:', 'houzez').'</strong> '.esc_attr($yearbuilt).'</li>';
            }
            if( !empty( $pool ) && $hide_detail_prop_fields['pool'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'pool: ', 'houzez').'</strong>'.esc_attr($pool).'</li>';                             
            }
            if( !empty( $tract ) && $hide_detail_prop_fields['tract'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'tract:', 'houzez').'</strong> '.esc_attr($tract).'</li>';
            }
            if( !empty( $lotnumber ) && $hide_detail_prop_fields['lotnumber'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'lotnumber:', 'houzez').'</strong> '.esc_attr($lotnumber).'</li>';
            }
            if( !empty( $areacode ) && $hide_detail_prop_fields['areacode'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'areacode:', 'houzez').'</strong> '.esc_attr($areacode).'</li>';
            }
            if( !empty( $taxamount ) && $hide_detail_prop_fields['taxamount'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'taxamount:', 'houzez').'</strong> '.esc_attr($taxamount).'</li>';
            }
            if( !empty( $delinquent ) && $hide_detail_prop_fields['delinquent'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'delinquent:', 'houzez').'</strong> '.esc_attr($delinquent).'</li>';
            }
            if( !empty( $taxratecodearea ) && $hide_detail_prop_fields['taxratecodearea'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'taxratecodearea:', 'houzez').'</strong> '.esc_attr($taxratecodearea).'</li>';
            }
            if( !empty( $taxyear ) && $hide_detail_prop_fields['taxyear'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'taxyear:', 'houzez').'</strong> '.esc_attr($taxyear).'</li>';
            }
            if( !empty( $totalassessedvalue ) && $hide_detail_prop_fields['totalassessedvalue'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'totalassessedvalue:', 'houzez').'</strong> '.esc_attr($totalassessedvalue).'</li>';
            }
            if( !empty( $assessedyear ) && $hide_detail_prop_fields['assessedyear'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'assessedyear:', 'houzez').'</strong> '.esc_attr($assessedyear).'</li>';
            }
            if( !empty( $annivrecordingmonth ) && $hide_detail_prop_fields['annivrecordingmonth'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'annivrecordingmonth:', 'houzez').'</strong> '.esc_attr($annivrecordingmonth).'</li>';
            }
            if( !empty( $assessedimprovementvalue ) && $hide_detail_prop_fields['assessedimprovementvalue'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'assessedimprovementvalue:', 'houzez').'</strong> '.esc_attr($assessedimprovementvalue).'</li>';
            }
            if( !empty( $assessedimprovepercent ) && $hide_detail_prop_fields['assessedimprovepercent'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'assessedimprovepercent:', 'houzez').'</strong> '.esc_attr($assessedimprovepercent).'</li>';
            }
            if( !empty( $assessedlandvalue ) && $hide_detail_prop_fields['assessedlandvalue'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'assessedlandvalue:', 'houzez').'</strong> '.esc_attr($assessedlandvalue).'</li>';
            }


            if( !empty( $censustract ) && $hide_detail_prop_fields['censustract'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'censustract:', 'houzez').'</strong> '.esc_attr($censustract).'</li>';
            }
            if( !empty( $fips ) && $hide_detail_prop_fields['fips'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'fips:', 'houzez').'</strong> '.esc_attr($fips).'</li>';
            }
            if( !empty( $landuse ) && $hide_detail_prop_fields['landuse'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'landuse:', 'houzez').'</strong> '.esc_attr($landuse).'</li>';
            }
            if( !empty( $legaldescription ) && $hide_detail_prop_fields['legaldescription'] != 1 ) {
                echo '<li><strong>'.esc_html__( 'legaldescription:', 'houzez').'</strong> '.esc_attr($legaldescription).'</li>';
            }
            ?>
        </ul>
   

    <?php if( $additional_features_enable != 'disable' && !empty( $additional_features[0]['fave_additional_feature_title'] ) && $hide_detail_prop_fields['additional_details'] != 1 ) { ?>
        <div class="detail-title-inner">
            <h4 class="title-inner"><?php esc_html_e( 'Additional details', 'houzez' ); ?></h4>
        </div>
        <ul class="list-three-col">
            <?php
            foreach( $additional_features as $ad_del ):
                echo '<li><strong>'.esc_attr( $ad_del['fave_additional_feature_title'] ).':</strong> '.esc_attr( $ad_del['fave_additional_feature_value'] ).'</li>';
            endforeach;
            ?>
        </ul>
    <?php } ?>
</div>
<?php } ?>
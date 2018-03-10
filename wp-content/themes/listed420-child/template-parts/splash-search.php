<?php
global $post, $splash_welcome_text, $page_head_subtitle, $keyword_field_placeholder, $houzez_local;
$css_class = '';
$search_template = houzez_get_search_template_link();
$splash_v1_dropdown = houzez_option('splash_v1_dropdown');
$splash_banner_search_type = 'type1';//houzez_option('splash_banner_search_type');
$keyword_field = houzez_option('keyword_field');

if( $keyword_field == 'prop_title' ) {
    $keyword_field_placeholder = $houzez_local['keyword_text'];

} else if( $keyword_field == 'prop_city_state_county' ) {
    $keyword_field_placeholder = $houzez_local['city_state_area'];

} else if( $keyword_field == 'prop_address' ) {
    $keyword_field_placeholder = $houzez_local['search_address'];

} else {
    $keyword_field_placeholder = $houzez_local['enter_location'];
}

if ( $splash_v1_dropdown == 'property_area' ) {
    $dropdown_title = $houzez_local['all_areas'];
    $select_name = 'area';
} else if ( $splash_v1_dropdown == 'property_state' ) {
    $dropdown_title = $houzez_local['all_states'];
    $select_name = 'state';
} else if ( $splash_v1_dropdown == 'property_country' ) {
    $dropdown_title = $houzez_local['all_countries'];
    $select_name = 'country';
} else {
    $dropdown_title = $houzez_local['all_cities'];
    $select_name = 'location';
}
?>

<?php if( !empty( $splash_welcome_text ) ) { ?>
    <h1><?php echo esc_html( $splash_welcome_text );?></h1>
<?php } ?>
<?php if( !empty( $page_head_subtitle ) ) { ?>
    <h2 class="banner-sub-title"><?php echo $page_head_subtitle; ?></h2>
<?php } ?>

<?php if( $splash_banner_search_type == "type1" ) { ?>
<div class="banner-search-main">
    <form autocomplete="off" method="get" action="<?php echo esc_url( $search_template ); ?>" class="form-inline">
        <div class="form-group">
            <select name="<?php echo esc_attr($select_name);?>" class="selectpicker" data-live-search="false" data-live-search-style="begins">
                <?php
                // All Option
                echo '<option value="">'.$dropdown_title.'</option>';

                if ( $splash_v1_dropdown == 'property_country' ) {
                        echo houzez_get_all_countries();
                } else {
                    $prop_city = get_terms(
                        array(
                            $splash_v1_dropdown
                        ),
                        array(
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'hide_empty' => false,
                            'parent' => 0
                        )
                    );
                    houzez_hirarchical_options($splash_v1_dropdown, $prop_city, '');
                }
                ?>
            </select>            
            <select class="selectpicker" id="selected_status" name="status" data-live-search="false" data-live-search-style="begins">
                            <?php
                            // All Option
                            echo '<option value="">'.esc_html__( 'All Status', 'houzez' ).'</option>';

                            $prop_status = get_terms (
                                array(
                                    "property_status"
                                ),
                                array(
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => false,
                                    'parent' => 0
                                )
                            );
                            houzez_hirarchical_options('property_status', $prop_status, $status );
                            ?>
                        </select>
           <?php /*?>  <select name="location" class="selectpicker" data-live-search="false" data-live-search-style="begins">
                            <?php
                            // All Option
                            echo '<option value="">'.esc_html__( 'Location', 'houzez' ).'</option>';

                            $prop_city = get_terms (
                                array(
                                    "property_city"
                                ),
                                array(
                                    'orderby' => 'name',
                                    'order' => 'ASC',
                                    'hide_empty' => true,
                                    'parent' => 0
                                )
                            );
                            houzez_hirarchical_options('property_city', $prop_city, '' );
                            ?>
                        </select> <?php */?> 
                        <script src="http://maps.googleapis.com/maps/api/js?libraries=places&language=en_US&key=AIzaSyCBnyL9MhOZlec1Mz1_qImukxi-VFqQKJw&ver=1.0"></script>


            <div class="btn-group bootstrap-select">
                <div class="form-group">
                    <div class="search-location">
                        <input id="pac-input" class="form-control " type="text" name="search_location" placeholder="<?php echo esc_html__('Location', 'houzez'); ?>" />                        
                        <i class="location-trigger fa fa-dot-circle-o"></i>
                    </div>
                </div>
            </div>
          <script>
        google.maps.event.addDomListener(window, 'load', initialize);
        function initialize() {
            var input = document.getElementById('pac-input');
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                console.log(place);
                console.log(place.geometry['location'].lat());
                console.log(place.geometry['location'].lng());
            });

        }

    </script>
            <?php /*?><div class="search input-search input-icon">
                <input type="text" class="form-control" name="keyword" placeholder="<?php echo esc_attr( $keyword_field_placeholder ); ?>">
                <div id="auto_complete_ajax" class="auto-complete"></div>
            </div><?php */?>
            <div class="search-btn">
                <button class="btn btn-secondary"><?php echo $houzez_local['search']; ?></button>
            </div>

        </div>
    </form>
</div>
<?php } elseif ( $splash_banner_search_type == "type2" ) { ?>

    <div class="banner-search-taber">
        <div class="banner-search-tabs">
            <div class="search-tab active">
                <div class="search-tab-inner">All</div>
            </div>
            <div class="search-tab">
                <div class="search-tab-inner">For Sale</div>
            </div>
            <div class="search-tab">
                <div class="search-tab-inner">For Rent</div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in">
                <?php get_template_part( 'template-parts/advanced-search/splash', 'banner' ); ?>
            </div>
            <div class="tab-pane fade">
                <?php get_template_part( 'template-parts/advanced-search/splash', 'banner' ); ?>
            </div>
            <div class="tab-pane fade">
                <?php get_template_part( 'template-parts/advanced-search/splash', 'banner' ); ?>
            </div>
        </div>
    </div>

<?php } ?>
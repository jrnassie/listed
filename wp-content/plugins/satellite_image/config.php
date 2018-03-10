<?php

$upload_dir = wp_upload_dir();

define('GOOGLE_KEY', 'AIzaSyCwrfe9ZVdYTmz7gKXqQPPb6pnEby3E9jA');

define('SI_UPLOAD_PATH_', $upload_dir['basedir'] . '/satelliteImage/');

define('SI_UPLOAD_URL_', $upload_dir['baseurl'] . '/satelliteImage/');

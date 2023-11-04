<?php
add_filter('upload_mimes', function($mimes = array()){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
});

add_image_size( 'center-img', 'large', 'large',  'center center'  );

@ini_set( 'upload_max_size' , '25M' );
@ini_set( 'post_max_size', '25M');
@ini_set( 'max_execution_time', '300' );
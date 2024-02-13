<?php

require_once(get_template_directory(  ) . '/inc/media.php');
require_once(get_template_directory(  ) . '/inc/enqueue.php');
require_once(get_template_directory(  ) . '/inc/theme.php');
require_once(get_template_directory(  ) . '/inc/acf.php');
require_once(get_template_directory() . '/inc/wp-custom-classes.php');


if( !function_exists( 'custom_login_logo' ) ){
    function custom_login_logo() {
        echo '<style>
            h1 a { background-image: url("https://kometin.at/wp-content/imgs/icon-kometin.png") !important; }
        </style>';
    }
    add_action( 'login_head', 'custom_login_logo' );
}



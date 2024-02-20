<?php
function custom_login_logo() { ?>
    <style>
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/icon-kometin.png );
            height: 100px;
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            padding-bottom: 20px;
        }
    </style>;

<?php }
add_action('login_enqueue_scripts', 'custom_login_logo');

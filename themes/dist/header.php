<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>
<a href="#content" class="screen-reader-text"><?php _e('Zum Inhalt springen', 'kometin') ?></a>
<nav id="nav-bar">
    <div class="container" id="small-container">
        <div id="logo">

            <?php
            if(function_exists('the_custom_logo')){
                the_custom_logo();
            }
            ?>

        </div>
        <input type="checkbox" id="nav-toggle">
        <label for="nav-toggle" id="nav-button">
            <span id="nav-button-icon" aria-hidden="true"></span>
            <span class="screen-reader-text"><?php _e('Navigation öffnen/schließen', 'mh'); ?></span>
        </label>

        <?php
        wp_nav_menu( array(
            'theme-location' => 'primary',
            'container' => false,
            'menu_class' => 'nav-menu',
            'menu_id' => 'nav-main',
            'fallback_cb' => false,
            'depth' => 2,
            'add_a_class' => 'nav__link'
        ));
        ?>

    </div>
</nav>
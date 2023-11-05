<?php
if (function_exists('acf_add_options_page')) {
    add_filter('acf/settings/save_json', function ($path) {
        $path = get_template_directory() . '/acf-fields';

        return $path;
    });

    add_filter('acf/settings/load_json', function ($paths) {
        unset($paths[0]);
        $paths[] = get_template_directory() . '/acf-fields';

        return $paths;
    });


    acf_add_options_page(array(
        'page_title' => 'Theme Einstellungen',
        'menu_title' => 'Theme Einstellungen',
        'menu-slug' => 'projektarbeit-theme-einstellungen',
        'position' => 80,
        'icon_url' => 'dashicons-edit',
        'update_button' => __('Einstellungen speichern', 'kometin'),
        'update_message' => __('Einstellungen wurden gespeichert', 'kometin'),
        'capibility' => 'edit_posts'
    ));
}

//ACF Blöcke
    add_action( 'acf/init', function () {
        if (function_exists('acf_register_block_type')) {
            acf_register_block_type(array(
                'name' => 'Header',
                'title' => __('header', 'kometin'),
                'description' => __('Das ist der Headerbereich', 'kometin'),
                'supports' => array('anchor' => false),
                'category' => 'kometin',
                'keywords' => array('header', 'kometin', 'kopfbereich'),
                'post_type' => array('page'),
                'align' => false,
                'mode' => false,
                'icon' => 'welcome-widgets-menus',
                'render_template' => 'template-parts/home-header.php',
            ));
        }
    })
?>

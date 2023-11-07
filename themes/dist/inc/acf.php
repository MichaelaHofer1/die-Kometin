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
add_action('acf/init', function () {
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
});
add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Hauptüberschrift',
            'title' => __('Hauptüberschrift', 'kometin'),
            'description' => __('Das ist die Hauptüberschrift', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('Hauptüberschrift', 'kometin', 'h1', 'headline'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'heading',
            'render_template' => 'template-parts/headlineH1.php',
        ));
    }
});

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Unterüberschrift',
            'title' => __('Unterüberschrift', 'kometin'),
            'description' => __('Das ist die Unterüberschrift', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('Unterüberschrift', 'kometin', 'h2', 'headline'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'heading',
            'render_template' => 'template-parts/headlineH2.php',
        ));
    }
});

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Bild',
            'title' => __('Bild', 'kometin'),
            'description' => __('Das ist ein anpassbares Bild', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('Bild', 'kometin', 'img', 'picture', 'image'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'format-image',
            'render_template' => 'template-parts/image.php',
        ));
    }
});

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Bild mit Text',
            'title' => __('Bild mit Text', 'kometin'),
            'description' => __('Das ist ein anpassbarer Bild-Text-Bereich', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('Bild', 'kometin', 'img', 'picture', 'image', 'text', 'Text mit Bild', 'Text'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'align-pull-right',
            'render_template' => 'template-parts/image-plus-text.php',
        ));
    }
});

?>

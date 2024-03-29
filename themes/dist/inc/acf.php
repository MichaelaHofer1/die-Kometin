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

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Mitglieder',
            'title' => __('Mitglieder', 'kometin'),
            'description' => __('Das ist ein Block für ein neues Mitglied', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('Bild', 'kometin', 'img', 'picture', 'image', 'text', 'Mitglied'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'admin-users',
            'render_template' => 'template-parts/member.php',
        ));
    }
});

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Freundinnen',
            'title' => __('Freundinnen', 'kometin'),
            'description' => __('Das ist ein Block für neue Freundinnen', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('Bild', 'kometin', 'img', 'freund', 'friends', 'image', 'Freunde', 'Freundinnen'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'heart',
            'render_template' => 'template-parts/friends.php',
        ));
    }
});

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Räume',
            'title' => __('Räume', 'kometin'),
            'description' => __('Das ist ein Block für die Räume', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('Bild', 'kometin', 'img', 'Raum', 'Räume'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'coffee',
            'render_template' => 'template-parts/rooms.php',
        ));
    }
});

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Button',
            'title' => __('Button', 'kometin'),
            'description' => __('Das ist ein Button', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('Button', 'kometin', 'btn', 'mehr'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'plus-alt2',
            'render_template' => 'template-parts/standard-btn.php',
        ));
    }
});

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Aufzählung',
            'title' => __('Aufzählung', 'kometin'),
            'description' => __('Das ist ein anpassbarer Aufzählungsblock', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('Aufzählung', 'kometin', 'liste', 'Punkte'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'editor-ul',
            'render_template' => 'template-parts/standard-list.php',
        ));
    }
});
add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Link',
            'title' => __('Link', 'kometin'),
            'description' => __('Das ist ein anpassbarer Link', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('Link', 'kometin', 'website', 'url'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'share',
            'render_template' => 'template-parts/standard-link.php',
        ));
    }
});

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Slideshow',
            'title' => __('Slideshow', 'kometin'),
            'description' => __('Das ist eine Slideshow', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('galerie', 'kometin', 'Slideshow', 'slider'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'images-alt2',
            'render_template' => 'template-parts/slideshow.php',
        ));
    }
});

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'Bildergalerie',
            'title' => __('Bildergalerie', 'kometin'),
            'description' => __('Das ist eine Bildergalerie', 'kometin'),
            'supports' => array('anchor' => false),
            'category' => 'kometin',
            'keywords' => array('galerie', 'kometin', 'Slideshow', 'slider'),
            'post_type' => array('page'),
            'align' => false,
            'mode' => false,
            'icon' => 'images-alt2',
            'render_template' => 'template-parts/img-gallery.php',
        ));
    }
});
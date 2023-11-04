<?php

add_action('after_setup_theme', function(){

    add_theme_support('title-tag');

    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 100,
        'flex-height' => true,
        'flex-width' => true
    ));

    register_nav_menus(array(
        'primary' => __('Hauptmenü', 'kometin'),
        'footer' => __('Footermenü', 'kometin')
    ));


    add_theme_support('editor-styles');
    add_editor_style('assets/css/style-editor.css');
    add_editor_style('assets/icons/style.css');

});

//function to add classes to the <a> of the menu
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
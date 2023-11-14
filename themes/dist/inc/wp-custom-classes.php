<?php

function add_custom_class_to_file_block($block_content)
{
    $block_content = str_replace('wp-block-file', 'wp-block-file custom-file ', $block_content);

    return $block_content;
}

add_filter('render_block_core/file', 'add_custom_class_to_file_block');
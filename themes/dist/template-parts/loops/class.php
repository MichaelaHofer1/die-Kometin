<?php
global $class_name ;
if (!empty($block['className'])) {
    $class_name = 'class="' . esc_attr($block['className']) . '"';
} ?>
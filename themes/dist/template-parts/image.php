<?php
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}
$class_name = '';
if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}
$image = get_field('picture');
$form = '';
if ($image['form'] == 'round') {
    $form = ' __round';
}
$position = '';
if ($image['position'] == 'mitte') {
    $position = ' __middle';
} elseif ($image['position'] == 'rechts') {
    $position = ' __right';
}
$size = '';
if ($image['size'] == 'small') {
    $size = ' __small';
} elseif ($image['size'] == 'mittelgroß') {
    $size = ' __medium';
} elseif ($image['size'] == 'big') {
    $size = ' __big';
}
$link = '';
if ($image['link_option'] == 'link') {
    $link = ' img-link';
}
?>

<div class="<?php echo $class_name;
echo $anchor ?>">
    <div class="customizeable-img <?php
    echo $form;
    echo $position;
    echo $size;
    echo $link;
    ?>">
        <?php if ($image['link_option'] == 'link') { ?>
            <a
            href=<?php echo $image['img_link']; ?> target="_blank"><?php echo wp_get_attachment_image($image['img'], 'large'); ?></a><?php
        } else {
            echo wp_get_attachment_image($image['img'], 'large');
        }
        ?>
    </div>
    <?php if ($image['link_option'] == 'bigger') {
        echo '<div class="lightbox-container">
                     <div class="lightbox-toggle"></div>
                   </div>';
    }
    ?>
</div>

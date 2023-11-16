<?php
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}
$class_name = '';
if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}
$single_link = get_field('standard-link');

$position = '';
if ($single_link['link-position'] == 'right') {
    $position = ' __right';
} elseif ($single_link['link-position'] == 'left') {
    $position = ' __left';
}

$font_size = '';
if ($single_link['link_text-size'] == 'middle') {
    $font_size = ' __middle';
} elseif ($single_link['link_text-size'] == 'big') {
    $font_size = ' __big';
} else {
    $font_size = ' __small';
}
?>

<div class="standard-link<?php echo $position;
echo $font_size;
echo $class_name;
echo $anchor ?>">
    <a class="" href="<?php echo $single_link['link_url']; ?>"
       target="_blank"><?php echo $single_link['link_text']; ?></a>
</div>
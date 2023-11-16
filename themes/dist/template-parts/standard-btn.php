<?php
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}
$class_name = '';
if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}

$standardBtn = get_field('button');
$position = '';
$size = '';

if ($standardBtn['text-direction'] == 'left') {
    $position = ' __left';
}
if ($standardBtn['font-size'] == 'small') {
    $size = ' __font-small';
} elseif ($standardBtn['font-size'] == 'medium') {
    $size = ' __font-medium';
} elseif ($standardBtn['font-size'] == 'big') {
    $position = '';
}
?>

<div class="standard-btn<?php echo $position;
echo $size;
echo $class_name;
echo $anchor ?>">
    <a href="<?php echo $standardBtn['link']; ?> "><?php echo $standardBtn['btn-text']; ?></a>
</div>
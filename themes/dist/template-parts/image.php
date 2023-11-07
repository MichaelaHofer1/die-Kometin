<?php
include 'loops/anchor.php';
include 'loops/class.php';
?>

<?php
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

?>

<div class="customizeable-img <?php
    echo $form;
    echo $position;
    echo $size;
?>">
    <?php echo wp_get_attachment_image($image['img'], 'large'); ?>
</div>

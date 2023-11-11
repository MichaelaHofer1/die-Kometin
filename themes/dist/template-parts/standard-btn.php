<?php
include 'loops/anchor.php';
include 'loops/class.php';
?>

<?php
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

<div class="standard-btn<?php echo $position; echo $size; ?>">
        <a href="<?php echo $standardBtn['link']; ?> "><?php echo $standardBtn['btn-text']; ?></a>

</div>


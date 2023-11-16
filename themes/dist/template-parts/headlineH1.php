<?php
$anchor = '';
if(!empty($block['anchor'])){
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}
$class_name = '';
if(!empty($block['className'])){
    $class_name .= ' ' . esc_attr($block['className']);
}
?>


<?php
$headline = get_field('headline_h1');
$border = '';
$position = '';
?>

<?php if ($headline['border']) {
    $border = '__border';
} ?>
<?php if ($headline['text-direction'] == 'middle') {
    $position = ' __middle';
} ?>

<h1 class="headline-h1<?php echo $border;
echo $position; echo $class_name; echo $anchor ?>">
    <span class="headline-container">
        <?php echo $headline['h1'] ?>
        <span class="color1" style="border-color:<?php echo $headline['border_1']; ?>"></span>
        <span class="color2" style="border-color:<?php echo $headline['border_2']; ?>"></span>
    </span>
</h1>

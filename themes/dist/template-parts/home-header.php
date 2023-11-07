<?php
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}

$class_name = '';

if (!empty($block['className'])) {
    $class_name = 'class="' . esc_attr($block['className']) . '"';
}
?>

<?php
$home_header = get_field('header');
?>

<header id="home-header">
    <div id="comet-container" style="background-image: url(<?php echo wp_get_attachment_image_url($home_header['img'], 'large');  ?> )">
        <h1 id="homeHeadline"> <span><?php echo $home_header['headline_h1']; ?> </span></h1>
        <h2><?php echo $home_header['headline_h2']; ?> </h2>
    </div>
    <div id="particles-js"></div>
</header>


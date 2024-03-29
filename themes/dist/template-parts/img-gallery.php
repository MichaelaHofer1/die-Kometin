<?php
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}
$class_name = '';
if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}
$gallery = get_field('img-gallery');

if ($gallery) {
    $counter = 0;
    $images = $gallery['imgs'];
    $style = 'fancy-gallery';

    $galleryStyle = $gallery['check-gallery-style'];
    if ($galleryStyle == 'grid') {
        $style = 'grid';
    }
    if ($galleryStyle == 'blog') {
        $style = 'blog';
    }

    if ($images): ?>
        <section id="slideshow" class="lightbox-hidden <?php if($style === 'blog'){echo 'blog-gallery'; } ?>">
            <div id="gallery-cont" class="">
                <div class="gallery <?php echo $style ?>">
                    <ul>
                        <?php foreach ($images as $image_id): ?>
                            <li class="gallery-imgs--visible" data-number="<?php echo $counter; ?>">
                                <?php echo wp_get_attachment_image($image_id, 'large'); ?>
                            </li>
                            <?php $counter++;
                        endforeach; ?>
                    </ul>
                </div>
            </div>
            </div>


            <div class="splide slideshow-gallery-imgs--hidden <?php echo $class_name ?>" <?php echo $anchor; ?>
                 role="group">
                <div class="splide__track">
                    <ul class="splide__list slideshow">
                        <?php foreach ($images as $image_id): ?>
                            <li class="splide__slide slide--<?php echo $counter; ?>">
                                <?php echo wp_get_attachment_image($image_id, 'large'); ?>
                            </li>
                            <?php $counter++;
                        endforeach; ?>
                    </ul>
                </div>
            </div>

        </section>
        <div class="btn-close-lb"></div>

    <?php endif;
}
?>


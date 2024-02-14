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
$counter = 0;
$images = $gallery['imgs'];

if ($images): ?>
    <section id="slideshow" class="lightbox-hidden">
        <div id="gallery-cont">
            <div class="gallery">
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
        <div class="circle-cont">
            <div class="decoration-circles">
                <span class="circle1"></span>
                <span class="circle2"></span>
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

<?php endif; ?>

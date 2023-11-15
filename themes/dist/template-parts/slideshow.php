<?php
include 'loops/anchor.php';
include 'loops/class.php';
?>

<?php
$pictures = get_field('slideshow');
$counter = 1;
 ?>

<section class="slideshow">
    <div class="slideshow-container">
        <?php $images = $pictures['slider-imgs'];
        if ( $images ):
            foreach ( $images as $image_id ):
                ?>
                <div class="slide slide--<?php echo $counter; ?>">
                    <?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
                </div>
                <?php
                $counter ++;
            endforeach;
        endif; ?>
        <div class="dots"></div>
    </div>

    <div class="lightbox-container">
        <div class="lightbox-toggle"></div>
    </div>
</section>

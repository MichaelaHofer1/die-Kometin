<?php
include 'loops/anchor.php';
include 'loops/class.php';
?>

<?php
$sectionRooms = get_field('rooms');
$roomName = $sectionRooms['name_group'];
$memberImg = $sectionRooms['img_and_border'];

$positionImg = '';
if ($sectionRooms['position'] == 'img-left') {
    $positionImg = ' __img-left';
}
?>

    <section class="member room">
        <div class="paragraphs">
            <h3 class="member-name"><?php echo $roomName['name']; ?></h3>
            <p><?php echo $roomName['size']; ?></p>
            <span class="background-color1<?php echo $positionImg ?>" style="background-color:<?php echo $roomName['background-color']; ?>"></span>
            <p><?php echo $sectionRooms['description']; ?></p>
        </div>
        <div class=" paragraph-img customizeable-img<?php echo $positionImg ?>">
            <?php echo wp_get_attachment_image($memberImg['img'], 'large'); ?>
            <span class="color1" style="border-color:<?php echo $memberImg['border_1']; ?>"></span>
            <span class="color2" style="border-color:<?php echo $memberImg['border_2']; ?>"></span>
        </div>
        <div class="lightbox-container">
            <div class="lightbox-toggle"></div>
        </div>
    </section>

<?php

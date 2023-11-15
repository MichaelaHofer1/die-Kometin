<?php
include 'loops/anchor.php';
include 'loops/class.php';
?>

<?php
$sectionMember = get_field('member');
$memberName = $sectionMember['name_group'];
$memberImg = $sectionMember['img_and_border'];
$memberLink = $sectionMember['individual-link'];

$positionImg = '';
if ($sectionMember['position'] == 'img-left') {
    $positionImg = ' __img-left';
}
?>

    <section class="member">
        <div class="paragraphs">
            <h3 class="member-name">
                <?php echo $memberName['name']; ?>
            </h3>
            <span class="background-color1<?php echo $positionImg ?>"
                  style="background-color:<?php echo $memberName['background-color']; ?>"></span>
            <div class="description-container">
                <p class="member-description"><?php echo $sectionMember['description']; ?></p>
                <span class="btn-show-more">mehr ansehen</span>
            </div>

            <?php
            $rows = $sectionMember['responsibility_list'];;
            if ($rows) {
                echo '<ul class="responsibilities">'; ?>
                <span><?php echo $sectionMember['responsibility']; ?></span>
                <?php
                foreach ($rows as $row) {
                    echo '<li class="responsibility">';
                    echo $row['responsibility_item'];
                    echo '</li>';
                }
                echo '</ul>';
            }
            if ($sectionMember['link_individual-member'] == 'yes') { ?>
                <a
                href=<?php echo $memberLink['link_member'] ?> target="_blank"><?php echo $memberLink['link-text']; ?></a><?php
            }
            ?>
        </div>
        <div class="paragraph-img<?php echo $positionImg ?>">
            <?php echo wp_get_attachment_image($memberImg['img'], 'large'); ?>
            <span class="color1" style="border-color:<?php echo $memberImg['border_1']; ?>"></span>
            <span class="color2" style="border-color:<?php echo $memberImg['border_2']; ?>"></span>
        </div>
    </section>

<?php

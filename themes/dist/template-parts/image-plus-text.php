<?php
include 'loops/anchor.php';
include 'loops/class.php';
?>

<?php
$sectionTextImg = get_field('pic-plus-text');

$position = '';
if ($sectionTextImg['position'] == 'img-left') {
    $position = ' __img-left';
}
?>

<section>
    <div class="paragraphs">
        <?php echo $sectionTextImg['h1']; ?>
        <?php
        $rows = $sectionTextImg['paragraphs'];;
        if ($rows) {
            echo '<ul>';
            foreach ($rows as $row) {
                echo '<li class="paragraph">';
                echo $row['text'];
                echo '</li>';
            }
            echo '</ul>';
        }
        ?>
        <div class="paragraph-img <?php echo $position ?>"><?php echo wp_get_attachment_image($sectionTextImg['img'], 'large'); ?></div>
    </div>
</section>



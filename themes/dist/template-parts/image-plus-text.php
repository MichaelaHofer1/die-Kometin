<?php
include 'loops/anchor.php';
include 'loops/class.php';
?>

<?php
$sectionTextImg = get_field('pic-plus-text');
$headline = $sectionTextImg['headline_h2_'];

$positionImg = '';
if ($sectionTextImg['position'] == 'img-left') {
    $positionImg = ' __img-left';
}

$headlineYEs = '';
if($sectionTextImg['headline']) {
    $headlineYEs = 'headline-h1';
}

$border = '';
if ($headline['border']) {
    $border = '__border';
}

$position = '';
if ($headline['text-direction'] == 'middle') {
    $position = ' __middle';
}
$fontSize = '';
if ($headline['font-size'] == 'small') {
    $fontSize = ' __font-small';
} elseif ($headline['font-size'] == 'medium') {
    $fontSize = ' __font-medium';
}
$form = '';
if ($sectionTextImg['form'] == 'round') {
    $form = ' __round';
}
?>

<section class="img-and-text">

    <div class="paragraphs">
        <div class="para-headline-container">
            <h2 class="<?php echo $headlineYEs; echo $border;
            echo $position;
            echo $fontSize ?>">
            <span class="headline-container">
                <?php echo $headline['h1'] ?>
                <span class="color1" style="border-color:<?php echo $headline['border_1']; ?>"></span>
                <span class="color2" style="border-color:<?php echo $headline['border_2']; ?>"></span>
            </span>
            </h2>

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
        </div>
        <div class="paragraph-img <?php echo $positionImg; echo $form ?>"><?php echo wp_get_attachment_image($sectionTextImg['img'], 'large'); ?></div>
    </div>
</section>



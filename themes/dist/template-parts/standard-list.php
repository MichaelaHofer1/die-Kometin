<?php
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}
$class_name = '';
if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}
$sectionList = get_field('list');
$listStyle = ' __bullet-point';
?>
<section class="list <?php echo $class_name;
echo $anchor ?>">
    <?php
    $rows = $sectionList['input'];
    if ($rows) {
    ?>
    <ul class="<?php if ($sectionList['list-style']) {
        echo $listStyle;
    } ?>">
        <?php
        foreach ($rows as $row) {
            echo '<li class="paragraph">';
            if ($row['headline_option'] == 'yes') {
                echo '<h3>';
                echo $row['headline_h3'];
                echo '</h3>';
            }
            ?>
            <p><?php echo $row['text']; ?></p>
            <?php
            echo '</li>';
        }
        echo '</ul>';
        }
        ?>
</section>
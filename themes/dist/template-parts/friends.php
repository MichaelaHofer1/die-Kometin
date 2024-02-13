<?php
$anchor = '';
if (!empty($block['anchor'])) {
    $anchor = 'id="' . esc_attr($block['anchor']) . '"';
}
$class_name = '';
if (!empty($block['className'])) {
    $class_name .= ' ' . esc_attr($block['className']);
}

$sectionFriends = get_field('friends');
?>
    <section class="friends <?php echo $class_name; echo $anchor ?>">
        <div class="paragraph-img">
            <?php echo wp_get_attachment_image($sectionFriends['img'], 'medium'); ?>
        </div>

        <div class="paragraphs">
            <h3 class="member-name">
                <?php echo $sectionFriends['name']; ?>
            </h3>
            <div class="description-container">
                <p class="member-description"><?php echo $sectionFriends['description']; ?></p>
                <span class="btn-show-more">mehr ansehen</span>
            </div>
            <?php
            if ($sectionFriends['add_links'] == 'yes') {
                $rows = $sectionFriends['links_list'];
                if ($rows) {
                    echo '<ul class="responsibilities">';

                    foreach ($rows as $row) {
                        echo '<li class="responsibility">';
                        ?>
                        <a href=<?php echo $row['link_member']; ?> target="_blank"><?php echo $row['link-text']; ?></a>
                        <?php
                        echo '</li>';
                    }
                    echo '</ul>';
                }
            }
            ?>
        </div>
    </section>

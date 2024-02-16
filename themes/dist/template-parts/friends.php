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
$sectionFriend = $sectionFriends['friend'];
?>


<section class="friends  <?php echo $class_name;
echo $anchor ?>">
    <?php
    if ($sectionFriends['friend']) {
        $rows = $sectionFriends['friend'];
        if ($rows) {
            foreach ($rows as $row) { ?>
                <div class="friend" style="background-color:<?php echo $row['bg-color']; ?>">
                    <div class="friends-img">
                        <?php echo wp_get_attachment_image($row['img'], 'medium'); ?>
                    </div>
                    <div class="paragraphs">
                        <h3 class="member-name">
                            <?php echo $row['name']; ?>
                        </h3>
                        <div class="description-container">
                            <p class="member-description"><?php echo $row['description']; ?></p>
                            <span class="btn-show-more">mehr ansehen</span>
                        </div>
                        <?php
                        if ($row['links_list']) {
                            $rowLink = $row['links_list'];
                            echo '<ul class="friends-links">';

                            $linkIcons = get_field('link-icons', 'options');
                            $links = $row['links_list'];
                            $selectedLink = $links['select-links'];


                            if ($selectedLink && in_array('website', $selectedLink)) { ?>
                                <li>
                                    <a href="<?php echo $rowLink['link-website']; ?>" target="_blank" rel="noreferrer">
                                        <?php echo wp_get_attachment_image($linkIcons['icon-website'], 'small'); ?>
                                    </a>

                                </li>
                                <?php
                            }
                            if ($selectedLink && in_array('mail', $selectedLink)) { ?>
                                <li>
                                    <a href="<?php echo $rowLink['link-email']; ?>" target="_blank" rel="noreferrer">
                                        <?php echo wp_get_attachment_image($linkIcons['icon-email'], 'small'); ?>
                                    </a>
                                </li>
                                <?php
                            }

                            if ($selectedLink && in_array('instagram', $selectedLink)) { ?>
                                <li>
                                    <a href="<?php echo $rowLink['link-instagram']; ?>" target="_blank"
                                       rel="noreferrer">
                                        <?php echo wp_get_attachment_image($linkIcons['icon-instagram'], 'small'); ?>
                                    </a>
                                </li>
                                <?php
                            }

                            if ($selectedLink && in_array('facebook', $selectedLink)) { ?>
                                <li>
                                    <a href="<?php echo $rowLink['link-facebook']; ?>" target="_blank" rel="noreferrer">
                                        <?php echo wp_get_attachment_image($linkIcons['icon-facebook'], 'small'); ?>
                                    </a>
                                </li>
                                <?php
                            }

                            if ($selectedLink && in_array('youtube', $selectedLink)) { ?>
                                <li>
                                    <a href="<?php echo $rowLink['link-youtube']; ?>" target="_blank" rel="noreferrer">
                                        <?php echo wp_get_attachment_image($linkIcons['icon-youtube'], 'small'); ?>
                                    </a>
                                </li>
                                <?php
                            }

                            if ($selectedLink && in_array('mastodon', $selectedLink)) { ?>
                                <li>
                                    <a href="<?php echo $rowLink['link-mastodon']; ?>" target="_blank" rel="noreferrer">
                                        <?php echo wp_get_attachment_image($linkIcons['icon-mastodon'], 'small'); ?>
                                    </a>
                                </li>
                                <?php
                            }

                            if ($selectedLink && in_array('twitter', $selectedLink)) { ?>
                                <li>
                                    <a href="<?php echo $rowLink['link-twitter']; ?>" target="_blank" rel="noreferrer">
                                        <?php echo wp_get_attachment_image($linkIcons['icon-twitter'], 'small'); ?>
                                    </a>
                                </li>
                                <?php
                            }
                            if ($selectedLink && in_array('github', $selectedLink)) { ?>
                                <li>
                                    <a href="<?php echo $rowLink['link-github']; ?>" target="_blank" rel="noreferrer">
                                        <?php echo wp_get_attachment_image($linkIcons['icon-github'], 'small'); ?>
                                    </a>
                                </li>
                                <?php
                            }
                            if ($selectedLink && in_array('vimeo', $selectedLink)) { ?>
                                <li>
                                    <a href="<?php echo $rowLink['link-vimeo']; ?>" target="_blank" rel="noreferrer">
                                        <?php echo wp_get_attachment_image($linkIcons['icon-vimeo'], 'small'); ?>
                                    </a>
                                </li>
                                <?php
                            }

                            echo '</ul>';
                        }
                        ?>
                    </div>
                </div>

                <?php
            }
        }
    }

    ?>
</section>
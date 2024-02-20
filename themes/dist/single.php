<?php
get_header();

$blogInfo = get_field('blog-data');

?>
    <main id="single-post-page" class="content">
        <div class="blog-header">
            <div class="meta-data">
                <h1 id="page-headline"><?php the_title(); ?></h1>
                <?php
                if (!empty($blogInfo['start-date'])) {
                    echo '<p>' . $blogInfo['start-date'];
                }
                if (!empty($blogInfo['end-date'])) {
                    echo ' - ' . $blogInfo['end-date'];
                }
                echo '</p>';
                echo '<p>' . the_category(', ') . '</p>';
                ?>
            </div>
            <?php echo wp_get_attachment_image($blogInfo['post-img'], 'large'); ?>
        </div>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();

                include(dirname(__FILE__) . '/template-parts/img-gallery.php');
            }

        } ?>
        <div class="pagination">
            <div class="prev-link">
                <?php previous_post_link('%link', '&laquo; Vorheriger Beitrag: ' . '<span class="pagination-text">' . '%title' . '</span>', TRUE); ?>
            </div>
            <div class="next-link">
                <?php next_post_link('%link',  'Nächster Beitrag: ' . '<span class="pagination-text">' . '%title' . '</span>' . ' &raquo;', TRUE); ?>
            </div>
        </div>
    </main>
<?php
get_footer();
?>
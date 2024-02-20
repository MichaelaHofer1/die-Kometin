<?php
get_header();
?>

    <main id="blog-posts" class="content">
        <!--<h2>this is the category.php</h2>-->
        <h1 id="page-headline" class="headline-h1__border">
            <span class="headline-container">
            <?php
            $postsPage = get_option('page_for_posts');
            if (!empty ($postsPage)) {
                echo "<span>" . get_the_title($postsPage) . "</span>";
            } else {
                bloginfo('name');
            }
            ?>
            <span class="color1" style="border-color: #6c0052"></span>
            <span class="color2" style="border-color: deeppink"></span>
            </span>
        </h1>
        <h2 class="category-title">Alle Beiträge der Kategorie <span><?php echo single_cat_title(); ?></span></h2>

        <div class="post">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>

                    <article class="blog-post">
                        <div class="meta-data">
                            <h2 class="blog-post-title">
                                <?php the_title(); ?>
                                <a class="blog-link" href="<?php the_permalink(); ?>"></a>
                            </h2>
                            <?php
                            $blogInfo = get_field('blog-data');
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
                        <?php echo wp_get_attachment_image($blogInfo['post-img'], 'large') ?>

                    </article>
                    <?php
                }
            }
            ?>
        </div>
        <div class="pagination-blog">
            <?php
            echo paginate_links(array(
                'prev_text' => __('&laquo; Vorherige', 'textdomain'),
                'next_text' => __('Nächste &raquo;', 'textdomain'),
            ));
            ?>
        </div>


    </main>
<?php
get_footer();
?>
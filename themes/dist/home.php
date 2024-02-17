<?php
get_header();
?>

    <main>
        <!--<h2>this is the home.php</h2>-->

        <h1 id="page-headline">
            <?php
            $postsPage = get_option('page_for_posts');
            if (!empty ($postsPage)) {
                echo "<span>" . get_the_title($postsPage) . "</span>";
            } else {
                bloginfo('name');
            }
            ?>
        </h1>

        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

                <article class="blog-post">
                    <h2 class="blog-post-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="meta-data">
                        <?php
                        $duration = get_field('blog-data');
                        if (!empty($duration['end-date'])) {
                            echo '<p>' . $duration['start-date'];
                        }
                        if (!empty($duration['end-date'])) {
                            echo ' - ' . $duration['end-date'];
                        }
                        echo '</p>';
                        echo '<p>' . the_category(', ') . '</p>';
                        ?>
                    </div>

                </article>
                <?php
            }
        }
        ?>
    </main>
<?php
get_footer();
?>
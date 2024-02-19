<?php
get_header();
?>
    <main>
        <!--<h2>this is the index.php</h2>-->
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

                <?php
            }
        }
        ?>
    </main>
<?php
get_footer();
?>
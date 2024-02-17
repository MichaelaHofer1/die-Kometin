<?php
get_header();

$blogInfo = get_field('blog-data');

?>
	<main id="single-post-page" class="content">
        <!--<h2>this is the single.php</h2>-->

        <div class="blog-header">
            <div class="meta-data">
                <h1 id="page-headline"><?php the_title(); ?></h1>
                <?php
                if (!empty($blogInfo['end-date'])) {
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
		if(have_posts()){
			while(have_posts()){
				the_post();
				the_content();

                include (dirname( __FILE__ ) . '/template-parts/img-gallery.php');
			}
		}
		?>
	</main>
<?php
get_footer();
?>
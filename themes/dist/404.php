<?php
get_header();
?>
    <main>
        <?php $error = get_field('error_404', 'option') ?>
        <section id="error-page">
            <div class="error-message">
                <h1 id="page-headline">
                    <span><?php echo $error['error-message'] ?></span>
                    <?php echo $error['error-txt-404'] ?></h1>
                <div class="btn-back-home standard-btn">
                    <a href="<?php echo $error['home_btn'] ?>"><?php echo $error['btn-text'] ?></a>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
?>
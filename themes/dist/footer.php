<footer id="footer-page" class="container">


    <nav id="nav-footer">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'footer-nav-menu',
            'menu-id' => 'footer-menu',
            'fallback_cb' => false,
            'depth' => 1
        ));
        ?>
    </nav>
    <div class="social-icons">
        <?php
        $social_links = get_field('social-links', 'options');
        ?>

        <?php if($social_links['facebook']): ?>
            <a href="<?php echo $social_links['facebook']; ?>" target="_blank">
                <span class="icon-facebook2" aria-hidden="true"></span>
                <span class="screen-reader-text"><<?php _e('Follow on Facebook', 'wifi') ?></span>
            </a>
        <?php endif; ?>

        <?php if($social_links['instagram']): ?>
            <a href="<?php echo $social_links['instagram']; ?>"  target="_blank">
                <span class="icon-instagram" aria-hidden="true"></span>
                <span class="screen-reader-text">Folge mir auf Instagram</span>
            </a>
        <?php endif; ?>
    </div>


    <div class="copyright">
        <?php
        echo sprintf(__('&copy; %1$s %2$s'), get_bloginfo('name'), date('Y'));
        ?>
    </div>
</footer>


<div id="to-top">
    nach<br>oben
</div>

<?php
wp_footer();
?>

</body>
</html>
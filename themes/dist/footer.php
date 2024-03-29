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
    <div class="short_info">
        <p>
            <?php
            $info = get_field('info', 'options');
            echo $info['short_info'];
            ?>
        </p>
    </div>
    <div class="social-icons">
        <?php
        $social_links = get_field('social-links', 'options');
        ?>
        <?php if ($social_links['facebook']): ?>
            <a href="<?php echo $social_links['facebook']; ?>" target="_blank">
                <span class="icon-facebook2" aria-hidden="true"></span>
                <span class="screen-reader-text"><<?php _e('Follow on Facebook', 'kometin') ?></span>
            </a>
        <?php endif; ?>
        <?php if ($social_links['instagram']): ?>
            <a href="<?php echo $social_links['instagram']; ?>" target="_blank">
                <span class="icon-instagram" aria-hidden="true"></span>
                <span class="screen-reader-text"><<?php _e('Follow on Instagram', 'kometin') ?></span>
            </a>
        <?php endif; ?>
        <?php if ($social_links['email']): ?>
            <a href="mailto:<?php echo $social_links['email']; ?>" target="_blank">
                <span class="icon-mail" aria-hidden="true"></span>
                <span class="screen-reader-text"><<?php _e('Send an Email', 'kometin') ?></span>
            </a>
        <?php endif; ?>

        <?php if ($social_links['signal']):
            $signal = $social_links['signal'];
            ?>
            <a href="<?php echo $signal['signal-link']; ?>" target="_blank">
                <img src="<?php echo wp_get_attachment_image($signal['signal-icon'], 'small') ?>
                <span class="screen-reader-text"><<?php _e('Follow on Signal', 'kometin') ?></span>
            </a>
        <?php endif; ?>

        <?php if ($social_links['mobilizon']):
            $mobilizon = $social_links['mobilizon'];
            ?>
            <a class="mobilizon" href="<?php echo $mobilizon['mobilizon-link']; ?>" target="_blank">
                <img  src="<?php echo wp_get_attachment_image($mobilizon['mobilizon-icon'], 'small') ?>
                <span class="screen-reader-text"><<?php _e('Follow on Mobilizon', 'kometin') ?></span>
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
    <span class="color1"></span>
    <span class="color2"></span>
</div>
<?php
wp_footer();
?>
</body>
</html>
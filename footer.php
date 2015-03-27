<?php
/**
 * @package WordPress
 * @subpackage Theme
 */
?>

<footer id="footer">
    <ul id="footer-menu">
        <?php wp_nav_menu( array('theme_location' => 'foot_nav', 'menu' => 'Footer Menu', 'container' => '', 'items_wrap' => '%3$s' )); ?>
    </ul>
</footer>

<!-- site JS -->

<?php wp_footer(); ?>

</body>
</html>
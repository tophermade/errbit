<?php
/**
 * @package WordPress
 * @subpackage Theme
 * @manager
 * @remoteurl
 * @local http://localhost:8080
 */
?>
<!doctype html>
<html dir="ltr" lang="en">

<meta http-equiv="X-UA-Compatible"  content="IE=edge,chrome=1">
<meta http-equiv="Content-Type"     content="text/html; charset=UTF-8" />
<meta name="viewport"               content="width=device-width" />

<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php if ( is_single() ) {single_post_title('', true);} else {bloginfo('name'); echo " - "; bloginfo('description');}?>" />

<link type="text/plain" rel="author"        href="<?php bloginfo('stylesheet_directory'); ?>/humans.txt" />
<link id=site-css"      rel="stylesheet"    href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate"   type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback"    href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_single() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

</head>
<body <?php body_class();?>>

<nav id="nav">
    <strong id="logo">
        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </strong>

    <ul id="main-menu">
        <?php wp_nav_menu( array('theme_location' => 'main_nav', 'menu' => 'Main Menu', 'container' => '', 'items_wrap' => '%3$s' )); ?>
    </ul>
</nav>
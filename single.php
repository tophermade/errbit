<?php
/**
 * @package WordPress
 * @subpackage Theme
 */

get_header(); ?>

<?php get_template_part( 'parts/loop', 'default' ); ?>

<?php dynamic_sidebar('sidebar'); ?>

<?php get_footer(); ?>
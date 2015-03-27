<?php
/**
 * @package WordPress
 * @subpackage Theme
 */
?>

<?php if (have_posts()) : ?>

    <article class="article">
        <?php while (have_posts()) : the_post(); ?>

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <?php the_content(); ?>

        <?php endwhile; ?>
        <?php next_posts_link('Older') ?>
        <?php previous_posts_link('Newer') ?>
    </article>

<?php else : ?>

    <?php get_search_form(); ?>

<?php endif; ?>
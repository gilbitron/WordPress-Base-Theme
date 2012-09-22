<?php
/**
 * The template for displaying all pages.
 */
?>
<?php get_template_part( 'header' ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php comments_template( '', true ); ?>
<?php endwhile; ?>

<?php get_template_part( 'footer' ); ?>
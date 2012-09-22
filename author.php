<?php
/**
 * The template for displaying Author Archive pages
 */
?>
<?php get_template_part( 'header' ); ?>

<?php if ( have_posts() ): the_post(); ?>

<h2>Author Archives: <?php echo get_the_author() ; ?></h2>

<?php if ( get_the_author_meta( 'description' ) ) : ?>
<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
<h3>About <?php echo get_the_author() ; ?></h3>
<?php the_author_meta( 'description' ); ?>
<?php endif; ?>

<ol>
<?php rewind_posts(); while ( have_posts() ) : the_post(); ?>
	<li>
		<?php get_template_part( 'loop' ); ?>
	</li>
<?php endwhile; ?>
</ol>

<?php else: ?>
<h2>No posts to display for <?php echo get_the_author() ; ?></h2>	
<?php endif; ?>

<?php get_template_part( 'footer' ); ?>
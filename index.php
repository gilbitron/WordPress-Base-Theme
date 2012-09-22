<?php
/**
 * The main template file
 */
?>
<?php get_template_part( 'header' ); ?>

<?php if ( have_posts() ): ?>
<h2>Latest Posts</h2>	
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<?php get_template_part( 'loop' ); ?>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>

<?php get_template_part( 'footer' ); ?>
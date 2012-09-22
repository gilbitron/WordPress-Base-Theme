<?php
/**
 * The template used to display Tag Archive pages
 */
?>
<?php get_template_part( 'header' ); ?>

<?php if ( have_posts() ): ?>
<h2>Tag Archive: <?php echo single_tag_title( '', false ); ?></h2>
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<?php get_template_part( 'loop' ); ?>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display in <?php echo single_tag_title( '', false ); ?></h2>
<?php endif; ?>

<?php get_template_part( 'footer' ); ?>
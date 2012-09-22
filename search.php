<?php
/**
 * Search results page
 */
?>
<?php get_template_part( 'header' ); ?>

<?php if ( have_posts() ): ?>
<h2>Search Results for '<?php echo get_search_query(); ?>'</h2>	
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<?php get_template_part( 'loop' ); ?>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
<?php endif; ?>

<?php get_template_part( 'footer' ); ?>
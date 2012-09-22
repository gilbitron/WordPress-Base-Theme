<article>
	<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
	<?php the_content(); ?>
</article>
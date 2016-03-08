<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?> role="article">
	<section class="card-content">
		<h2><a href="<?php the_permalink() ?>" class="center" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
	</section>
	<footer class="card-content flow-text">

		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</footer>

</article>

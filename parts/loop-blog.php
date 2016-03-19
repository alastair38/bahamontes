<div class="parallax-container hide-on-small-only">
    <div class="parallax"><?php the_post_thumbnail('full');?></div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?> role="article">
	<section>
    <?php the_post_thumbnail('medium', array('class' => 'hide-on-med-and-up'));?>
		<h2><a href="<?php the_permalink() ?>" class="center" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
		<?php the_excerpt(); ?>
	</section>


</article>

<div id="byline" class="chip">
<?php
	if(is_single()) {
		echo get_avatar( get_the_author_meta( 'ID' ), 32 );
	} else {
		the_post_thumbnail('thumbnail');
	}
	?>
	Posted on <?php the_time('F j, Y') ?> <span class="hide-on-small-only">by <?php the_author_posts_link(); ?> - <?php the_category(', ') ?></span>
</div>

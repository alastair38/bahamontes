<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline-locations' ); ?>
    </header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
		<?php
		the_post_thumbnail('large', array('class' => 'hide-on-large-only responsive-img'));
		the_field('description'); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<?php get_template_part( 'parts/content', 'meta-locations' ); ?>
	</footer> <!-- end article footer -->

</article> <!-- end article -->

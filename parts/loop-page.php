<article id="post-<?php the_ID(); ?>" class="<?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header center">
		<h1 class="page-title"><?php the_title(); ?></h1>

		<? //var_dump($post);?>
	</header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
	</footer> <!-- end article footer -->



</article> <!-- end article -->

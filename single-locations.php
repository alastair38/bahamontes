<?php

get_header(); ?>

<div class="container">

	<div id="inner-content" class="row">

		<main id="main" class="col s12 m8" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'location' ); ?>


		</main> <!-- end #main -->

		<?php get_sidebar(); ?>

	<?php endwhile; ?>

	<?php endif; ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>

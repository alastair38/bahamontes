<?php
/*
Template Name: Form
*/

acf_form_head();

get_header(); ?>

	<div class="container">

		<div id="inner-content" class="row">

		    <main id="main" class="col s12" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>



			    <?php endwhile; endif; ?>

<?php get_template_part( 'parts/content', 'form' ); ?>


			</main> <!-- end #main -->

		    <?php // get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>

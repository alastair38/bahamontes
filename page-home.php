<?php
/*
Template Name: Home Page
*/

get_header(); ?>



	<div id="inner-content" class="container">

			<main id="main" class="row" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page-home' ); ?>


				<?php endwhile; endif; ?>


		</main> <!-- end #main -->

			<?php // get_sidebar(); ?>

	</div> <!-- end #inner-content -->



<div id="gettingStarted" class="row">
	<section class="col l12">
		<aside class="col l6 white-text center">
		<h3><?php _e( the_field('lh_title') ); ?></h3>
		<p id="intro" ><?php _e( the_field('lh_text')); ?></p>
		<?php $page = get_page_by_title( 'Form' );?>

		<a href="<?php the_field('lh_page_link');?>" class="btn">Report a Location</a>

	</aside>

		<aside class="col l5 card right">

				<?php get_template_part( 'parts/content', 'search-form' ); ?>

		</aside>


	</section>
	<div class="center">
		<a href="#about-pathways" class="waves-effect btn-large waves-circle waves-light materialize-red lighten-2 btn-floating"><i class="mdi mdi-chevron-down"></i></a>

	</div>
</div>

<div id="about-pathways" class="row">
	<section class="col l12">
		<aside class="col l6">
			<?php $page = get_page_by_title( 'Blog' );?>
			<h3><?php _e( $page->post_title ); ?></h3>
			<p>
				<?php _e ($page->post_excerpt);?>
			</p>

		<a href="<?php echo $page->guid?>" class="btn">Check Out The Blog</a>

	</aside>

		<aside class="col l6">
		<?php $page = get_page_by_title( 'About' );
		?>

		<h3><?php _e( $page->post_title ); ?></h3>
		<p>
			<?php _e ($page->post_excerpt);?>
		</p>

		<a href="<?php echo $page->guid?>" class="btn">Find Out More</a>


		</aside>


	</section>
</div>





<?php get_footer(); ?>

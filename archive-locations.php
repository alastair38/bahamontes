<?php get_header(); ?>

	<div class="container">

		<div id="inner-content" class="row">

		    <main id="main" class="col s12 m8 l8" role="main">

		    	<header>
		    		<h1 class="page-title">Locations</h1>
						<?php get_template_part( 'parts/content', 'mission' ); ?>
		    	</header>

		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-locations' ); ?>

				<?php endwhile; ?>


					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

			</main> <!-- end #main -->

			<?php get_sidebar(); ?>

	    </div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>

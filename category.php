<?php get_header(); ?>



		<div id="inner-content" class="row">

		    <main id="main" class="" role="main">

					<header>
						<h1 class="page-title center"><?php the_archive_title();?></h1>
					</header>

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'blog' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

		    </main> <!-- end #main -->



		</div> <!-- end #inner-content -->



<?php get_footer(); ?>

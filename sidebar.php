<div id="sidebar1" class="col s12 m4 l4" role="complementary">
	<div class="col s12">

		<?php
		if (is_single()) {
			the_post_thumbnail('large', array('class' => 'hide-on-med-and-down responsive-img'));
		}

		 ?>

		<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

			<?php dynamic_sidebar( 'sidebar1' ); ?>

		<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->

		<div class="alert help">
			<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
		</div>

		<?php endif; ?>
	</div>


</div>

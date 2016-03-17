<div id="sidebar1" class="col s12 m4 l4" role="complementary">
	<div class="col s12">

		<?php
		if (is_singular('post')) {
			the_post_thumbnail('large', array('class' => 'hide-on-med-and-down responsive-img'));
		} else {
			get_template_part( 'parts/content', 'search-form' );
		} ?>

	</div>


</div>

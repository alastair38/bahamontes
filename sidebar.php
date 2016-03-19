<div id="sidebar1" class="col s12 m4 l4" role="complementary">
	<div class="col s12">

		<?php
		if (is_singular('post')) {
			the_post_thumbnail('large', array('class' => 'hide-on-med-and-down responsive-img'));
			$page = get_page_by_title( 'Blog' );?>
			<div class="row hide-on-med-and-down">
       <div class="col s12">
         <div class="card-panel teal">
           <span class="white-text"><?php _e ($page->post_excerpt);?>
           </span>
         </div>
       </div>
     </div><?php
		} else {
			get_template_part( 'parts/content', 'search-form' );
		} ?>

	</div>


</div>

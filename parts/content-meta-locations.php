<div id="meta-locations">
	<div class="chip"><i class="mdi mdi-bell-ring"></i>	 <?php echo get_the_term_list( $post->ID,'problem_type', 'Reported Problem: ', ', ' ) ?></div>
	<div class="chip"><i class="mdi mdi-map-marker"></i>
		<?php echo get_the_term_list( $post->ID,'local_authority', 'Local Authority: ', ', ') ?>
	</div>
</div>

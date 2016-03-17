<div id="meta-locations">
	<div class="chip materialize-red lighten-2"><i class="mdi mdi-bell-ring"></i>	 <?php echo get_the_term_list( $post->ID,'problem_type', 'Reported Problem: ', ', ' ) ?></div>
	<div class="chip  green lighten-1"><i class="mdi mdi-map-marker"></i>
		<?php echo get_the_term_list( $post->ID,'local_authority', 'Local Authority: ', ', ') ?>
	</div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">

		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline-locations' ); ?>
    </header> <!-- end article header -->
    <section class="entry-content" itemprop="articleBody">
		<?php
		the_post_thumbnail('large', array('class' => 'hide-on-large-only responsive-img'));
		the_field('description'); ?>
		<footer class="article-footer">
			<?php get_template_part( 'parts/content', 'meta-locations' ); ?>
		</footer> <!-- end article footer -->

		<div class="row">
	 <div class="col s12">
		 <ul class="tabs">
			 <li class="tab col s3"><a class="active" href="#map">Map</a></li>
			 <li class="tab col s3"><a href="#photo">Photo</a></li>
		 </ul>
	 </div>
	 <div id="map" class="col s12">
		 <?php

$location = get_field('map');

			?>
				 <a href="http://maps.google.co.uk/maps/place/<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>/@<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>,15z" target="_blank" title="View map full screen" class="hide-on-med-and-down"><img src="https://maps.googleapis.com/maps/api/staticmap?zoom=13&size=400x200&scale=2&maptype=roadmap
&markers=color:green%7C<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>"></a>

			<a href="geo:<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>;u=35" class="hide-on-large-only"><img src="https://maps.googleapis.com/maps/api/staticmap?zoom=12&size=200x100&scale=2&maptype=roadmap
&markers=color:green%7C<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>"></a>

	 </div>
	 <div id="photo" class="col s12">
		 <?php
		 $image = get_field('picture');
		 if ($image) {
			 echo '<img src="' . $image . '" />';
		 } else {
			 echo '<p>
			No photo has been uploaded for this location
			 </p>';
		 }
		?>
	</div>
 </div>
		<div class="map">



			</div>
	</section> <!-- end article section -->




</article> <!-- end article -->

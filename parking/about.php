<?php

/* 
Template Name: about
*/
get_header();

?>

<!---start-contnet---->
		 <div class="content">
		 	
		 	<div class="about-us">
		 			<div class="wrap">
						<div class="about-header">
							<h3>About City taxi</h3>
							<div class="clear"> </div>
						</div>
						<div class="about-info">
							<a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus.</a>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan male</p>
						</div>
					<div class="specials">
					<div class="specials-heading">
						<h3>Latest-News</h3>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					<div class="specials-grids">
						<?php
						$arg=array('post_type'=>'post',
									'post_per_page'=>$attr['limit'],
									'order'=>'ASC'	
							);
						$loop= new WP_Query( $arg );
						while($loop->have_posts()): $loop->the_post();
						?>
						<div class="special-grid">
							<img src="<?php echo get_the_post_thumbnail_url();?>" title="image-name">
							<a href="<?php the_permalink();?>"><?php the_title()?></a>
							<p><?php echo the_content();?></p>
						</div>
						<?php
							endwhile;
							wp_reset_postdata();
						?>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
					</div>
					</div>
					<div class="testmonials">
						<div class="wrap">
							<div class="testmonial-grid">
								<h3>TESTIMONIALS :</h3>
								<p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. In volutpat luctus eros ac placerat. Quisque erat metus, facilisis non felis eu, aliquam hendrrit quam. Donec ut lectus vel dolor adipiscing tincidunt. Ut auctor diam at est iaculis, vitae interdum magna sagittis."</p>
								<a href="#"> - Lorem ipsum</a>
							</div>
						</div>
					</div>
		 	<!---End-about---->
		 </div>
<?php
get_footer();
?>
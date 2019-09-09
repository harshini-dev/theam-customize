<?php get_header();?>

			<!--start-image-slider---->
			<div class="slider">					     
					<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">	

					<?php
						if( have_rows('slider') ):
							while(have_rows('slider')):the_row();
							$slider_image=get_sub_field('slider_image')
					?>								           
						<div data-src="<?php echo $slider_image['url'];?>">  </div> 
						<?php
						endwhile;
						endif;
						?>
				
					</div>
					<div class="clear"> </div>					       
			</div>					
		 <!--End-image-slider---->
		 <!---start-contnet---->
		 <div class="content">
		 	<div class="top-grids">
		 		<div class="wrap">
			 		<h3>THE LARGEST TAXI SERVICES</h3>
			 		<h2>CITY TAXI</h2>
			 		<h4>COMPANY</h4>
			 		<ul>
			 			<li><a class="what" href="#">What we do?</a></li>
			 			<li><a class="join" href="#">Join us</a></li>
			 			<div class="clear"> </div>
			 		</ul>
		 		</div>
		 	</div>
		 	<div class="mid-grids">
		 		<div class="wrap">
		 			<?php 

                 $args = array( 'post_type' => 'services', 'posts_per_page' =>$attr['limit'],'order'=>'ASC' );
                 $loop = new WP_Query( $args );

                 while($loop->have_posts()){ $loop->the_post();
                  $taxonomy = 'testimonial_categories';
                  $terms    = get_the_terms(get_the_ID(),$taxonomy);
                  ?>
              
			 		<div class="mid-grid">
			 			<h3><?php echo the_title()?></h3>
			 			<a href="#"><img src="images/repair.png" title="repair" /></a>
			 			<?php echo $terms[0]->name?>
			 			<h4>It long established</h4>
			 			<p><?php echo the_content()?></p>
			 			<a class="button" href="#">More</a>
			 		</div>
			 		<?php
                  wp_reset_postdata();
                }
                ?>
			 		<div class="mid-grid">
			 			<h3>SPARES</h3>
			 			<a href="#"><img src="images/spares.png" title="spares" /></a>
			 			<h4>It long established</h4>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
			 			<a class="button" href="#">More</a>
			 		</div>
			 		<div class="mid-grid">
			 			<h3>SALES</h3>
			 			<a href="#"><img src="images/sales.png" title="sales" /></a>
			 			<h4>It long established</h4>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
			 			<a class="button" href="#">More</a>
			 		</div>
			 		<div class="clear"> </div>
		 		</div>
		 	</div>
		 	<?php get_footer();?>
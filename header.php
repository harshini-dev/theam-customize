<!DOCTYPE HTML>
<html <?php language_attributes();?>>
<head>
	<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css"  media="all" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_template_directory_uri();?>/css/slider.css" rel="stylesheet" type="text/css"  media="all" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
	<script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.easing.1.3.js"></script> 
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/camera.min.js"></script>
	<script type="text/javascript">
	jQuery(function(){
		jQuery('#camera_wrap_1').camera({
			height: '500px',
			pagination: false,
		});
	});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(jQuery) {
		jQuery(".scroll").click(function(event){		
			event.preventDefault();
			jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top},1200);
		});
	});
	</script>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
		<!---strat-wrap----->
		
			<!---strat-header----->
			<div class="header"  id="top">
				<div class="wrap">
					<!---start-logo---->
					<div class="logo">
						
						<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_url( $custom_logo_id , 'full' );
         echo '<a href="'.home_url().'"><img src="'.esc_url( $logo ).'" title="logo" /></a>';

          

    ?>
</div>
<!---End-logo---->
<!---start-top-nav---->
<div class="top-nav">
	<?php
	wp_nav_menu( array( 
		'theme_location' => 'primary', 
		'menu_id' => '',
		'menu_class' => '',
		'container' => 'ul' ) ); 
		?>
							<!-- <ul>
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="whatwe.html">What we do</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="contact.html">Contact</a></li>
								<div class="clear"> </div>
							</ul> -->
						</div>

						<div class="clear"> </div>
					</div>
				</div>
				<!--  -->
			<!---End-header----->

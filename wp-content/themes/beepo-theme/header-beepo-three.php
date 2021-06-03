<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Beepo_Careers
 * @since Beepo Careers 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/cropped-favicon-32x32.png" type="image/x-icon" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
	<script src="bower_components/html5shiv/dist/html5shiv.js"></script>
	<![endif]-->
	<title><?php wp_title(' | ', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-54495956-1"></script>
	<script>
	 window.dataLayer = window.dataLayer || [];
	 function gtag(){dataLayer.push(arguments);}
	 gtag('js', new Date());

	 gtag('config', 'UA-54495956-1');
	</script>
</head>
<body>
	<div id="page">
		<header id="masthead"> <!-- HEADER -->
			<!-- <div class="container"> -->
				<div class="row">
					<div class="col-lg-12">
						<div>
							<nav id="beepo-top-main-menu-v2" class="navbar navbar-expand-lg navbar-light">
								<div class="navbar-brand" href="#">
									<ul id="beepo-logo-main-container" class="no-padding-list-start beepo-main-logo-v2">
										<li>
										  	<div id="beepo-top-logo-container">
												<a href="<?php echo get_site_url(); ?>">
													<img src="<?php echo get_template_directory_uri(); ?>/images/Beepo-main-logo.png" id="beepo-top-logo" class="img-fluid" alt="Beepo outsourcing registered trademark logo">
												</a>
											</div>													
										</li>
										<li>
											<div class="home_page_header_contact_info">
												<?php dynamic_sidebar( 'home_page_header_contact_info' ); ?>
											</div>
										</li>
									</ul>		
								</div>
								<div class="beepo-mobile-nav beepo-career-clear-floats">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
								</div>	
									<?php
										wp_nav_menu( array( 
										    'theme_location' => 'main-menu', 
										    'container_id' => 'navbarNav',
										    'container_class' => 'collapse navbar-collapse justify-content-end beepo-main-nav-2',
										    'items_wrap'=>'<ul class="navbar-nav">%3$s</ul>') 
										); 
									?>
							</nav>
							<div id="home_page_header_contact_info_mobile">
								<?php dynamic_sidebar( 'home_page_header_contact_info' ); ?>
							</div>
						</div>
					</div>
				</div>
			<!-- </div> -->
		</header> <!-- END HEADER -->
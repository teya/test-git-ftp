		<footer id="beepo-main-footer-three">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<div id="footer-logo-container">
							<img src="<?php bloginfo('template_directory'); ?>/images/beepo-a-probe-group-company-footer-logo.png" alt="Beepo - A Probe Property Group">
						</div>
					</div>
					<div class="col-lg-3">
						<?php
							wp_nav_menu( array( 
							    'theme_location' => 'main-menu', 
							    'container_id' => 'footer-main-nav-wrapper',
							    'container_class' => '',
							    'items_wrap'=>'<ul class="footer-main-nav">%3$s</ul>') 
							); 
						?>					
					</div>
					<div class="col-lg-7">
						<div id="footer-social-container">
							<div class="row">
								<div class="col-lg-5">
									<ul class="footer-social-links">
										<li>
											<a href="mailto:talentacquisition@beepo.com.au">
												<i class="far fa-envelope"></i>&nbsp;talentacquisition@beepo.com.au
											</a>
										</li>
										<li>
											<a href="tel:+639176583430">
												<span class="lnr lnr-phone"></span>&nbsp;+63 917 658 3430
											</a>
										</li>
									</ul>
								</div>
								<div class="col-lg-4">
									<ul class="footer-social-links">
										<li>
											<a href="https://www.facebook.com/BeepoPHCareers/" target="_blank">
												<i class="fab fa-facebook-f"></i>&nbsp;/BeepoPHCareers
											</a>
										</li>
										<li>
											<a href="https://ph.linkedin.com/company/beepo/" target="_blank">
												<i class="fab fa-linkedin-in"></i>&nbsp;/Beepo
											</a>
										</li>
									</ul>								
								</div>
								<div class="col-lg-3">
									<ul class="footer-social-links">
										<li>
											<a href="https://twitter.com/BeepoLtd/" target="_blank">
												<i class="fab fa-twitter"></i>&nbsp;@BeepoLtd
											</a>
										</li>
										<li>
											<a href="https://www.youtube.com/user/BeepoInAction" target="_blank">
												<i class="fab fa-youtube"></i>&nbsp;beepoinaction
											</a>
										</li>
									</ul>									
								</div>
							</div>
						</div> <!-- #footer-social-container -->
					</div>					
				</div>
				<div class="row">
					<div class="col-lg-12">
						<ul id="main-bottom-footer-nav">
							<li>
								Copyright Beepo <?php echo date("Y"); ?>
							</li>
							<li>
								<a href="<?php echo get_home_url(); ?>/terms-and-conditions/" target="_blank">Terms &amp; Conditions</a>
							</li>
							<li>
								<a href="<?php echo get_home_url(); ?>/privacy-policy/" target="_blank">Privacy Policy</a>
							</li>
						</ul>									
					</div>
				</div>
			</div>

		</footer>
	</div>
</body>
<?php wp_footer(); ?>
</html> 
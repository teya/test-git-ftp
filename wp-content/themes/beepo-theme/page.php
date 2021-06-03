<?php get_header(); ?>
	<main id="beepo-careers-default-page" role="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
					endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>					
				</div>
			</div>
		</div>
	</main>
<?php get_footer('beepo-two'); ?>
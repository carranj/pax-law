<?php get_header(); ?>

<section id="intro">
	<div class="banner-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php wp_title(''); ?></h1>
			</div>
		</div>

	</div>
</section>

		<?php
		if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="container">
		<?php
			get_template_part( 'page-templates/flexible_content/flexible_content' );
		?>
		
		</div>
		<?php 
		endwhile;
		else :
		?>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Oh No!</h1>
					<p>No Content is appearing for this page!</p>	
				</div>
			</div>
		</div>
		<?php endif; ?>




<?php get_footer(); ?>
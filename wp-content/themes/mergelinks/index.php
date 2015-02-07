<?php get_header(); ?>

<div class="window wow fadeIn">
	<div class="landing-page">
		<div class="content wow bounceInLeft" data-wow-delay="1s">
			
			<div class="logo">
			
			<?php get_template_part('svg/svg', 'mergelinks_logo' ); ?>

			</div>

			<div class="sub-title">
				MergeLinks is a weekly email of curated links to articles, resources, freebies and inspiration for web designers and developers 

			</div>
			
			
		<?php get_template_part('partials/partials', 'mailchimp_signup' ); ?>
				
				
		</div>
	</div>
</div>

<?php get_footer(); ?>
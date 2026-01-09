<?php get_header(); ?>

<section class="single-page py-15">
	<div class="container mx-auto">
		<div class="the-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
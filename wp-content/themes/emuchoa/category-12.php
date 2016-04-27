<?php get_header(); ?>
	
	<div id="primary">
		<div id="content" role="main">
			<?php while ( have_posts() ) { ?>
				<?php the_post(); ?>
				<?php get_template_part( 'content-resumo' ); ?>
			<?php } ?>
		</div>

		<div class="paginate grid_22 prefix_1">
			<?php post_pagination();?>
		</div>
	</div>
	<!-- #Post -->

<?php get_footer(); ?>
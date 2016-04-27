<?php get_header(); ?>
	
	<style type="text/css">
		#main{
			background: #FFF url(<?php echo get_template_directory_uri(); ?>/images/background-quem-somos.png) bottom right no-repeat;
		}
	</style>

	<!-- Post -->
	<div id="primary">
		<div id="content" role="main" class="quem-somos">
			<?php query_posts('cat=5,orderby=date&order=DESC'); ?>
			<?php if (have_posts()) { ?>
				<?php while ( have_posts() ) { ?>
					<?php the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>">
						<header class="entry-header">
							<div class="title-bar grid_24 alpha">
								<h1><?php echo get_the_title(); ?></h1>
							</div>
						</header>

						<div class="grid_14 prefix_1 suffix_1">
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</div>

						<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($compromisso->ID), 'thumbnail_size' ); ?>
						<?php if (!empty($thumb)) { ?>
							<div class="foto-quem-somos grid_7 prefix_1 alpha">
								<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=225&amp;h=310&amp;zc=1&amp;f=png" width="225" height="310" alt="<?php echo get_the_title($post->post_title); ?>" />
							</div>
						<?php } ?>
					</article>

				<?php } ?>
			<?php } ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>
	<!-- #Post -->

<?php get_footer(); ?>
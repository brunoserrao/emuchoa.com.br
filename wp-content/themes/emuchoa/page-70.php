<?php get_header(); ?>

	<!-- Post -->
	<div id="primary">
		<div id="content" role="main">
				<?php while ( have_posts() ) { ?>
					<?php the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>">
						<header class="entry-header">
							<div class="title-bar grid_24 alpha">
								<h1><?php echo get_the_title(); ?></h1>
							</div>
						</header>

						<div class="grid_12 prefix_1 suffix_1">
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</div>

						<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($compromisso->ID), 'thumbnail_size' ); ?>

						
					</article>

				<?php } ?>
			
			<div class="clear"></div>

			<div id="downloads" class="grid_12 prefix_1 suffix_1" style="height: 310px; overflow: scroll;">
				<?php query_posts('cat=6,orderby=date&order=DESC'); ?>
				<?php if (have_posts()) { ?>
					<ul id="lista-download">
						<?php while ( have_posts() ) { ?>
							<?php the_post(); ?>
							<li>
								<h3><?php echo get_the_title() ?></h3>
								<?php the_content() ?>
							</li>
						<?php } ?>
					</ul>
				<?php } ?>
				<?php wp_reset_query(); ?>
			</div>

			<div class="foto-quem-somos grid_9 alpha">
				<?php if (!empty($thumb)) { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=390&amp;h=310&amp;zc=1" width="390" height="310" alt="<?php echo get_the_title($post->post_title); ?>" />
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- #Post -->

<?php get_footer(); ?>
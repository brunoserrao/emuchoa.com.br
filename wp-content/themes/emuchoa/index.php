<?php get_header(); ?>
	
	<div id="home">

		<!-- Compromisso -->
		<?php $compromisso = get_page(5);?>
		<?php if (!empty($compromisso)) { ?>			
			<div class="compromisso">
				<a href="<?php echo get_permalink(54) ?>" title="<?php echo get_the_title() ?>">
					<div class="title-bar grid_24 alpha">
							<h3><?php echo $compromisso->post_title; ?></h3>
					</div>
				</a>

				<div class="text-intro grid_10 prefix_1">
					<?php echo apply_filters('the_excerpt', $compromisso->post_content); ?>

					<div class="leia-mais">
						<a href="<?php echo get_permalink(54) ?>" title="<?php echo get_the_title() ?>">
							Conheça mais.
						</a>
					</div>
				</div>

				<div class="grid_12 foto">
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($compromisso->ID), 'thumbnail_size' ); ?>
					<a href="<?php echo get_permalink(54) ?>" title="<?php echo get_the_title() ?>">
						<?php if (!empty($thumb)) { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=425&amp;h=210&amp;zc=1" width="425" height="210" alt="<?php echo get_the_title($post->post_title); ?>" />
						<?php } else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo get_template_directory_uri(); ?>/images/404.jpg&amp;w=425&amp;h=210&amp;zc=1" width="425" height="210" alt="<?php echo get_the_title($post->post_title); ?>" />
						<?php } ?>
					</a>
				</div>
			</div>
		<?php } ?>
		<!-- #Compromisso -->

		<div class="clear"></div>

		<!-- Projetos -->
		<?php query_posts('cat=7,8,9&posts_per_page=9&orderby=date&order=DESC'); ?>
		<?php if (have_posts()) {  ?>
			<div class="projetos">

				<?php rewind_posts(); ?>

				<a href="<?php echo get_permalink(84) ?>">
					<div class="title-bar grid_24 alpha">
						<h3><?php echo get_the_category_by_ID(2); ?></h3>
					</div>
				</a>

				<div class="clear"></div>

				<ul class="projetos-content">
					<?php while (have_posts()) { ?>
						<?php the_post(); ?>
						<li class="projeto">
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' ); ?>
							<a href="<?php echo get_permalink(84); ?>#<?php $categories = get_the_category(); echo $categories[0]->slug; ?>" title="<?php echo get_the_title(); ?>">
								<?php if (!empty($thumb)) { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=250&amp;h=220&amp;zc=1" width="250" height="220" alt="<?php echo get_the_title($post->post_title); ?>" />
								<?php } else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo get_template_directory_uri(); ?>/images/404.jpg&amp;w=250&amp;h=220&amp;zc=1" width="250" height="220" alt="<?php echo get_the_title($post->post_title); ?>" />
								<?php } ?>
							</a>

							<div class="projeto-title">
								<?php echo get_the_title() ?>
							</div>
						</li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>
		<?php wp_reset_query(); ?>
		<!-- #Projetos -->

		<div class="clear"></div>

		<!-- Projetos -->
		<?php query_posts('cat=12&posts_per_page=9&orderby=date&order=DESC'); ?>
		<?php if (have_posts()) {  ?>
			<div class="projetos">

				<?php rewind_posts(); ?>

				<a href="<?php echo get_category_link(12) ?>">
					<div class="title-bar grid_24 alpha">
						<h3><?php echo get_the_category_by_ID(12); ?></h3>
					</div>
				</a>

				<div class="clear"></div>

				<ul class="projetos-content">
					<?php while (have_posts()) { ?>
						<?php the_post(); ?>
						<li class="projeto">
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' ); ?>
							<a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>">
								<?php if (!empty($thumb)) { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=250&amp;h=220&amp;zc=1" width="250" height="220" alt="<?php echo get_the_title($post->post_title); ?>" />
								<?php } else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo get_template_directory_uri(); ?>/images/404.jpg&amp;w=250&amp;h=220&amp;zc=1" width="250" height="220" alt="<?php echo get_the_title($post->post_title); ?>" />
								<?php } ?>
							</a>

							<div class="projeto-title">
								<?php echo get_the_title() ?>
							</div>
						</li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>
		<?php wp_reset_query(); ?>
		<!-- #Projetos -->
	</div>

<?php get_footer(); ?>
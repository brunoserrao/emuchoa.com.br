<?php get_header(); ?>
	
	<!-- Post -->
	<div id="primary">
		<div id="content" role="main" class="clientes">
			
			<!-- Projetos -->
			<div class="grid_24 alpha">

 				<ul id="abas">
					<li class="aba-destaques"><a href="#tab1"><?php echo get_the_category_by_ID(7) ?></a></li>
					<li class="aba-reforcos"><a href="#tab4"><?php echo get_the_category_by_ID(15) ?></a></li>
					<li class="aba-recentes"><a href="#tab2"><?php echo get_the_category_by_ID(8) ?></a></li>
					<li class="aba-gerais"><a href="#tab3"><?php echo get_the_category_by_ID(9) ?></a></li>
				</ul>

				<!-- conteudo das abas -->
				<div id="tab1" class="contaba destaques">
					<a name="tab1" />
					<?php query_posts('cat=7&posts_per_page=100&orderby=date&order=DESC'); ?>
					<?php while ( have_posts() ) { ?>
						<?php the_post(); ?>
						<?php get_template_part( 'content-projeto' ); ?>
					<?php } ?>
				</div>

				<div id="tab2" class="contaba recentes">
					<a name="tab2" />
					<?php query_posts('cat=8,&posts_per_page=100&orderby=date&order=DESC'); ?>

					<?php while ( have_posts() ) { ?>
						<?php the_post(); ?>
						<?php get_template_part( 'content-projeto' ); ?>
					<?php } ?>
				</div>

				<div id="tab3" class="contaba gerais">
					<a name="tab3" />
					<?php query_posts('cat=9&posts_per_page=100&orderby=date&order=DESC'); ?>
					<?php while ( have_posts() ) { ?>
						<?php the_post(); ?>
						<?php get_template_part( 'content-projeto' ); ?>
					<?php } ?>
				</div>

				<div id="tab4" class="contaba reforcos">
					<a name="tab4" />
					<?php query_posts('cat=15&posts_per_page=100&orderby=date&order=DESC'); ?>
					<?php while ( have_posts() ) { ?>
						<?php the_post(); ?>
						<?php get_template_part( 'content-projeto' ); ?>
					<?php } ?>
				</div>
			</div>
			<!-- #Projetos -->

			<!-- Clientes -->
			<?php query_posts('cat=10&posts_per_page=100&orderby=date&order=DESC'); ?>

			<div class="title-bar grid_24 alpha">
				<h1><?php echo get_the_category_by_ID(10); ?></h1>
			</div>

			<div class="grid_20 prefix_2 suffix_2">

				<?php while ( have_posts() ) { ?>
					<?php the_post(); ?>
					<div class="grid_5 alpha clientes-logo">
						<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($compromisso->ID), 'thumbnail_size' ); ?>
						<a href="<?php echo get_the_content() ? get_the_content() : 'javascript:void(0)'?> " target="_blank" title="<?php echo get_the_title(); ?>">
							<?php if (!empty($thumb)) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=180&amp;h=130&amp;zc=1" width="180" height="130" alt="<?php echo get_the_title($post->post_title); ?>" />
							<?php } else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo get_template_directory_uri(); ?>/images/404.jpg&amp;w=180&amp;h=130&amp;zc=1" width="180" height="130" alt="<?php echo get_the_title($post->post_title); ?>" />
							<?php } ?>
						</a>
					</div>
				<?php } ?>

			</div>
			<!-- #Clientes -->

			<!-- Clientes -->
			<?php query_posts('cat=13,orderby=date&order=DESC'); ?>
			<?php if (have_posts()) { ?>

				<div class="title-bar grid_24 alpha">
					<h1><?php echo get_the_category_by_ID(13); ?></h1>
				</div>

				<div class="grid_20 prefix_2 suffix_2">

					<?php while ( have_posts() ) { ?>
						<?php the_post(); ?>
						<div class="grid_5 alpha clientes-logo">
							<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($compromisso->ID), 'thumbnail_size' ); ?>
							<?php if (!empty($thumb)) { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=180&amp;h=130&amp;zc=1" width="180" height="130" alt="<?php echo get_the_title($post->post_title); ?>" />
							<?php } else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo get_template_directory_uri(); ?>/images/404.jpg&amp;w=180&amp;h=130&amp;zc=1" width="180" height="130" alt="<?php echo get_the_title($post->post_title); ?>" />
							<?php } ?>
						</div>
						

						<div class="single grid_14">
							<div class="entry-title">
								<h2><?php echo get_the_title(); ?></h2>
							</div>
							<?php the_content() ?>
						</div>

						<div class="clear"></div>
					<?php } ?>

				</div>
			<?php } ?>
			<!-- #Clientes -->
			
		</div>
	</div>
	<!-- #Post -->
<?php get_footer(); ?>
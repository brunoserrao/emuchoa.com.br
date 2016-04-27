
<div class="single">
	<article id="post-<?php the_ID(); ?>">
		<header class="entry-header">

			<div class="grid_4 prefix_1 img-destaque">
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($compromisso->ID), 'thumbnail_size' ); ?>
				<a href="<?php echo get_permalink() ?>">
					<?php if (!empty($thumb)) { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=150&amp;h=170&amp;zc=1&amp;f=png" width="150" height="170" alt="<?php echo get_the_title(); ?>" />
					<?php } else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo get_template_directory_uri(); ?>/images/sem-imagem.jpg&amp;w=150&amp;h=170&amp;zc=1&amp;f=png" width="150" height="170" alt="<?php echo get_the_title(); ?>" />
					<?php } ?>
				</a>
			</div>			

			<div class="grid_19 entry-title">
				<a href="<?php echo get_permalink() ?>">
					<h1><?php echo get_the_title(); ?></h1>
				</a>

				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</header>

		<div class="grid_22 prefix_1 suffix_1">
			
		</div>
	</article>
</div>
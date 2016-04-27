<?php // for ($i=0; $i < 12; $i++) {  ?>
	<div class="suffix_1 grid_4 prefix_1 content-projeto alpha omega">
		<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($compromisso->ID), 'thumbnail_size' ); ?>
		<a href="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=<?php echo $thumb[1];?>&amp;h=<?php echo $thumb[2];?>&amp;zc=1&amp;fltr[]=wmi|../marcafoto.png|BR|100" title="<?php echo get_the_title(); ?>" class="colorbox" rel="colorbox">
			<?php if (!empty($thumb)) { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=150&amp;h=165&amp;zc=1" width="150" height="165" alt="<?php echo get_the_title($post->post_title); ?>" />
			<?php } else { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo get_template_directory_uri(); ?>/images/404.jpg&amp;w=150&amp;h=165&amp;zc=1" width="150" height="165" alt="<?php echo get_the_title($post->post_title); ?>" />
			<?php } ?>
		</a>
		<strong><?php echo get_the_title(); ?></strong>
		<?php echo the_content(); ?>
	</div>
<?php // } ?>

<div id="single">
	<article id="post-<?php the_ID(); ?>">
		<header class="entry-header">
			<div class="title-bar grid_24 alpha">
				<h3><?php echo get_the_title(); ?></h3>
			</div>
		</header>

		<div class="grid_22 prefix_1 suffix_1">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
</div>
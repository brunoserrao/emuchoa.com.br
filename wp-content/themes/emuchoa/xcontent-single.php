
<div class="single">
	<article id="post-<?php the_ID(); ?>">
		<header class="entry-header">
			<div class="grid_22 prefix_1 entry-title">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
		</header>

		<div class="grid_22 prefix_1 suffix_1">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
	</article>
</div>
		<div class="clear"></div>
		<div class="shadow-2"></div>
	</div>
	<!-- #Main -->

	<div id="footer" class="container_24">
		<footer id="colophon" role="contentinfo">
			<div class="grid_6">
				<img src="<?php echo get_template_directory_uri() ?>/images/footer/footer-emuchoa.png" width="230" height="76" alt="<?php bloginfo( 'name' ); ?> " />
			</div>

			<div class="grid_1">
				<img src="<?php echo get_template_directory_uri() ?>/images/footer/footer-columm.png" width="30" height="76" alt="<?php bloginfo( 'name' ); ?> " />
			</div>

			<div class="grid_6">
				<img src="<?php echo get_template_directory_uri() ?>/images/footer/footer-endereco.png" width="240" height="76" alt="<?php bloginfo( 'name' ); ?> " />
			</div>

			<!-- Orçamento -->
			<?php $orcamento = get_page(24); ?>
			<?php if (!empty($orcamento)) {  ?>
				<div class="grid_6 prefix_4 suffix_1 orcamento">
					<a href="<?php echo get_permalink($orcamento->ID); ?>" title="<?php echo get_the_title($orcamento->ID); ?>">
						<img src="<?php echo get_template_directory_uri() ?>/images/footer/footer-solicite-orcamento.png" width="233" height="76" alt="<?php bloginfo( 'name' ); ?> " />
					</a>
				</div>
			<?php } ?>
			<!-- #Orçamento -->
		</footer>
	</div>
</body>
</html>
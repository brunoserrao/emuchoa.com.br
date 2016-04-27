<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

		?>
	</title>

	<!-- Links -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- #links -->

	<!-- Css -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/960_24_col.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/colorbox.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
	<!-- #Css -->

	<!-- Scripts -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.3.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput-1.3.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/Helvetica_Neue_LT_Std_300.font.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js" type="text/javascript"></script>
	<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script><![endif]-->
	<!-- #Scripts -->

	<!-- Google Analytics -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-823596-5']);
		_gaq.push(['_setDomainName', 'emuchoa.com.br']);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

	<?php wp_head(); ?>
</head>

<body>

	<!-- Header -->
	<div id="header">
		<div class="container_24">
			<header id="branding" role="banner">

				<div id="logo-menu">
					<!-- Logo -->
					<a href="<?php echo home_url('/'); ?>" title="<?php echo bloginfo('name'); ?>">
						<div class="logo">
							&nbsp;
						</div>
					</a>
					<!-- #Logo -->

					<!-- Menu -->
					<div class="menu-header helvetica">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					</div>
					<!-- #Menu -->
				</div>

				<!-- Banners -->
				<div id="banners">
					<div class="content">
						<?php query_posts('post_type=post&cat=3&posts_per_page=10&orderby=date&order=DESC'); ?>
						<?php if(have_posts()){ ?>
							<?php while (have_posts()) { ?>
								<div class="content-banner">
									<?php the_post() ?>
									<?php $link = (bool)get_post_meta(get_the_ID(), 'link', true); ?>
									<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'thumbnail_size' ); ?>
									<a href="<?php echo $link ? get_permalink() : 'javascript:void(0)'; ?>" title="<?php echo get_the_title(); ?>">
										<?php if (!empty($thumb)) { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo $thumb[0];?>&amp;w=960&amp;h=440&amp;zc=1" width="960" height="440" alt="<?php echo get_the_title($post->post_title); ?>" />
										<?php } else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/phpThumb/phpThumb.php?src=<?php echo get_template_directory_uri(); ?>/images/404.jpg&amp;w=960&amp;h=440&amp;zc=1" width="960" height="440" alt="<?php echo get_the_title($post->post_title); ?>" />
										<?php } ?>
									</a>
								</div>
							<?php } ?>
						<?php } ?>
						<?php wp_reset_query(); ?>
					</div>

					<div class="cycle-prev"></div>

					<div class="cycle-next"></div>

					<div class="cycle-pager"></div>
					
				</div>
				<!-- #Banners -->
			</header>
		</div>
	</div>
	<!-- #Header -->


	<div id="main" class="container_24">
		<div class="shadow-1"></div>
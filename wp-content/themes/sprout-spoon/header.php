<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="wrapper">

		<header id="header">

			<div class="container">

				<?php if(!get_theme_mod('sprout_spoon_header_social')) : ?>
				<div id="top-social">
					<?php if(get_theme_mod('sprout_spoon_facebook')) : ?><a href="http://facebook.com/<?php echo esc_html(get_theme_mod('sprout_spoon_facebook')); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_twitter')) : ?><a href="http://twitter.com/<?php echo esc_html(get_theme_mod('sprout_spoon_twitter')); ?>" target="_blank"><i class="fab fa-twitter"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_instagram')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('sprout_spoon_instagram')); ?>" target="_blank"><i class="fab fa-instagram"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_pinterest')) : ?><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('sprout_spoon_pinterest')); ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo esc_html(get_theme_mod('sprout_spoon_bloglovin')); ?>" target="_blank"><i class="far fa-heart"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_google')) : ?><a href="http://plus.google.com/<?php echo esc_html(get_theme_mod('sprout_spoon_google')); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_tumblr')) : ?><a href="http://<?php echo esc_html(get_theme_mod('sprout_spoon_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fab fa-tumblr"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_youtube')) : ?><a href="http://youtube.com/<?php echo esc_html(get_theme_mod('sprout_spoon_youtube')); ?>" target="_blank"><i class="fab fa-youtube"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_dribbble')) : ?><a href="http://dribbble.com/<?php echo esc_html(get_theme_mod('sprout_spoon_dribbble')); ?>" target="_blank"><i class="fab fa-dribbble"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_soundcloud')) : ?><a href="http://soundcloud.com/<?php echo esc_html(get_theme_mod('sprout_spoon_soundcloud')); ?>" target="_blank"><i class="fab fa-soundcloud"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_vimeo')) : ?><a href="http://vimeo.com/<?php echo esc_html(get_theme_mod('sprout_spoon_vimeo')); ?>" target="_blank"><i class="fab fa-vimeo-v"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_linkedin')) : ?><a href="<?php echo esc_html(get_theme_mod('sprout_spoon_linkedin')); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_snapchat')) : ?><a href="http://snapchat.com/add/<?php echo esc_html(get_theme_mod('sprout_spoon_snapchat')); ?>" target="_blank"><i class="fab fa-snapchat-ghost"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('sprout_spoon_rss')); ?>" target="_blank"><i class="fas fa-rss"></i></a><?php endif; ?>
				</div>
				<?php endif; ?>

				<div class="social-icons">
					<a href="https://www.instagram.com/wild.lovage/<?php echo esc_html(get_theme_mod('sprout_spoon_instagram')); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
					<a href="https://www.pinterest.co.uk/0n69uuoq9nfu4bmud91y1w7nnzsa68/<?php echo esc_html(get_theme_mod('sprout_spoon_pinterest')); ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a>
				</div>

				<div id="logo">
					<?php if(!get_theme_mod('sprout_spoon_logo')) : ?>

						<?php if(is_front_page()) : ?>
							<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
						<?php else : ?>
							<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
						<?php endif; ?>

					<?php else : ?>

						<?php if(is_front_page()) : ?>
							<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod('sprout_spoon_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
						<?php else : ?>
							<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_theme_mod('sprout_spoon_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
						<?php endif; ?>

					<?php endif; ?>
				</div>

				<?php if(!get_theme_mod('sprout_spoon_header_search')) : ?>
				<div id="top-search">
					<?php get_search_form(); ?>
				</div>
				<?php endif; ?>

			</div>

		</header>

		<nav id="navigation">

			<div class="container">

				<div id="nav-wrapper">
					<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
				</div>

				<div class="menu-mobile"></div>

					<div id="mobile-social">

					<?php if(get_theme_mod('sprout_spoon_facebook')) : ?><a href="http://facebook.com/<?php echo esc_html(get_theme_mod('sprout_spoon_facebook')); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_twitter')) : ?><a href="http://twitter.com/<?php echo esc_html(get_theme_mod('sprout_spoon_twitter')); ?>" target="_blank"><i class="fab fa-twitter"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_instagram')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('sprout_spoon_instagram')); ?>" target="_blank"><i class="fab fa-instagram"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_pinterest')) : ?><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('sprout_spoon_pinterest')); ?>" target="_blank"><i class="fab fa-pinterest-p"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo esc_html(get_theme_mod('sprout_spoon_bloglovin')); ?>" target="_blank"><i class="far fa-heart"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_google')) : ?><a href="http://plus.google.com/<?php echo esc_html(get_theme_mod('sprout_spoon_google')); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_tumblr')) : ?><a href="http://<?php echo esc_html(get_theme_mod('sprout_spoon_tumblr')); ?>.tumblr.com/" target="_blank"><i class="fab fa-tumblr"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_youtube')) : ?><a href="http://youtube.com/<?php echo esc_html(get_theme_mod('sprout_spoon_youtube')); ?>" target="_blank"><i class="fab fa-youtube"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_dribbble')) : ?><a href="http://dribbble.com/<?php echo esc_html(get_theme_mod('sprout_spoon_dribbble')); ?>" target="_blank"><i class="fab fa-dribbble"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_soundcloud')) : ?><a href="http://soundcloud.com/<?php echo esc_html(get_theme_mod('sprout_spoon_soundcloud')); ?>" target="_blank"><i class="fab fa-soundcloud"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_vimeo')) : ?><a href="http://vimeo.com/<?php echo esc_html(get_theme_mod('sprout_spoon_vimeo')); ?>" target="_blank"><i class="fab fa-vimeo-v"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_linkedin')) : ?><a href="<?php echo esc_html(get_theme_mod('sprout_spoon_linkedin')); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a><?php endif; ?>
					<?php if(get_theme_mod('sprout_spoon_rss')) : ?><a href="<?php echo esc_url(get_theme_mod('sprout_spoon_rss')); ?>" target="_blank"><i class="fas fa-rss"></i></a><?php endif; ?>

					</div>

			</div>

		</nav>

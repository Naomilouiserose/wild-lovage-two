<?php get_header(); ?>






	<div class="container">

		<div id="content" class="blog-page-container">

			<div id="main" <?php if(get_theme_mod('sprout_spoon_sidebar_homepage') == true) : ?>class="fullwidth"<?php endif; ?>>

				<?php if(get_theme_mod('sprout_spoon_home_layout') == 'grid3' || get_theme_mod('sprout_spoon_home_layout') == 'full_grid3') : ?>
					<ul class="sp-grid col3">


				<?php elseif(get_theme_mod('sprout_spoon_home_layout') == 'grid2' || get_theme_mod('sprout_spoon_home_layout') == 'full_grid2') : ?>
					<ul class="sp-grid col2">

				<?php endif; ?>


				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php if(get_theme_mod('sprout_spoon_home_layout') == 'grid3' || get_theme_mod('sprout_spoon_home_layout') == 'grid2') : ?>

						<?php get_template_part('content', 'grid'); ?>

					<?php elseif(get_theme_mod('sprout_spoon_home_layout') == 'full_grid3' || get_theme_mod('sprout_spoon_home_layout') == 'full_grid2') : ?>

						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'grid'); ?>
						<?php endif; ?>

					<?php elseif(get_theme_mod('sprout_spoon_home_layout') == 'list') : ?>

						<?php get_template_part('content', 'list'); ?>

					<?php elseif(get_theme_mod('sprout_spoon_home_layout') == 'full_list') : ?>

						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'list'); ?>
						<?php endif; ?>

					<?php else : ?>


						<?php get_template_part('content'); ?>



					<?php endif; ?>

				<?php endwhile; ?>

				<?php solopine_pagination(); ?>

				<?php if(get_theme_mod('sprout_spoon_home_layout') == 'grid3' || get_theme_mod('sprout_spoon_home_layout') == 'full_grid3' || get_theme_mod('sprout_spoon_home_layout') == 'grid2' || get_theme_mod('sprout_spoon_home_layout') == 'full_grid2') : ?></ul><?php endif; ?>



				<?php endif; ?>

	<?php if(is_active_sidebar('sidebar-3')) : ?>
	<div class="container">
		<div class="home-widget">
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-3') ) ?>
		</div>
	</div>
	<?php endif; ?>

			</div>


<?php get_footer(); ?>

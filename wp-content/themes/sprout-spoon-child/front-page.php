<?php
/**
 * Template Name: Homepage
 *
 * The template for displaying the homepage
 *
 *
 *
 */

get_header(); ?>

	<?php get_template_part('inc/featured/featured'); ?>

	<?php if(is_active_sidebar('sidebar-3')) : ?>
	<div class="container">
		<div class="home-widget featured-posts-container">
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-3') ) ?>
		</div>
	</div>
	<?php endif; ?>

	<div class="container">
    <div id="content">
			<div id="main" class="fullwidth">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('content', 'page'); ?>
				<?php endwhile; ?>
				<?php endif; ?>

				<?php get_sidebar(); ?>

				<section class="recent-posts">
					<div class="site-content">
						<div class="blog-post">
							<h4>From the blog</h4>
							<?php query_posts('posts_per_page=2'); ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<h3><?php the_title(); ?></h3>
								<figure>
									<?php the_post_thumbnail(); ?>
								</figure>
								<?php the_excerpt(); ?>
							<?php endwhile; ?>
							<?php wp_reset_query(); ?>
						</div>
					</div>
				</section>

				<div class="instagram-header">
					<h3>Connect With Us</h3>
				</div>


				<div id="instagram-footer">
					<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-2') ) ?>
				</div>
			</div>
    </div>
  </div>
	<?php get_footer(); ?>

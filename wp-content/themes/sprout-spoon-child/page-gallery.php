<?php
/**
 * Template Name: Gallery
 *
 * The template for displaying the gallery page
 *
 *
 *
 */

 get_header(); ?>

	<div class="container" "gallery-container">
		<div id="content" class="gallery-content">
			<div id="main" class= "fullwidth gallery">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  					<?php get_template_part('content', 'page'); ?>
  				<?php endwhile; ?>
  				<?php endif; ?>
      </div>
		</div>
  </div>
  <?php get_footer(); ?>

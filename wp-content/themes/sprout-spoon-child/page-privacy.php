<?php
/**
 * Template Name: Privacy Policy
 *
 * The template for displaying the privacy policy page
 *
 *
 *
 */
  get_header(); ?>

  <div class="container">
		<div id="content" class="privacy-policy">
			<div id="main">
        <div class="policies">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    					<?php get_template_part('content', 'page'); ?>
    				<?php endwhile; ?>
    				<?php endif; ?>
        </div>
			</div>

<?php get_footer(); ?>

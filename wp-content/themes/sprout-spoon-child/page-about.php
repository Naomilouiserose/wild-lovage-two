<?php
/**
 * Template Name: About
 *
 * The template for displaying the about page
 *
 *
 *
 */

get_header(); ?>

<div class="container">
  <div id="content">
    <div id="main" class="fullwidth">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', 'page'); ?>
      <?php endwhile; ?>
      <?php endif; ?>

      <div class="about-section">
        <figure class="about-image">
          <img src="<?php the_field('about_image') ?>"/>
        </figure>
        <p> <?php the_field('about_text') ?> </p>
        <p><?php the_field('sign-off') ?></p>
      </div>

      <div class="policy-page-link">
        <a href="<?php echo site_url('/privacy-policy/') ?>"><h3>View Privacy Policy</h3></a>
      </div>

    </div>
  </div>
</div>
<?php get_footer(); ?>

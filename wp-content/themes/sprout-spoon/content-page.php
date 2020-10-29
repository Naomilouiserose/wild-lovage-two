<article id="post-<?php the_ID(); ?>" <?php post_class('sp_page'); ?>>

	<?php if(!get_theme_mod('sprout_spoon_page_title')) : ?>
	<div class="post-header">

		<h1><?php the_title(); ?></h1>

	</div>
	<?php endif; ?>

	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
		<?php the_post_thumbnail('sprout_spoon_full-thumb'); ?>
	</div>
	<?php endif; ?>

	<div class="post-entry">

		<?php the_content(); ?>

		<?php wp_link_pages(); ?>

	</div>

	<?php if(get_theme_mod('sprout_spoon_page_share')) : else : ?>
	<div class="post-meta">

		<div class="post-share">
			<?php if(get_theme_mod('sprout_spoon_instagram')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('sprout_spoon_instagram')); ?>" target="_blank"><i class="fab fa-instagram"></i> <span><?php _e( 'Instagram', 'sprout-spoon' ); ?></span></a><?php endif; ?>
			<?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			


		</div>

	</div>
	<?php endif; ?>

	<?php comments_template( '', true );  ?>

</article>

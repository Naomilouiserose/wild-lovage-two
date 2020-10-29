<?php get_header(); ?>

	<?php
		$single_template = get_post_meta( get_the_ID(), 'meta-select', true );
	?>

	<div class="container fullwidth ">

		<div id="content" class="single-post">

			<div id="main" class="" <?php if($single_template == 'full-post') : ?>class="fullwidth"<?php endif; ?>>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part('content'); ?>

				<?php endwhile; ?>

				<?php endif; ?>

			</div>

<?php get_footer(); ?>

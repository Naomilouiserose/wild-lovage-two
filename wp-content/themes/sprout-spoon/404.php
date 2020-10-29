<?php get_header(); ?>
	
	<div class="container">
		
		<div id="content">
		
			<div id="main">
			
				<div class="post-entry nothing">
				
					<div class="error-page">
						
						<h1><?php esc_html_e( '404', 'sprout-spoon' ); ?></h1>
						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sprout-spoon' ); ?></p>
						<?php get_search_form(); ?>
						
					</div>
					
				</div>
			
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

			<!-- END CONTENT -->
			</div>

		<!-- END CONTAINER -->
		</div>

		<footer id="footer">

			<?php if(!get_theme_mod('sprout_spoon_footer_share')) : ?>
			<div id="footer-social">
				<?php if(get_theme_mod('sprout_spoon_instagram')) : ?><a href="http://instagram.com/<?php echo esc_html(get_theme_mod('sprout_spoon_instagram')); ?>" target="_blank"><i class="fab fa-instagram"></i> <span><?php _e( 'Instagram', 'sprout-spoon' ); ?></span></a><?php endif; ?>
				<?php if(get_theme_mod('sprout_spoon_pinterest')) : ?><a href="http://pinterest.com/<?php echo esc_html(get_theme_mod('sprout_spoon_pinterest')); ?>" target="_blank"><i class="fab fa-pinterest-p"></i> <span><?php _e( 'Pinterest', 'sprout-spoon' ); ?></span></a><?php endif; ?>
			</div>
			<?php endif; ?>

		</footer>

	<!-- END WRAPPER -->
	</div>

	<div id="footer-copyright">
		<div class="container">
			<h3>Theme by <a href="https://solopine.ticksy.com/" target="_blank">SoloPine</a></h3> 
			<h3>Developed & Customised by <a href="http://naomimartinstudio.com/" target="_blank">Naomi Martin</a></h3>
			<h3>Copyright Wild.Lovage | 2020</h3>
		</div>

	</div>

	<?php wp_footer(); ?>

</body>

</html>

<?php
/**
 * The template for displaying the archive of case studies
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *
 *
 */

get_header(); ?>

<div class="container">
		<div id="content" class="case-studies-page">
			<div id="main" class="full-width case-studies-page ">

				<div class="case-studies">
					<?php while ( have_posts() ) : the_post();
					$size = 'medium';
					$client = get_field('client_logo');
	        $services = get_field('services');
					$link = get_field('video_link');
					$vimeo = get_field('video_upload');
					$image_1 = get_field('image_1');
					$image_2 = get_field('image_2');
					$image_3 = get_field('image_3');
	        $image_4 = get_field('image_4');
				 ?>

					<article class="case-study">
						<aside>
							<h2><?php the_title(); ?></h2>
							<figure>
								<?php if($client){
									echo wp_get_attachment_image( $client, $size='thumbnail' );
								 } ?>
							</figure>
							<h4><?php echo $services; ?></h4>
							<?php if( $link ): ?>
    			<a class="video-link" target="_blank" href="<?php echo esc_url( $link ); ?>">Watch Video</a>
					<?php endif; ?>
						</aside>
					</article>

					<div class="embed-container">
					<?php if ('' !== strval($vimeo)) {
        echo '<iframe width="420" height="315" src="https://vimeo.com/472592216' . $vimeo . '"></iframe>';
    				}?>
					</div>

					<div class="case-study-images">
	          <figure>
	            <?php if($image_1){
	              echo wp_get_attachment_image( $image_1, $size='medium' );
	             } ?>
	          </figure>
					<figure>
	          <?php if($image_2){
	            echo wp_get_attachment_image( $image_2, $size='medium' );
	           } ?>
	        </figure>
						<figure>
	            <?php if($image_3){
	  						echo wp_get_attachment_image( $image_3, $size='medium' );
	  					} ?>
	          </figure>
					<figure>
	          <?php if($image_4){
	            echo wp_get_attachment_image( $image_4, $size='medium' );
	          } ?>
	        </figure>
				</div>

				</div>


			<?php endwhile; // end of the loop. ?>

			</div>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

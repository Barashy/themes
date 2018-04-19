<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sambacemetheme
 */

?>

<article class="text-orange-lightest" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	</header><!-- .entry-header -->




    <!-- Reviews Section -->
    <div class="parallax-window pt-32 pb-32" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/images/bg-dark-space.png' ?>">
			<div class="flex container w-4/5 mx-auto"><!-- Section Flex -->

			<!-- Gigs Section -->
      <div class="entry-content container w-4/5 pb-8">
				<?php	// new custom loop for review Custom posts

					$args = array('post_type' => 'gigs', 'post_per_page' => 100 );

					// The Query
					$the_query = new WP_Query( $args );

					// The Loop
					if ( $the_query->have_posts() ) {
					    while ( $the_query->have_posts() ) {
					        $the_query->the_post();
				?>

				<div class="flex">
	        <div class="w-1/4 p-4 m-4 bg-image-dark-leather"><h3><?php the_field( 'date' ) ?></h3></div>
	        <div class="w-1/2 p-4 ml-4 my-4 bg-image-dark-leather"><h3><?php the_field( 'location' ) ?></h3></div>
        	<div class="w-1/4 p-4 my-4 mr-4 bg-image-dark-leather">	<a href="<?php the_field( 'ticket_link' ) ?>"><button class="btn" type="button" name="button"> <h3 class="text-orange-lightest">Buy Ticket</h3>	</button></a></div>
				</div>

				<?php
					    }
					} else {
					    // no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata();

				?>
		    </div><!-- End Gigs Section -->

				<!-- Ads Section -->
				<div class="container w-1/5 m-4">
					<?php	// new custom loop for review Custom posts

						$args = array('post_type' => 'gigs', 'post_per_page' => 2 );

						// The Query
						$the_query = new WP_Query( $args );

						// The Loop
						if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
										$the_query->the_post();
					?>
					<?php sambacemetheme_post_thumbnail(); ?>
					<?php
								}
						} else {
								// no posts found
						}
						/* Restore original Post Data */
						wp_reset_postdata();

					?>
				</div><!-- End Ads Section -->
		  </div><!-- End Section Flex -->
		</div><!-- End Paralax Window container -->


	<!-- <?php if ( get_edit_post_link() ) : ?> -->

		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'sambacemetheme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

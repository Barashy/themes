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

  <!-- Biography section -->
  <div class="pt-16 px-4 pb-32 bg-indigo-darkest">

  	<?php sambacemetheme_post_thumbnail(); ?>
  	<div class="entry-content container w-3/5 mx-auto">
      <h1 class="mx-auto text-center w-1/4 container p-6">Biography</h1>
  		<?php
  		the_content();

  		wp_link_pages( array(
  			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sambacemetheme' ),
  			'after'  => '</div>',
  		) );
  		?>
  	</div><!-- .entry-content -->

  </div>


    <!-- Reviews Section -->
    <div class="parallax-window pt-32 pb-32" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() . '/images/bg-live-picture.png' ?>">
      <h1 class="mx-auto text-center w-1/4 container py-4 bg-indigo-darkest">Reviews</h1>
      <div class="entry-content container w-3/5 mx-auto pt-8 pb-8">
        <?php	// new custom loop for review Custom posts

          $args = array('post_type' => 'reviews', 'post_per_page' => 2 );

          // The Query
          $the_query = new WP_Query( $args );

          // The Loop
          if ( $the_query->have_posts() ) {

              while ( $the_query->have_posts() ) {
                  $the_query->the_post();
                  echo '<h2 class="bg-indigo-darkest mt-8 pt-4 px-4">' . get_the_title() . '</h2>';
                  echo '<p class="py-4 px-4 bg-indigo-darkest">' . get_the_content() . '</p>';
              }
          } else {
              // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();

        ?>
      </div>
    </div>
        <!-- Interviews Section -->
    <div class="pb-8 pt-32 pb-32 bg-indigo-darkest">
      <h1 class="mx-auto text-center w-1/4 container p-6">Interviews</h1>
      <div class="entry-content container w-3/5 mx-auto pt-8 pb-8">
        <?php	// new custom loop for review Custom posts

          $args = array('post_type' => 'interviews', 'post_per_page' => 2 );

          // The Query
          $the_query = new WP_Query( $args );

          // The Loop
          if ( $the_query->have_posts() ) {

              while ( $the_query->have_posts() ) {
                  $the_query->the_post();
									echo '<h2 class="bg-indigo-darkest mt-8 pt-4 px-4">' . get_the_title() . '</h2>';
                  echo '<p class="py-4 px-4 bg-indigo-darkest">' . get_the_content() . '</p>';
              }
          } else {
              // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();

        ?>
      </div>
    </div>



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

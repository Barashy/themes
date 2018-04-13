<?php

/*
    Template Name: Shop Page
*/



get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <?php

      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
      ?>

			<?php	// new custom loop for review Custom posts

				$args = array('post_type' => 'shop-items', 'post_per_page' => 2 );

				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				if ( $the_query->have_posts() ) {
				    echo '<ul>';
				    while ( $the_query->have_posts() ) {
				        $the_query->the_post();
								// Give the Post Thumbnail a class "alignleft".
									echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'alignleft' ) );
				        echo '<li>' . get_the_title() . '</li>';
								echo '<li>' . get_the_excerpt() . '</li>';
				    }
				    echo '</ul>';
				} else {
				    // no posts found
				}
				/* Restore original Post Data */
				wp_reset_postdata();

			?>


		<?php
        // Biography is written on page ...
        // Reviews headline
        // add custom loop for Reviews // Background change every 2 entries ()
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

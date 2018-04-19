<?php

/*
    Template Name: Tour Dates
*/



get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <?php

      while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'tourdates' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

      endwhile; // End of the loop.
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

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sambacemetheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('w-1/3 -mx-4 mb-8 bg-indigo-darkest orange-lightest rounded-lg'); ?>>

	<?php sambacemetheme_post_thumbnail(); ?>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title px-8 text-center pt-2">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title px-8 text-center pt-2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="masonry-grid-item">
				<div class="entry-meta">
					<?php
					// sambacemetheme_posted_on();
					// sambacemetheme_posted_by();
					?>
				</div><!-- .entry-meta -->
			</div><!-- .masonry-grid-item -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content px-8 pt-4 pb-8 text-orange-lightest">
		<?php
		the_excerpt();
		?>
		<!--
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sambacemetheme' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
	-->
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sambacemetheme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<!-- <?php sambacemetheme_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

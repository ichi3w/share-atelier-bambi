<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ShareAtelierBambi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="front-top">
    <p class="catch-copy">表現者たちの秘密基地</p>
    <img
      class="front-image"
      src="https://placehold.jp/1200x600.png"
      alt=""
      srcset="https://placehold.jp/1200x600.png"
    >
    <img
      class="front-subimage--one"
      src="https://placehold.jp/300x300.png"
      alt=""
    >
    <img
      class="front-subimage--two"
      src="https://placehold.jp/300x300.png"
      alt=""
    >
    <img
      class="front-subimage--three"
      src="https://placehold.jp/300x300.png"
      alt=""
    >
  </div>

	<?php sab_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sab' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'sab' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

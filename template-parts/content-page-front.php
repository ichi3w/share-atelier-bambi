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

		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

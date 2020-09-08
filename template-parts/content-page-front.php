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
    <?php echo do_shortcode('[metaslider title="FrontTopSlider"]'); ?>

    <img
      class="front-logo"
      src="<?php echo get_template_directory_uri(); ?>/my-templates/page-front-assets/front-logo.png"
      alt="シェアアトリエバンビロゴ"
      srcset="<?php echo get_template_directory_uri(); ?>/my-templates/page-front-assets/front-logo.png"
    >
  </div>

	<?php sab_post_thumbnail(); ?>

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

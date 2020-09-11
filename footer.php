<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ShareAtelierBambi
 */

?>

	<footer id="colophon" class="site-footer">
    <a class="twitter-logo" href="https://twitter.com/Bambi_0827" target="_blank" rel="noopener noreferrer">
      <img
        loading="lazy"
        width="32"
        height="32"
        src="<?php echo get_template_directory_uri(); ?>/images/twitter-logo.png"
        alt="ツイッターへのリンク">
    </a>
    <p class="copyright">
      ©︎ 2020 Share Atelier Bambi
		</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

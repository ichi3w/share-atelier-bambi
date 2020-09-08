<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ShareAtelierBambi
 */
get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title">すみません、ページが見つからないようでした。</h1>
			</header><!-- .page-header -->

			<div class="page-content">
        <a href="<?php echo esc_url( home_url() ); ?>">トップページに戻る</a>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();

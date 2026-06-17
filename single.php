<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package premiere
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php include get_template_directory() . '/assets/modulos/modulo-video/loop-modulo-video.php';?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

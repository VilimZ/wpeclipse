<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpeclipse
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="front-container">



		      <div id="theme-right-container" class="x">
		        <div class="theme-right"><img src="<?php echo get_theme_file_uri('/media/theme-ico-right-down.png') ?>"></div>
		      </div>

		      <div id="plugin-left-container" class="x">
		        <div class="plugin-left"><img src="<?php echo get_theme_file_uri( '/media/plugin-ico-left2.png' ) ?>"></div>
		      </div>

		      <div id="theme-left-container" class="x">
		        <div class="theme-left"><img src="<?php echo get_theme_file_uri('/media/theme-ico-left.png') ?>"> </div>
		      </div>

		      <div id="plugin-right-container" class="x">
		        <div class="plugin-right"><img src="<?php echo get_theme_file_uri('/media/plugin-ico-right-down2.png') ?>"> </div>
		      </div>

		    </div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();

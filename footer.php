<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpeclipse
 */

?>

	<footer id="colophon" class="<?php if(is_front_page()){
		echo "site-footer-landing";	}
		else {
			echo "site-footer";
		} ?>">
		<div class="site-info wpe-footer">
	   <?php
          wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu_id' 			 => 'footer-menu'
						)
					);
		  ?>

			<span class="sep"><?php echo date("Y"); ?> | 2 -</span>

				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpeclipse' ), 'wpeclipse', '<a href="http://wpeclipse.com">Wpeclipse</a>' );
				//printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpeclipse' ), 'wpeclipse', '<a href="http://wpeclipse.com">Wpeclipse</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

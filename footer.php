<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LeL
 */

?>

			</div><!-- #content -->
		</div>
	</div>
	<div class="footer-area full">
			<div class="main-page">
				<footer id="colophon" class="site-footer inner" role="contentinfo">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lel' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lel' ), 'WordPress' ); ?></a>
						<span class="sep"> | </span>
						<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'lel' ), 'lel', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div>
		</div>

<?php wp_footer(); ?>

</body>
</html>

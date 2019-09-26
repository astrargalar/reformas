<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mi_tema
 */

?>

	</div><!-- #content -->
	<?php  $con_footer = get_theme_mod('mitema_show_footer');
		if($con_footer == 'con_footer'){
	?>
	<footer id="colophon" class="site-footer">
		<div class="footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mitema' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '&#169;' . ' 2019 - Desarrollado por %s', 'mitema' ), 'Paco Silva' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Nombre del Tema: %1$s', 'mitema' ), 'Base limpia para desarrollo', '<a href="http://underscores.me/"></a>' );
				?>
		</div><!-- .site-info -->
		<div class="menu-footer-container">
			<?php 
				if(has_nav_menu('menu-2')){
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu',
					) );
				} else{
					?>
					<a href="<?php echo get_home_url() ?>">Ir a la home </a>
					<?php
				}
			?>
		</div><!-- .menu-footer-container -->
		</div><!-- .footer -->
	</footer><!-- #colophon -->
	<?php
		};
	?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mi_tema
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			mitema_metainfo();
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if(has_tag("html")){
				?>
				<h3 class="html-content">Contenido relacionado con HTML</h3>
				<?php
			}
			?>
			<div class="linea"></div>
			<?php
				$importante= get_post_meta( get_the_ID(), 'importante' );
					if( $importante && $importante[0] == 1) {
					?>
						<h3 class="importante">¡¡Ojo!! Importante</h3>
					<?php
					}
			?>
			<?php
			
			if ( has_post_thumbnail()){?>
			<div class="imagen_mini">
				<figure>
					<div class="caja">
						<?php
						mitema_posted_on();
						mitema_posted_by();
						?>
					</div><!-- caja -->
						<a href="<?php the_permalink();?>"><?php
						the_post_thumbnail('mitema_small_size');  ?>
						</a>
				</figure>
			</div><!-- .imagen_mini -->
				<?php
			}
		endif 
		?>
		
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php if ( is_singular() ) :
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mitema' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		else :
			the_excerpt();
		endif;
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mitema' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php mitema_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
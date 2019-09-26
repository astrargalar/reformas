<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Mi_tema
 */

get_header();?>

	<?php if ( has_post_thumbnail()){ ?>
					<figure class="imagen-destacada">
							<?php 
							the_post_thumbnail( 'mitema_full_size' );
							?>
					</figure>
				<?php }?>

	<div id="primary" class="content-area <?php if( !is_active_sidebar("sidebar-1")){echo "sin-widget";} ?>">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			mitema_the_post_navigation();

			if(is_singular()){
				print("<article>");
				the_widget("WP_Widget_Tag_Cloud");
				print("</article>");
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

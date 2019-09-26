<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mi_tema
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();
// Esta forma es la antigua de hacer consultas a la base de datos y ya no se utiliza
		echo '<h3>Posts de la categoría: Media. Utilizando el método query_post() que ya está obsoleto.</h3>';
		echo "<ul class='lista-posts'>";
		query_posts('cat=34');
						if(have_posts()){
							while(have_posts()) : the_post();
								echo '<li><a href="'. get_permalink() . '">';
								the_title();
								echo '</a></li>';
							endwhile;
						}
						wp_reset_query();
		echo '</ul>';
// Esta es la forma moderna de hacer consultas a la base de datos
		echo '<h3>últimos Posts de la categoría Html Utilizando el método WP_Query</h3>';
		echo "<ul class='lista-posts'>";
				$page=2;
				$custom_query= new WP_Query('cat=33&posts_per_page=3&order=DESC&paged='.$page);
									while($custom_query->have_posts()) : $custom_query->the_post();
										echo '<li><a href="'. get_permalink() . '">';
										the_title();
										echo '</a></li>';
									endwhile;
								wp_reset_postdata();
		echo '</ul>';
		// Otra forma moderna de hacer consultas a la base de datos con get_posts y no tendremos que hacer wp_reset
		echo '<h3>últimos Posts de la categoría Eyes Case - Utilizando el método get_posts()</h3>';
		echo "<ul class='lista-posts'>";
				$args=array('category'=>23,
									'order'=>"DESC",
									'numberposts'=>3	);
				$custom_posts = get_posts($args);
				foreach($custom_posts as $post){
							echo '<li><a href="'. get_permalink() . '">';
									$limit = 28;//Aquí vamos a truncar el título a la longuitud que queramos
									$title = $post->post_title; 
									$length = strlen($title);
									$the_title = substr($title, 0, $limit);				
								if($length >= $limit){
									echo $the_title .= ' [...]';;
								} elseif ($post->post_title == ""){//Aquí vamos a comprobar que el título exista y sino mostraremos un mensaje.
									echo "Este post no tiene título";
									}
									else{
											the_title();// Si el título tiene una longuitud menor a lo establecido en $limit, lo mostramos tal cual.
									}
							echo '</a></li>';
				}
		echo '</ul>';
		//Mostrar el contenido de otra página dentro de esta
									$args=array('post_type'=>'page',
														//'page_id'=>2, Para recuperar las páginas por su Id
														'pagename'=>'pagina-ejemplo'//Así para recuperarlas por su slug
										);
									$custom_query= new WP_Query($args);
									while($custom_query->have_posts()) : $custom_query->the_post();
										echo '<h2>';
										the_title();
										echo '</h2>';
										echo '<section class="pagina_interna">';
										the_content();
										echo '</section>';
									endwhile;
								wp_reset_postdata();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mitema' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'mitema' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

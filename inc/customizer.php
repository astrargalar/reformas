<?php
/**
 * Mi tema Theme Customizer
 *
 * @package Mi_tema
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mitema_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
// Funciones añadidas por mi
	$wp_customize->add_setting( 'mitema_title_color',
			array(
				'default'		    => '#7e0f0f',
				'transpoaddt'   => 'postMessage',
				'type'			 	 => 'theme_mod',
			)
		);
	$wp_customize->add_control(
			new WP_Customize_Color_Control(
						$wp_customize, 
						'mitema_title_color', 
						array(
							'label'      => __( 'Color de los títulos', 'mitema' ),
							'section'    => 'colors',
							'settings'   => 'mitema_title_color',
					)
			)
	);
	/**
 * Añadimos una sección al customizer
 * 
 */
$wp_customize->add_section('theme_options',
			array(
				'title'		    => __( 'Ajustes del tema', 'mitema' ),
				'priority'   => 95,
				'capability' => 'edit_theme_options',
				'description' => __( 'Opciones globales del tema', 'mitema' ), 
			)
		);
$wp_customize->add_setting( 'mitema_show_footer',
			array(
				'default'		    => 'con_footer',
				'transpoaddt'   => 'postMessage',
				'type'			 	 => 'theme_mod',
			)
		);
$wp_customize->add_control(
			'mitema_show_footer',
			array(
				'type' => 'radio',
				'label' => __( 'Mostrar footer', 'mitema' ),
				'section'    => 'theme_options',
				'choices' => array(
					'con_footer' => __( 'Mostrar footer', 'mitema' ),
					'sin_footer' =>  __( 'Ocultar footer', 'mitema' ),
				),
				'settings' =>'mitema_show_footer', 
			)
	);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'mitema_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'mitema_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'mitema_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function mitema_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function mitema_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mitema_customize_preview_js() {
	wp_enqueue_script( 'mitema-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'mitema_customize_preview_js' );

/**
 *  Función que va a aplicar lo seleccionado en los nuevos controles a nuestro tema
 * 
 */
function mitema_customizer_css(){
?>
         <style type="text/css">
             h1.entry-title { 
				 color:<?php echo get_theme_mod('mitema_title_color'); ?>; 
				}
         </style>
    <?php
}
add_action( 'wp_head', 'mitema_customizer_css' );

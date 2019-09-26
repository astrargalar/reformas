<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<?php flush(); //permite limpiar el buffer de datos y enviarlos al navegador del usuario
?>

<body <?php body_class(); ?>>

    <header class="header  encabezado">
        <div class="container">
            <div class="row justify-content-center align-items-center d-flex">
                <div class="col-md-4 col-8 mb-4 mb-md-0">
                    <?php if (has_custom_logo()) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php endif; ?>
                    <div class="">
                        <?php $blog_info = get_bloginfo('name'); ?>
                        <?php if (!empty($blog_info)) : ?>
                            <?php if (is_front_page() && is_home()) : ?>
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                            <?php else : ?>
                                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                            <?php endif; ?>

                        <?php endif; ?>
                        <?php
                        $description = get_bloginfo('description', 'display');
                        if ($description || is_customize_preview()) :
                            ?>
                            <p class="site-description">
                                <?php echo $description; ?>
                            </p>
                        <?php endif; ?>
                    </div> <!-- d-flex-->

                </div><!-- col-md-4 -->
                <div class=" col-md-8">
                    <?php if (has_nav_menu('menu_principal')) : ?>


                        <nav class="navbar navbar-expand-md navbar-light justify-content-center">
                            <button class="navbar-toggler mb-4" data-toggle="collapse" data-target="#nav_principal" aria-expanded="false" type="button">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!--#nav-principal-->
                            <?php
                            $args = array(
                                'menu_class' =>  'nav nav_justified flex-column flex-md-row text-center',
                                'container_ id' => "nav_principal",
                                'container_cla ss' =>  'collapse navbar-collapse justify-content-center justify-content-lg-end text-uppercase',
                                'theme_location' =>  'menu_principal'
                            );
                            wp_nav_menu($args)
                            ?>
                        </nav>
                    <?php endif; ?>
                </div><!-- col-md-8-->
            </div><!-- row-->
        </div>
        <!--container-->
    </header>
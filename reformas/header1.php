<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php starter_custom_meta_description(); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('template-parts/header-custom'); ?>
    <header class="Header">
        <section class="Header-container">
            <?php
            get_template_part('template-parts/header-logo');
            get_template_part('template-parts/header-menu');
            ?>
        </section>
    </header>
<?php
/**
 * Customizer setting
 */
Kirki::add_config( 'smartfolio_options', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Kirki::add_panel( 'smartfolio', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Smartfolio Customizer', 'kirki' ),
	'icon'		  => 'dashicons-admin-appearance',
) );

Kirki::add_section( 'home_slider', array(
    'title'          => esc_html__( 'Home Slider', 'kirki' ),
    'panel'          => 'smartfolio',
    'priority'       => 160,
) );


Kirki::add_section( 'features_section', array(
    'title'          => esc_html__( 'Features Section', 'kirki' ),
    'panel'          => 'smartfolio',
    'priority'       => 160,
) );


Kirki::add_section( 'projects_section', array(
    'title'          => esc_html__( 'Projects Section', 'kirki' ),
    'panel'          => 'smartfolio',
    'priority'       => 160,
) );

Kirki::add_section( 'services_section', array(
    'title'          => esc_html__( 'Services Section', 'kirki' ),
    'panel'          => 'smartfolio',
    'priority'       => 160,
) );

Kirki::add_section( 'clients_section', array(
    'title'          => esc_html__( 'Clients Section', 'kirki' ),
    'panel'          => 'smartfolio',
    'priority'       => 160,
) );


Kirki::add_section( 'colors_section', array(
    'title'          => esc_html__( 'Colors', 'kirki' ),
    'panel'          => 'smartfolio',
    'priority'       => 160,
) );

Kirki::add_section( 'typography_section', array(
    'title'          => esc_html__( 'Typography', 'kirki' ),
    'panel'          => 'smartfolio',
    'priority'       => 160,
) );

Kirki::add_section( 'footer_section', array(
    'title'          => esc_html__( 'Footer Text', 'kirki' ),
    'panel'          => 'smartfolio',
    'priority'       => 160,
) );



// HEADER SLIDER
include ('kirki-inc/slider.php');

// HOME FEATURES
include ('kirki-inc/features.php');

// PRJOECTS, SERVICES AND CLIENTS SECTION
include ('kirki-inc/project-and-clients.php');

// COLORS
include ('kirki-inc/colors.php');

// TYPOGRAPHT
include ('kirki-inc/typography.php');

// FOOTER

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 'footer_textarea',
	'label'    => esc_html__( 'Footer Text', 'kirki' ),
	'section'  => 'footer_section',
	'default'  => 'Theme: <a href="https://github.com/bakarfreelancer" target="_blank">Smartfolio</a> | Powered by: <a href="https://wordpress.org" target="_blank">WordPress</a>',
	'priority' => 10,
] );
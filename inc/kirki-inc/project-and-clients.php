<?php
Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'projects_heading',
	'label'    => 'Heading', 'kirki',
	'section'  => 'projects_section',
	'default'  => esc_html__( 'Our Projects', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 'projects_textarea',
	'label'    => esc_html__( 'Sub Text', 'kirki' ),
	'section'  => 'projects_section',
	'default'  => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci amet eum vel veniam, repellendus quae, quidem saepe laudantium quisquam unde beatae expedita? Maiores quis suscipit corporis facilis laboriosam praesentium ad.', 'kirki' ),
	'priority' => 10,
] );

// SERVICES
Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'services_heading',
	'label'    => 'Heading', 'kirki',
	'section'  => 'services_section',
	'default'  => esc_html__( 'Our Services', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 'services_textarea',
	'label'    => esc_html__( 'Sub Text', 'kirki' ),
	'section'  => 'services_section',
	'default'  => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci amet eum vel veniam, repellendus quae, unde beatae. Maiores quis suscipit corporis facilis laboriosam praesentium ad.', 'kirki' ),
	'priority' => 10,
] );


// CLIENTS
Kirki::add_field( 'smartfolio_options', [
	'type'        => 'switch',
	'settings'    => 'clients_switch_setting',
	'label'       => esc_html__( 'Enable/Disable:', 'kirki' ),
	'section'     => 'clients_section',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enabled', 'kirki' ),
		'off' => esc_html__( 'Disabled', 'kirki' ),
	],
] );


Kirki::add_field( 'smartfolio_options', [
	'type'        => 'image',
	'settings'    => 'cl1_img',
	'label'       => esc_html__( 'Image 1', 'kirki' ),
	'section'     => 'clients_section',
	'default'     => get_template_directory_uri(  ).'/assets/images/client_1.png',
] );

Kirki::add_field( 'smartfolio_options', [
	'type'        => 'image',
	'settings'    => 'cl2_img',
	'label'       => esc_html__( 'Image 2', 'kirki' ),
	'section'     => 'clients_section',
	'default'     => get_template_directory_uri(  ).'/assets/images/client_2.png',
] );

Kirki::add_field( 'smartfolio_options', [
	'type'        => 'image',
	'settings'    => 'cl3_img',
	'label'       => esc_html__( 'Image 3', 'kirki' ),
	'section'     => 'clients_section',
	'default'     => get_template_directory_uri(  ).'/assets/images/client_3.png',
] );

Kirki::add_field( 'smartfolio_options', [
	'type'        => 'image',
	'settings'    => 'cl4_img',
	'label'       => esc_html__( 'Image 4', 'kirki' ),
	'section'     => 'clients_section',
	'default'     => get_template_directory_uri(  ).'/assets/images/client_4.png',
] );

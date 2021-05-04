<?php

// BODY
Kirki::add_field( 'smartfolio_options', [
	'type'        => 'typography',
	'settings'    => 'body_typography',
	'label'       => esc_html__( 'Body Font', 'kirki' ),
	'section'     => 'typography_section',
	'default'     => [
		'font-family'    => 'Open Sans',
		'font-size'      => '14px',
		'color'          => '#818892',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'body, .widget_search #searchsubmit',
		],
	],
] );

// HEADINGS
Kirki::add_field( 'smartfolio_options', [
	'type'        => 'typography',
	'settings'    => 'headings_typography',
	'label'       => esc_html__( 'Big Headings Font', 'kirki' ),
	'section'     => 'typography_section',
	'default'     => [
		'font-family'    => 'Open Sans',
		'font-size'      => '24px',
		'color'          => '#000000',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h1,h2,h3, .fh5co-section-lead',
		],
	],
] );

Kirki::add_field( 'smartfolio_options', [
	'type'        => 'typography',
	'settings'    => 'headings_small_typography',
	'label'       => esc_html__( 'Small Headings Font', 'kirki' ),
	'section'     => 'typography_section',
	'default'     => [
		'font-family'    => 'Open Sans',
		'font-size'      => '20px',
		'color'          => '#000000',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'h4,h5,h6, aside h4, aside h5, aside h6, #fh5co-footer .fh5co-footer-widget .fh5co-footer-lead',
		],
	],
] );

Kirki::add_field( 'smartfolio_options', [
	'type'        => 'typography',
	'settings'    => 'sidebar_typography',
	'label'       => esc_html__( 'Sidebar Font', 'kirki' ),
	'section'     => 'typography_section',
	'default'     => [
		'font-family'    => 'Open Sans',
		'font-size'      => '14px',
		'color'          => '#000000',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'aside',
		],
	],
] );


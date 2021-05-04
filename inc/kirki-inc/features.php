<?php
Kirki::add_field( 'smartfolio_options', [
	'type'        => 'switch',
	'settings'    => 'features_switch',
	'label'       => esc_html__( 'Enable/Disable slider:', 'kirki' ),
	'section'     => 'features_section',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enabled', 'kirki' ),
		'off' => esc_html__( 'Disabled', 'kirki' ),
	],
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'f_heading',
	'label'    => esc_html__( 'Feature Heading', 'kirki'),
	'section'  => 'features_section',
	'default'  => esc_html__( 'Featured', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 'f_textarea',
	'label'    => esc_html__( 'Featured Paragraph', 'kirki' ),
	'section'  => 'features_section',
	'default'  => esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia.Far far away, behind the word mountains, far from the countries Vokalia.Far far away, behind the word mountains, far from the countries Vokalia.', 'kirki' ),
	'priority' => 10,
] );

// FEATURE 1
Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'f1_heading',
	'label'    => '<h2 style="color: #50575e;">Feature 1</h2>Heading', 'kirki',
	'section'  => 'features_section',
	'default'  => esc_html__( 'Highly Customizable', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 'f1_textarea',
	'label'    => esc_html__( 'Sub Text', 'kirki' ),
	'section'  => 'features_section',
	'default'  => esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia.', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'f1_icon',
	'label'    => esc_html__( 'Icon', 'kirki' ),
	'section'  => 'features_section',
	'description' => 'Put bootstrap icon class name as <i>"fab fa-wordpress"</i>. Copy icon class <a href="https://fontawesome.com/icons?d=gallery&p=2" target="_blank">here</a>', 'kirki',
	'default'  => esc_html__( 'fab fa-wordpress', 'kirki' ),
	'priority' => 10,
] );

// FEATURE 2
Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'f2_heading',
	'label'    => '<h2 style="color: #50575e;">Feature 2</h2>Heading', 'kirki',
	'section'  => 'features_section',
	'default'  => esc_html__( 'Voice Recording', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 'f2_textarea',
	'label'    => esc_html__( 'Sub Text', 'kirki' ),
	'section'  => 'features_section',
	'default'  => esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia.', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'f2_icon',
	'label'    => esc_html__( 'Icon', 'kirki' ),
	'section'  => 'features_section',
	'default'  => esc_html__( 'far fa-check-square', 'kirki' ),
	'priority' => 10,
] );

// FEATURE 3
Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'f3_heading',
	'label'    => '<h2 style="color: #50575e;">Feature 3</h2>Heading', 'kirki',
	'section'  => 'features_section',
	'default'  => esc_html__( 'User Satisfaction', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 'f3_textarea',
	'label'    => esc_html__( 'Sub Text', 'kirki' ),
	'section'  => 'features_section',
	'default'  => esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia.', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'f3_icon',
	'label'    => esc_html__( 'Icon', 'kirki' ),
	'section'  => 'features_section',
	'description' => 'Put bootstrap icon class name as <i>"fab fa-wordpress"</i>. Copy icon class <a href="https://fontawesome.com/icons?d=gallery&p=2" target="_blank">here</a>', 'kirki',
	'default'  => esc_html__( 'far fa-user', 'kirki' ),
	'priority' => 10,
] );

// FEATURE 4
Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'f4_heading',
	'label'    => '<h2 style="color: #50575e;">Feature 4</h2>Heading', 'kirki',
	'section'  => 'features_section',
	'default'  => esc_html__( '24/7 Support', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 'f4_textarea',
	'label'    => esc_html__( 'Sub Text', 'kirki' ),
	'section'  => 'features_section',
	'default'  => esc_html__( 'Far far away, behind the word mountains, far from the countries Vokalia.', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 'f4_icon',
	'label'    => esc_html__( 'Icon', 'kirki' ),
	'section'  => 'features_section',
	'description' => 'Put bootstrap icon class name as <i>"fab fa-wordpress"</i>. Copy icon class <a href="https://fontawesome.com/icons?d=gallery&p=2" target="_blank">here</a>', 'kirki',
	'default'  => esc_html__( 'far fa-clock', 'kirki' ),
	'priority' => 10,
] );

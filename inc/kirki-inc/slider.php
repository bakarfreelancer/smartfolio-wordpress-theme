<?php

// SLIDER 1
Kirki::add_field( 'smartfolio_options', [
	'type'        => 'switch',
	'settings'    => 'slider_switch_setting',
	'label'       => esc_html__( 'Enable/Disable slider:', 'kirki' ),
	'section'     => 'home_slider',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Enabled', 'kirki' ),
		'off' => esc_html__( 'Disabled', 'kirki' ),
	],
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 's1_heading',
	'label'    => '<h2 style="color: #50575e;">Slider 1</h2> Heading', 'kirki',
	'section'  => 'home_slider',
	'default'  => esc_html__( 'Slider One Heading', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 's1_textarea',
	'label'    => esc_html__( 'Sub Text', 'kirki' ),
	'section'  => 'home_slider',
	'default'  => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci amet eum vel veniam, repellendus quae, quidem saepe laudantium quisquam unde beatae expedita? Maiores quis suscipit corporis facilis laboriosam praesentium ad.', 'kirki' ),
	'priority' => 10,
] );


Kirki::add_field( 'smartfolio_options', [
	'type'        => 'color',
	'settings'    => 'sl1_color_setting_hex',
	'label'       => 'Background color ', 'kirki',
	'section'     => 'home_slider',
	'default'     => 'rgba(0,0,0,0.3)',
	'choices'     => [
		'alpha' => true,
	],
] );

Kirki::add_field( 'smartfolio_options', [
	'type'        => 'image',
	'settings'    => 'sl1-image_setting_url',
	'label'       => esc_html__( 'Background image', 'kirki' ),
	'section'     => 'home_slider',
	'default'     => get_template_directory_uri(  ).'/assets/images/slide_1.jpg',
] );


// SLIDER 2
Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 's2_heading',
	'label'    => '<h2 style="color: #50575e;">Slider 2</h2> Heading', 'kirki',
	'section'  => 'home_slider',
	'default'  => esc_html__( 'Slider Two Heading', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 's2_textarea',
	'label'    => esc_html__( 'Sub Text', 'kirki' ),
	'section'  => 'home_slider',
	'default'  => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci amet eum vel veniam, repellendus quae, quidem saepe laudantium quisquam unde beatae expedita? Maiores quis suscipit corporis facilis laboriosam praesentium ad.', 'kirki' ),
	'priority' => 10,
] );


Kirki::add_field( 'smartfolio_options', [
	'type'        => 'color',
	'settings'    => 'sl2_color_setting_hex',
	'label'       => 'Background color ', 'kirki',
	'section'     => 'home_slider',
	'default'     => 'rgba(0,0,0,0.3)',
	'choices'     => [
		'alpha' => true,
	],
] );

Kirki::add_field( 'smartfolio_options', [
	'type'        => 'image',
	'settings'    => 'sl2-image_setting_url',
	'label'       => esc_html__( 'Background image', 'kirki' ),
	'section'     => 'home_slider',
	'default'     => get_template_directory_uri(  ).'/assets/images/slide_2.jpg',
] );



// SLIDER 3
Kirki::add_field( 'smartfolio_options', [
	'type'     => 'text',
	'settings' => 's3_heading',
	'label'    => '<h2 style="color: #50575e;">Slider 3</h2> Heading', 'kirki',
	'section'  => 'home_slider',
	'default'  => esc_html__( 'Slider Three Heading', 'kirki' ),
	'priority' => 10,
] );

Kirki::add_field( 'smartfolio_options', [
	'type'     => 'textarea',
	'settings' => 's3_textarea',
	'label'    => esc_html__( 'Sub Text', 'kirki' ),
	'section'  => 'home_slider',
	'default'  => esc_html__( 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci amet eum vel veniam, repellendus quae, quidem saepe laudantium quisquam unde beatae expedita? Maiores quis suscipit corporis facilis laboriosam praesentium ad.', 'kirki' ),
	'priority' => 10,
] );


Kirki::add_field( 'smartfolio_options', [
	'type'        => 'color',
	'settings'    => 'sl3_color_setting_hex',
	'label'       => 'Background color ', 'kirki',
	'section'     => 'home_slider',
	'default'     => 'rgba(0,0,0,0.3)',
	'choices'     => [
		'alpha' => true,
	],
] );

Kirki::add_field( 'smartfolio_options', [
	'type'        => 'image',
	'settings'    => 'sl3-image_setting_url',
	'label'       => esc_html__( 'Background image', 'kirki' ),
	'section'     => 'home_slider',
	'default'     => get_template_directory_uri(  ).'/assets/images/slide_3.jpg',
] );

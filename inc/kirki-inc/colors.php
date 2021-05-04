<?php
// PRIMARY COLOR
Kirki::add_field( 'smartfolio_options', [
	'type'        => 'color',
	'settings'    => 'primary_color',
	'label'       => 'Primary color ', 'kirki',
	'section'     => 'colors_section',
	'default'     => '#fbb040',
	'choices'     => [
		'alpha' => false,
	],
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element'  => '#fh5co-navbar .nav.navbar-nav.navbar-right .current-menu-item a,
                            #fh5co-navbar .nav.navbar-nav.navbar-right#menu-main a:hover,
                            #fh5co-products a:hover h4,
                            #fh5co-products a:focus h4,
                            #fh5co-products a:active h4,
                            #fh5co-header .navbar-brand,
                            .fh5co-feature .fh5co-feature-icon i,
                            a, a:hover, a:focus,
                            .fh5co-post a .fh5co-post-blurb,
                            .fh5co-post a:hover .fh5co-post-blurb,
                            .fh5co-post a:focus .fh5co-post-blurb,
                            .fh5co-post a:active .fh5co-post-blurb,
                            .main-sidebar aside h5,
                            .postMeta i',
            'property'  =>  'color',
        ),
        array(
            'element'  => '#fh5co-navbar .nav.navbar-nav.navbar-right#menu-main a:hover,
                            #fh5co-navbar .nav.navbar-nav.navbar-right .current-menu-item a',
            'property'  => 'border-bottom-color',
        ),
        array(
            'element'   => '#fh5co-clients, .widget_search #searchsubmit',
            'property'  => 'background'
        )
    ),
] );

// SLIDER COLORf
Kirki::add_field( 'smartfolio_options', [
	'type'        => 'color',
	'settings'    => 'slider_color',
	'label'       => 'Slider Text color ', 'kirki',
	'section'     => 'colors_section',
	'default'     => '#fff',
	'choices'     => [
		'alpha' => false,
	],
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element'  => '.owl-carousel-fullwidth .item .fh5co-owl-text .fh5co-lead,
                             .owl-carousel-fullwidth .item .fh5co-owl-text .fh5co-sub-lead,
                             .owl-carousel-fullwidth .item .fh5co-owl-text a,
                             .owl-carousel-fullwidth .item .fh5co-owl-text a:hover',
            'property'  =>  'color',
        ),
        array(
            'element'  => '.owl-carousel-fullwidth .item .fh5co-owl-text a,
                            .owl-carousel-fullwidth .item .fh5co-owl-text a:hover',
            'property'  =>  'border-bottom-color',
        ),
    ),
] );

// BUTTON COLOR
Kirki::add_field( 'smartfolio_options', [
	'type'        => 'color',
	'settings'    => 'button_text_color',
	'label'       => 'Button Text color ', 'kirki',
	'section'     => 'colors_section',
	'default'     => '#fff',
	'choices'     => [
		'alpha' => false,
	],
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element'  => '.sf_action_btn',
            'property'  =>  'color',
        ),
        array(
            'element'  => '.sf_action_btn:hover,
                            .sf_action_btn:focus,
                            .sf_action_btn:active',
            'property'  =>  'background-color',
        ),
    ),
] );

// BUTTON BACKGROUND COLOR
Kirki::add_field( 'smartfolio_options', [
	'type'        => 'color',
	'settings'    => 'button_background_color',
	'label'       => 'Button Background color ', 'kirki',
	'section'     => 'colors_section',
	'default'     => '#fbb040',
	'choices'     => [
		'alpha' => false,
	],
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element'  => '.sf_action_btn',
            'property'  =>  'background-color',
        ),
        array(
            'element'  => '.sf_action_btn:hover,
                            .sf_action_btn:focus,
                            .sf_action_btn:active',
            'property'  =>  'color',
        ),
    ),
] );

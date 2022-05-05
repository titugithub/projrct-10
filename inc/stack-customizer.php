<?php 

Kirki::add_config( 'stack_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

// Main Customize Option
Kirki::add_panel( 'stack_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Stack Option', 'kirki' ),
    'description' => esc_html__( 'Description', 'kirki' ),
) );

// Banner Section
Kirki::add_section( 'banner_section', array(
    'title'          => esc_html__( 'Banner  Section', 'kirki' ),
    'description'    => esc_html__( 'My section description.', 'kirki' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

// Banner Field
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'text_setting',
	'label'    => esc_html__( 'Text Control', 'kirki' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'WE DISCOVER, DESIGN & BUILD DIGITAL
    PRESENCE OF BUSINESSES', 'kirki' ),
	'priority' => 10,
] );

// Banner Button Text
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'Banner_text_setting',
	'label'    => esc_html__( 'Button Text', 'kirki' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'Explore', 'kirki' ),
	'priority' => 10,
] );

// Banner Button URL
Kirki::add_field( 'stack_config', [
	'type'     => 'link',
	'settings' => 'Banner_text_url',
	'label'    => esc_html__( 'Button Link', 'kirki' ),
	'section'  => 'banner_section',
	'default'  => esc_html__( 'http://www.google.com', 'kirki' ),
	'priority' => 10,
] );

// Banner Image
Kirki::add_field( 'stack_config', [
	'type'        => 'image',
	'settings'    => 'image_setting_array',
	'label'       => esc_html__( 'Banner Image', 'kirki' ),
	'section'     => 'banner_section',
	'default'     => '',
	'choices'     => [
		'save_as' => 'url',
	],
] );

// Banner Title Typography

Kirki::add_field( 'stack_config', [
	'type'        => 'typography',
	'settings'    => 'typography_setting',
	'label'       => esc_html__( 'Banner Title Typography', 'kirki' ),
	'section'     => 'banner_section',
	'default'     => [
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '30px',
		'line-height'    => '48px',
		'letter-spacing' => '0',
		'color'          => '#585b60',
		'text-transform' => 'uppercase',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.head-title',
		],
	],
] );

// Banner Background Image
Kirki::add_field( 'stack_config', [
	'type'        => 'background',
	'settings'    => 'background_setting_banner',
	'label'       => esc_html__( 'Background Image', 'kirki' ),
	'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'kirki' ),
	'section'     => 'banner_section',
	'default'     => [
		'background-color'      => '',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#hero-area',
		],
	],
] );


// About Section


Kirki::add_section( 'about_section', array(
    'title'          => esc_html__( 'About Section', 'kirki' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

// About title
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'text_setting_aboutt',
	'label'    => esc_html__( 'Title', 'kirki' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'We are helping to grow
	your business.', 'kirki' ),
	'priority' => 10,
] );

// About description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'textarea_setting_about',
	'label'    => esc_html__( 'About Description', 'kirki' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', 'kirki' ),
	'priority' => 10,
] );

// About Button Text
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'text_setting_btn',
	'label'    => esc_html__( 'Button Text', 'kirki' ),
	'section'  => 'about_section',
	'default'  => esc_html__( 'MORE ABOUT US', 'kirki' ),
	'priority' => 10,
] );

// Button Link
Kirki::add_field( 'stack_config', [
	'type'     => 'link',
	'settings' => 'link_setting_link',
	'label'    => __( 'Button Link', 'kirki' ),
	'section'  => 'about_section',
	'default'  => 'https://mapsteps.com/',
	'priority' => 10,
] );

// About Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'About Items', 'kirkikirkikirki' ),
	'section'     => 'about_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'kirkikirkikirki' ),
		'field' => 'about_item_title',
	],
	'button_label' => esc_html__('Add New About Item', 'kirkikirkikirki' ),
	'settings'     => 'about_repeater',
	'default'      => [
		[
            'about_item_icon' => 'lni-microphone',
			'about_item_title' => __( 'What we do', 'kirkikirkikirki' ),
			'about_item_desc'  => __( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores ', 'kirkikirkikirki' ),
		],
	],
	'fields' => [
        'about_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'About Item Icon', 'kirkikirki' ),
			'default'     => '',
            'choices'     => array(
                'lni-microphone' => __('Icon 1', 'kirkikirki'),
                'lni-users' => __('Icon 2', 'kirkikirki'),
                'lni-medall-alt' => __('Icon 3', 'kirkikirki'),
            )
		],
		'about_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'About Item Title', 'kirkikirki' ),
			'default'     => '',
		],
		'about_item_desc' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'About Item Description', 'kirkikirki' ),
			'default'     => '',
		],
	],
    'choices' => [
		'limit' => 3
	],
] );

// Services Section
Kirki::add_section( 'services_section', array(
    'title'          => esc_html__( 'Services Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Services Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'services_show',
	'label'    => esc_html__( 'Services Show?', 'stack' ),
	'section'  => 'services_section',
	'default'  => true
] );

// Services Heading
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'services_heading',
	'label'    => esc_html__( 'Services Heading', 'stack' ),
	'section'  => 'services_section',
	'default'  => esc_html__( 'Our Services', 'stack' )
] );

//  Services Description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'services_desc',
	'label'    => esc_html__( 'Services Description', 'stack' ),
	'section'  => 'services_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
	began to grow in 2020.', 'stack' )
] );

// Services Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Services Items', 'stack' ),
	'section'     => 'services_section',
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'service_item_title',
	],
	'button_label' => esc_html__('Add New Service Item', 'stack' ),
	'settings'     => 'services_repeater',
	'default'      => [
		[
            'service_item_icon' => 'lni-pencil',
			'service_item_title' => __( 'Service Title', 'stack' ),
			'service_item_desc'  => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack' ),
		],
	],
	'fields' => [
        'service_item_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Service Item Icon', 'stack' ),
			'default'     => '',
            'choices'     => array(
                'lni-pencil' => __('Pencil', 'stack'),
                'lni-briefcase' => __('Briefcase', 'stack'),
                'lni-cog' => __('Cog', 'stack'),
                'lni-mobile' => __('Mobile', 'stack'),
                'lni-layers' => __('Layers', 'stack'),
                'lni-rocket' => __('Rocket', 'stack'),
            )
		],
		'service_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Service Item Title', 'stack' ),
			'default'     => '',
		],
		'service_item_desc' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Service Item Description', 'stack' ),
			'default'     => '',
		],
	],
    'choices' => [
		'limit' => 6
	],
] );

//  Services Items Align
Kirki::add_field( 'stack_config', [
	'type'     => 'radio-buttonset',
	'settings' => 'services_item_align',
	'label'    => esc_html__( 'Services Items Alignment', 'stack' ),
	'section'  => 'services_section',
	'default'  => 'left',
	'choices'     => [
		'left'   => esc_html__( 'Left', 'stack' ),
		'center' => esc_html__( 'Center', 'stack' ),
		'right'  => esc_html__( 'Right', 'stack' ),
	],
	'output' => array(
		array(
			'element' => '.services-item',
			'property' => 'text-align'
		)
	)
] );

//  Services Items Number
Kirki::add_field( 'stack_config', [
	'type'     => 'select',
	'settings' => 'services_item_number',
	'label'    => esc_html__( 'Services Items Number', 'stack' ),
	'section'  => 'services_section',
	'default'  => 'col-lg-4',
	'choices'     => [
		'col-lg-4'   => esc_html__( '3 Columns', 'stack' ),
		'col-lg-6' => esc_html__( '2 Columns', 'stack' ),
		'col-lg-3'  => esc_html__( '4 Columns', 'stack' ),
	]
] );

// Video Section
Kirki::add_section( 'video_section', array(
    'title'          => esc_html__( 'Video Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Video Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'video_show',
	'label'    => esc_html__( 'Video Show?', 'stack' ),
	'section'  => 'video_section',
	'default'  => true
] );

// Video URL
Kirki::add_field( 'stack_config', [
	'type'     => 'link',
	'settings' => 'video_url',
	'label'    => esc_html__( 'Video URL', 'stack' ),
	'section'  => 'video_section',
	'default'  => 'https://www.youtube.com/watch?v=yP6kdOZHids'
] );

// Video Title
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'video_title',
	'label'    => esc_html__( 'Video Title', 'stack' ),
	'section'  => 'video_section',
	'default'  => __('Watch Video', 'stack')
] );

// Video Background
Kirki::add_field( 'stack_config', [
	'type'        => 'background',
	'settings'    => 'video_background',
	'label'       => esc_html__( 'Background Control', 'stack' ),
	'section'     => 'video_section',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.video-promo',
		],
	],
] );

// Team Section
Kirki::add_section( 'team_section', array(
    'title'          => esc_html__( 'Team Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Team Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'team_show',
	'label'    => esc_html__( 'Team Show?', 'stack' ),
	'section'  => 'team_section',
	'default'  => true
] );

// Team Heading
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'team_heading',
	'label'    => esc_html__( 'Team Heading', 'stack' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'Our Team', 'stack' )
] );

//  Team Description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'team_desc',
	'label'    => esc_html__( 'Team Description', 'stack' ),
	'section'  => 'team_section',
	'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology
	began to grow in 2020.', 'stack' )
] );

// Team Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Team Items', 'stack' ),
	'section'     => 'team_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'team_title',
	],
	'button_label' => esc_html__('Add New About Item', 'stack' ),
	'settings'     => 'team_repeater',
	'fields' => [
        'team_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Team Image', 'stack' ),
			'default'     => '',
		],
		'team_facebook' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Facebook URL', 'stack' ),
			'default'     => 'https://www.facebook.com',
		],
		'team_twitter' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Twitter URL', 'stack' ),
			'default'     => 'https://www.twitter.com',
		],
		'team_instagram' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Instagram URL', 'stack' ),
			'default'     => 'https://www.instagram.com',
		],
		'team_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Team Name', 'stack' ),
			'default'     => __('John Doe', 'stack'),
		],
		'team_desg' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Team Designation', 'stack' ),
			'default'     => __('Web Developer', 'stack'),
		],
	],
    'choices' => [
		'limit' => 4
	],
] );




// Counter Section
Kirki::add_section( 'counter_section', array(
    'title'          => esc_html__( 'Counter Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Counter Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'counter_show',
	'label'    => esc_html__( 'Counter Show?', 'stack' ),
	'section'  => 'counter_section',
	'default'  => true
] );

// Counter Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Counter Items', 'stack' ),
	'section'     => 'counter_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'counter_title',
	],
	'button_label' => esc_html__('Add New Counter Item', 'stack' ),
	'settings'     => 'counter_repeater',
	'fields' => [
        'counter_icon' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Counter Icon', 'stack' ),
			'default'     => '',
			'choices'     => array(
				'lni-users' => __('Users', 'stack'),
				'lni-emoji-smile' => __('Smile', 'stack'),
				'lni-download' => __('Download', 'stack'),
				'lni-thumbs-up' => __('Thumbs Up', 'stack'),
			),
		],
		'counter_number' => [
			'type'        => 'number',
			'label'       => esc_html__( 'Counter Number', 'stack' ),
			'default'     => '100',
		],
		'counter_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Counter Title', 'stack' ),
			'default'     => __('Users', 'stack'),
		],
		'counter_animation_name' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Counter Animation Name', 'stack' ),
			'default'     => 'fadeInUp',
			'choices'     => array(
				'fadeInUp' => __('fadeInUp', 'stack'),
				'fadeInLeft' => __('fadeInLeft', 'stack'),
				'fadeInRight' => __('fadeInRight', 'stack'),
			),
		],
		'counter_animation_duration' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Counter Animation Duration', 'stack' ),
			'default'     => '0.2s',
			'choices'     => array(
				'0.2s' => __('0.2s', 'stack'),
				'0.4s' => __('0.4s', 'stack'),
				'0.6s' => __('0.6s', 'stack'),
				'0.8s' => __('0.8s', 'stack'),
			),
		],
	],
    'choices' => [
		'limit' => 4
	],
] );

// Counter Background
Kirki::add_field( 'stack_config', [
	'type'        => 'background',
	'settings'    => 'counter_background',
	'label'       => esc_html__( 'Background', 'stack' ),
	'section'     => 'counter_section',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#counter',
		],
	],
] );



// Price Section
Kirki::add_section( 'price_section', array(
    'title'          => esc_html__( 'Price Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

// Price Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Price Items', 'stack' ),
	'section'     => 'price_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'price_name',
	],
	'button_label' => esc_html__('Add New Price Item', 'stack' ),
	'settings'     => 'price_repeater',
	'fields' => [
		'price_featured' => [
			'type'        => 'checkbox',
			'label'       => esc_html__( 'Featured?', 'stack' ),
			'default'     => false,
		],
        'price_name' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Price Name', 'stack' ),
			'default'     => __('Basic', 'stack'),
		],
		'price_amount' => [
			'type'        => 'number',
			'label'       => esc_html__( 'Price Amount', 'stack' ),
			'default'     => __('12.99', 'stack'),
		],
		'price_days' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Select Days', 'stack' ),
			'default'     => '',
			'choices'    => array(
				'month' => __('month', 'stack'),
				'year' => __('year', 'stack'),
			)
		],
		
		'price_feature-1' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Feature 1', 'stack' ),
			'default'     => __('Business Analyzing', 'stack'),
		],
		
		'price_feature-2' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Feature 2', 'stack' ),
			'default'     => __('24/7 Tech Suport', 'stack'),
		],
		
		'price_feature-3' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Feature 3', 'stack' ),
			'default'     => __('Operational Excellence', 'stack'),
		],
		
		'price_feature-4' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Feature 4', 'stack' ),
			'default'     => __('2 Database', 'stack'),
		],
		
		'price_feature-5' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Feature 5', 'stack' ),
			'default'     => __('Customer Support', 'stack'),
		],

		'price_btn_text' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Button Label', 'stack' ),
			'default'     => __('Get It', 'stack'),
		],
		'price_btn_url' => [
			'type'        => 'link',
			'label'       => esc_html__( 'Button URL', 'stack' ),
			'default'     => 'https://wwww.facebook.com',
		],
	],
    'choices' => [
		'limit' => 3
	],
] );


// Skill Section
Kirki::add_section( 'skill_section', array(
    'title'          => esc_html__( 'Skill Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Skill Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'skill_show',
	'label'    => esc_html__( 'Skill Show?', 'stack' ),
	'section'  => 'skill_section',
	'default'  => true
] );

//  Skill Image
Kirki::add_field( 'stack_config', [
	'type'     => 'image',
	'settings' => 'skill_image',
	'label'    => esc_html__( 'Skill Image', 'stack' ),
	'section'  => 'skill_section',
	'default'  => ''
] );

//  Skill Title
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'skill_title',
	'label'    => esc_html__( 'Skill Title', 'stack' ),
	'section'  => 'skill_section',
	'default'  => __('Our Skill', 'stack')
] );

//  Skill Description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'skill_desc',
	'label'    => esc_html__( 'Skill Description', 'stack' ),
	'section'  => 'skill_section',
	'default'  => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus architecto laudantium dolorem, ', 'stack')
] );

// Skill Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Skill Items', 'stack' ),
	'section'     => 'skill_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'skill_item_title',
	],
	'button_label' => esc_html__('Add New Skill Item', 'stack' ),
	'settings'     => 'skill_repeater',
	'fields' => [
        'skill_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Skill Title', 'stack' ),
			'default'     => __('Strategy & Analysis', 'stack'),
		],
		'skill_item_number' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Skill Number', 'stack' ),
			'default'     => '100',
		],
	],
    'choices' => [
		'limit' => 3
	],
] );



// Work Section
Kirki::add_section( 'work_section', array(
    'title'          => esc_html__( 'Work Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Work Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'switch',
	'settings' => 'work_show',
	'label'    => esc_html__( 'Work Show?', 'stack' ),
	'section'  => 'work_section',
	'default'  => 'show',
	'choices'     => [
		'show'  => esc_html__( 'Show', 'stack' ),
		'hide' => esc_html__( 'Hide', 'stack' ),
	],
] );

//  Work Title
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'work_title',
	'label'    => esc_html__( 'Work Title', 'stack' ),
	'section'  => 'work_section',
	'default'  => __('Our Work', 'stack')
] );

//  Work Description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'work_desc',
	'label'    => esc_html__( 'Work Description', 'stack' ),
	'section'  => 'work_section',
	'default'  => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus architecto laudantium dolorem, ', 'stack')
] );

// Work Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Work Items', 'stack' ),
	'section'     => 'work_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'work_item_title',
	],
	'button_label' => esc_html__('Add New Work Item', 'stack' ),
	'settings'     => 'work_repeater',
	'fields' => [
        'work_item_title' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Work Title', 'stack' ),
			'default'     => __('Creative Design', 'stack'),
		],
		'work_item_small_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Work Small Image', 'stack' ),
			'default'     => '100',
		],
		'work_item_big_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Work Big Image', 'stack' ),
			'default'     => '100',
		],
	],
    'choices' => [
		'limit' => 6
	],
] );


// Testimonials Section
Kirki::add_section( 'testimonials_section', array(
    'title'          => esc_html__( 'Testimonials Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Testimonials Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'switch',
	'settings' => 'testimonials_show',
	'label'    => esc_html__( 'Testimonials Show?', 'stack' ),
	'section'  => 'testimonials_section',
	'default'  => 'show',
	'choices'     => [
		'show'  => esc_html__( 'Show', 'stack' ),
		'hide' => esc_html__( 'Hide', 'stack' ),
	],
] );

// Testimonials Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Testimonials Items', 'stack' ),
	'section'     => 'testimonials_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'testimonial_item_name',
	],
	'button_label' => esc_html__('Add New Testimonial Item', 'stack' ),
	'settings'     => 'testimonial_repeater',
	'fields' => [
        'testimonial_item_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Testimonial Image', 'stack' ),
			'default'     => '',
		],
		'testimonial_item_name' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Testimonial Name', 'stack' ),
			'default'     => __('John Doe', 'stack'),
		],
		'testimonial_item_desg' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Testimonial Designation', 'stack' ),
			'default'     => __('Web Developer', 'stack'),
		],
		'testimonial_item_desc' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Testimonial Description', 'stack' ),
			'default'     => __('Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. ', 'stack'),
		],
	],
    'choices' => [
		'limit' => 6
	],
] );



// Clients Section
Kirki::add_section( 'clients_section', array(
    'title'          => esc_html__( 'Clients Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//  Clients Show / Hide
Kirki::add_field( 'stack_config', [
	'type'     => 'checkbox',
	'settings' => 'clients_show',
	'label'    => esc_html__( 'Clients Show?', 'stack' ),
	'section'  => 'clients_section',
	'default'  => true,
] );

//  Clients Title
Kirki::add_field( 'stack_config', [
	'type'     => 'text',
	'settings' => 'client_title',
	'label'    => esc_html__( 'Client Title', 'stack' ),
	'section'  => 'clients_section',
	'default'  => __('NOTABLE CLIENTS', 'stack'),
] );

//  Clients Description
Kirki::add_field( 'stack_config', [
	'type'     => 'textarea',
	'settings' => 'client_desc',
	'label'    => esc_html__( 'Client Description', 'stack' ),
	'section'  => 'clients_section',
	'default'  => __('Over the last 20 years, we have helped and guided organisations to achieve outstanding results', 'stack'),
] );

// Clients Items
Kirki::add_field( 'stack_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Clients Items', 'stack' ),
	'section'     => 'clients_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Add New Item', 'stack' ),
		'field' => 'client_item_name',
	],
	'button_label' => esc_html__('Add New Client Item', 'stack' ),
	'settings'     => 'client_repeater',
	'fields' => [
		'client_item_name' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Client Name', 'stack' ),
			'default'     => __('John Doe', 'stack'),
		],
        'client_item_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Client Image', 'stack' ),
			'default'     => '',
		],
	],
    'choices' => [
		'limit' => 4
	],
] );




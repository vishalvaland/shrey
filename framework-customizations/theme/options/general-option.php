<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'general' => array(
		'title' => __('General', 'unyson'),
		'type' => 'tab',
		'options' => array(
			'general-box' => array(
				'title' => __('General Settings', 'unyson'),
				'type' => 'box',
				'options' => array(
					'logo' => array(
						'label' => __('Logo', 'unyson'),
						'desc' => __('Write your website logo name', 'unyson'),
						'type' => 'text',
						'value' => get_bloginfo('name'),
					),
					'favicon' => array(
						'label' => __('Favicon', 'unyson'),
						'desc' => __('Upload a favicon image', 'unyson'),
						'type' => 'upload',
					),
				),
			),

			'page_layout' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'value' => array(
					'page_layout' => 'full',
				),
				'picker' => array(
					'page_layout' => array(
						'label' => esc_html__('Whole Page Layout', 'jevelin'),
						'desc' => esc_html__('Choose main page layout. Boxed layout will not work together with left header', 'jevelin'),
						'type' => 'radio',
						'choices' => array(
							'full' => esc_html__('Full Width', 'jevelin'),
							'boxed' => esc_html__('Boxed Layout', 'jevelin'),
						),
					),
				),
				'choices' => array(
					'boxed' => array(
						'border_style' => array(
							'label' => esc_html__('Border Style', 'jevelin'),
							'desc' => esc_html__('Choose content border style', 'jevelin'),
							'type' => 'radio',
							'choices' => array(
								'none' => esc_html__('None', 'jevelin'),
								'shadow' => esc_html__('Shadow', 'jevelin'),
								'line' => esc_html__('Line', 'jevelin'),
							),
							'value' => 'shadow',
						),

						'background_color' => array(
							'label' => esc_html__('Background Color', 'jevelin'),
							'desc' => esc_html__('Select background color', 'jevelin'),
							'type' => 'color-picker',
							'value' => '#fafafa',
						),

						'background_image' => array(
							'label' => esc_html__('Page Background Image', 'jevelin'),
							'desc' => esc_html__('Select page background image', 'jevelin'),
							'type' => 'upload',
							'images_only' => true,
						),
					),
				),
			),
		),
	),
);
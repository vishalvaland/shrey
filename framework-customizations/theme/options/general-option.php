<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'general' => array(
		'title' => __('General', 'shrey'),
		'type' => 'tab',
		'options' => array(
			'general-box' => array(
				'title' => __('General Settings', 'shrey'),
				'type' => 'box',
				'options' => array(
					'site_layout'                => array(
						'label'   => __('Select Site Layout', 'shrey'),
						'type'    => 'radio',
						'value'   => 'full',
						'desc'    =>  __('Select website layout style.', 'shrey'),
						'choices' => array(
							'full' => __('Full Width', 'shrey'),
							'box' => __('Box Layout', 'shrey'),
						),
						 
					),
					'site_background_color11'         => array(
						'label' => __( 'Site Background Color', 'shrey' ),
						'type'  => 'rgba-color-picker',
						'value' => 'rgba(255, 0, 0, .5)',
						'desc'  => __('Select site background color', 'shrey'), 
					),

					'Site_background_image'          => array(
						'label'   => __( 'Site Background Image', 'shrey' ),
						'type'    => 'background-image',
						'value'   => 'none',
						'choices' => array(
							'none' => array(
								'icon' => get_template_directory_uri() . '/images/patterns/no_pattern.jpg',
								'css'  => array(
									'background-image' => 'none'
								)
							),
							'bg-1' => array(
								'icon' => get_template_directory_uri() . '/images/patterns/diagonal_bottom_to_top_pattern_preview.jpg',
								'css'  => array(
									'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/diagonal_bottom_to_top_pattern.png' . '")',
									'background-repeat' => 'repeat',
								)
							),
							'bg-2' => array(
								'icon' => get_template_directory_uri() . '/images/patterns/diagonal_top_to_bottom_pattern_preview.jpg',
								'css'  => array(
									'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/diagonal_top_to_bottom_pattern.png' . '")',
									'background-repeat' => 'repeat',
								)
							),
							'bg-3' => array(
								'icon' => get_template_directory_uri() . '/images/patterns/dots_pattern_preview.jpg',
								'css'  => array(
									'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/dots_pattern.png' . '")',
									'background-repeat' => 'repeat',
								)
							),
							'bg-4' => array(
								'icon' => get_template_directory_uri() . '/images/patterns/romb_pattern_preview.jpg',
								'css'  => array(
									'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/romb_pattern.png' . '")',
									'background-repeat' => 'repeat',
								)
							),
							'bg-5' => array(
								'icon' => get_template_directory_uri() . '/images/patterns/square_pattern_preview.jpg',
								'css'  => array(
									'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/square_pattern.png' . '")',
									'background-repeat' => 'repeat',
								)
							),
							'bg-6' => array(
								'icon' => get_template_directory_uri() . '/images/patterns/noise_pattern_preview.jpg',
								'css'  => array(
									'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/noise_pattern.png' . '")',
									'background-repeat' => 'repeat',
								)
							),
							'bg-7' => array(
								'icon' => get_template_directory_uri() . '/images/patterns/vertical_lines_pattern_preview.jpg',
								'css'  => array(
									'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/vertical_lines_pattern.png' . '")',
									'background-repeat' => 'repeat',
								)
							),
							'bg-8' => array(
								'icon' => get_template_directory_uri() . '/images/patterns/waves_pattern_preview.jpg',
								'css'  => array(
									'background-image'  => 'url("' . get_template_directory_uri() . '/images/patterns/waves_pattern.png' . '")',
									'background-repeat' => 'repeat',
								)
							),
						),
						 'desc'    =>__('Select website background image(Works only if box layout selected).','shrey'),
						 
					),
 
					'favicon' => array(
						'label' => __('Favicon', 'unyson'),
						'desc'     => __('Upload a 32px x 32px (ico/png) image', 'shrey'),
						'type' => 'upload',
					),
					'responsive_layout'                    => array(
						'label'        => __( 'Responsive Layout', 'shrey' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'Yes', 'shrey' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'No', 'shrey' )
						),
						'value'        => 'yes',
						// 'desc'         => $desc,						 
					),
				),
			),

		 
		),
	),
);

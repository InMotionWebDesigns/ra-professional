<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'ra-incunabula';
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Enable sticky footer and attribution links.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	
	// Disable background image and call to action.
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;
	$boldgrid_framework_configs['template']['call-to-action'] = 'disabled';

	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'5' => array( '[widget]boldgrid-widget-1' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[action]boldgrid_primary_navigation' ),
		'8' => array( '[widget]boldgrid-widget-2' ),
		'13' => array( '[menu]tertiary' ),
	);

	// Assign menus, widgets, and actions to locations in generic footer template.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-3' ),
		'3' => array( '[menu]social' ),
		'5' => array( '[action]boldgrid_display_contact_block' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
		'11' => array( '[menu]footer_center' ),
	);

	// Specify container classes.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = 'container-fluid';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#00a651',
				'#333333',
				'#ebebeb',
				'#cccccc',
				'#1c5e90',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#62717e',
				'#333333',
				'#62717e',
				'#333333',
				'#ffffff',
			),
		),
	);
	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Enable Typography Controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Merriweather';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Merriweather';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 32;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Merriweather';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 18;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'none';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Merriweather';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 150;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h4 site-description';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.page-template-default .entry-title a'] = array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => 3.0,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['h2.h1'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 2.6,
	);

	// Button Classes.
	$boldgrid_framework_configs['components']['buttons']['variables']['button-primary-classes'] = '.btn, .btn-color-1';
	$boldgrid_framework_configs['components']['buttons']['variables']['button-secondary-classes'] = '.btn, .btn-color-2';

	// Social Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations'] = array(
		'primary' => 'Primary Menu',
		'secondary' => 'Header Top',
		'tertiary' => 'Header Bottom',
		'social' => 'Footer Top',
		'footer_center' => 'Footer Bottom',
	);

	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	// Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Merriweather';
	$controls['logo_font_size']['default'] = 42;
	$controls['logo_margin_top']['default'] = 0;
	$controls['logo_margin_bottom']['default'] = 0;
	$controls['logo_letter_spacing']['default'] = 0;
	$controls['logo_text_transform']['default'] = 'none';

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
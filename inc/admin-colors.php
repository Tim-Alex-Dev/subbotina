<?php
/**
 * wp-admin color scheme "Theme" in the project colors (dist/css/admin-colors.css, built from assets/scss/admin-colors.scss):
 * registered and used for every user, so wp-admin shows the project colors instead of the default blue.
 * The swatches below = the HEX values in admin-colors.scss (keep them equal to the palette).
 */

function it_admin_color_scheme() {
	wp_admin_css_color(
		'theme',
		esc_html__( 'Theme', 'subbotina' ),
		add_query_arg( 'ver', it_asset_ver( 'css/admin-colors.css' ), IT_CSS . 'admin-colors.css' ),
		[ '#1e1e1e', '#2a2a29', '#df0000', '#ffffff' ], // preview swatches in the profile screen: menu, submenu, highlight, text
		[
			'base'    => '#a7aaad',
			'focus'   => '#ffffff',
			'current' => '#ffffff',
		]
	);
}

add_action( 'admin_init', 'it_admin_color_scheme' );

// every user gets the project scheme (the personal choice in the profile screen is ignored)
add_filter( 'get_user_option_admin_color', fn() => 'theme' );

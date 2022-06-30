<?php
/**
 * Sets all of our theme defaults.
 *
 * @package Galaxis
 */

if ( ! function_exists( 'galaxis_get_color_defaults' ) ) {
	/**
	 * Set default options.
	 */
	function galaxis_get_color_defaults() {
		return apply_filters(
			'galaxis_color_option_defaults',
			array(
				'topbar_bg_color'            => '#1291ee',
				'back_to_top_bg_color'       => '#299cf0',
				'back_to_top_hover_bg_color' => '#333333',
				'footer_bg_color'            => '#081d56',
				'selection_bg_color'         => '#f15b6c',
			)
		);
	}
}

if ( ! function_exists( 'galaxis_copyright_default' ) ) {
	/**
	 * Set default copyright text.
	 */
	function galaxis_copyright_default() {
		/* translators: %1$s: current year, %2$s: blog name, %3$s: theme name, %4$s - theme shop URL, %5$s: theme shop name */
		return sprintf( wp_kses( __( 'Copyright &copy; %1$s %2$s.<br>Theme %3$s by <a href="%4$s" itemprop="url">%5$s</a>.', 'galaxis' ), galaxis_site_info_allowed_tags() ), esc_html( date_i18n( _x( 'Y', 'copyright date format', 'galaxis' ) ) ), get_bloginfo( 'name', 'display' ), esc_html__( 'Galaxis', 'galaxis' ), esc_url( 'https://scriptstown.com/' ), esc_html__( 'ScriptsTown', 'galaxis' ) );
	}
}

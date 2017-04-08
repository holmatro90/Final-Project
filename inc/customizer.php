<?php
/**
 * Final Project Theme Customizer
 *
 * @package Final_Project
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function final_project_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'final_project_customize_register' );

function final_project_custom_header_settings ($wp_customize){
	/**
	 * Adding custom Logo
	 */
	$wp_customize->add_section('final_project_custom_header_settings_section', array(
		'title' => 'Header Settings'
	));
	$wp_customize->add_setting('final_project-logo');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'final_project-logo-control', array(
		'label' => 'Logo',
		'section' => 'final_project_custom_header_settings_section',
		'settings' => 'final_project-logo'
	)));


}
add_action( 'customize_register', 'final_project_custom_header_settings' );


function final_project_custom_home_settings ($wp_customize){
	/**
	 * Adding custom img
	 */
$wp_customize->add_section('final_project_custom_home_settings_section', array(
	'title' => 'Home Settings'
));
	$wp_customize->add_setting('final_project-home');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'final_project-home-control', array(
		'label' => 'Image',
		'section' => 'final_project_custom_home_settings_section',
		'settings' => 'final_project-home',
		'width' => '1000',
		'height' => '1000'
	)));

	$wp_customize->add_section('final_project_custom_welcome_settings_section', array(
		'title' => 'Welcome Settings'
	));
	$wp_customize->add_setting('final_project-welcome');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'final_project-welcome-control', array(
		'label' => 'Image',
		'section' => 'final_project_custom_welcome_settings_section',
		'settings' => 'final_project-welcome',
		'width' => '1000',
		'height' => '1000'
	)));



}
add_action( 'customize_register', 'final_project_custom_home_settings' );

function final_project_custom_welcome_settings ($wp_customize){
	/**
	 * Adding custom img
	 */
	$wp_customize->add_section('final_project_custom_welcome_settings_section', array(
		'title' => 'Welcome Settings'
	));
	$wp_customize->add_setting('final_project-welcome');

	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'final_project-welcome-control', array(
		'label' => 'Image',
		'section' => 'final_project_custom_welcome_settings_section',
		'settings' => 'final_project-welcome',
		'width' => '1000',
		'height' => '1000'
	)));


}
add_action( 'customize_register', 'final_project_custom_welcome_settings' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function final_project_customize_preview_js() {
	wp_enqueue_script( 'final_project_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'final_project_customize_preview_js' );

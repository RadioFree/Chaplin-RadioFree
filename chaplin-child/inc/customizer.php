<?php
// Theme Customizer Settings

function chaplin_child_customizer_options( $wp_customize ) {
	
	$wp_customize->add_setting( 'chaplin_child_ajax_grid_post_headings_letter_case', array(
		'default' 			=> 'initial',
		'sanitize_callback' => 'chaplin_sanitize_select',
	) );

	$wp_customize->add_control( 'chaplin_child_ajax_grid_post_headings_letter_case', array(
		'label' 		=> __( 'Ajax Grid Headings Case', 'chaplinchild' ),
		'section' 		=> 'chaplin_fonts_options',
		'settings' 		=> 'chaplin_child_ajax_grid_post_headings_letter_case',
		'type' 			=> 'select',
		'choices' 		=> array(
			'initial' 		=> __( 'Normal', 'chaplinchild' ),
			'uppercase' 	=> __( 'Uppercase', 'chaplinchild' ),
			'lowercase' 	=> __( 'Lowercase', 'chaplinchild' ),
		),
	) );
	
	/* Audio Player Customizer Settings */
	
	$wp_customize->add_section( 'audio_player_section', array(
        'title'    => __('Audio Player', 'chaplinchild'),
        'description' => '',
        'priority' => 120,
    ) );
	
	$wp_customize->add_setting('audio_player_icon_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'icon_color', array(
        'label'    => __('Button Icon Color', 'chaplinchild'),
        'section'  => 'audio_player_section',
        'settings' => 'audio_player_icon_color',
    )));
	
	$wp_customize->add_setting('audio_player_icon_bg_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'icon_bg_color', array(
        'label'    => __('Button Background Color', 'chaplinchild'),
        'section'  => 'audio_player_section',
        'settings' => 'audio_player_icon_bg_color',
    )));
	
	$wp_customize->add_setting('audio_player_text_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'text_color', array(
        'label'    => __('Text Color', 'chaplinchild'),
        'section'  => 'audio_player_section',
        'settings' => 'audio_player_text_color',
    )));
	
	$wp_customize->add_setting('audio_player_prg_bg_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'prg_bg_color', array(
        'label'    => __('Progress Bar Background Color', 'chaplinchild'),
        'section'  => 'audio_player_section',
        'settings' => 'audio_player_prg_bg_color',
    )));
	
	$wp_customize->add_setting('audio_player_prg_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'prg_color', array(
        'label'    => __('Progress Bar Color', 'chaplinchild'),
        'section'  => 'audio_player_section',
        'settings' => 'audio_player_prg_color',
    )));
	
	$wp_customize->add_setting('audio_player_prg_hover_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'prg_hover_color', array(
        'label'    => __('Progress Bar Hover Color', 'chaplinchild'),
        'section'  => 'audio_player_section',
        'settings' => 'audio_player_prg_hover_color',
    )));
	
	$wp_customize->add_setting('audio_player_prg_boxshadow_color', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'prg_boxshadow_color', array(
        'label'    => __('Progress Bar Background Drop Shadow', 'chaplinchild'),
        'section'  => 'audio_player_section',
        'settings' => 'audio_player_prg_boxshadow_color',
    )));
	
	$wp_customize->add_setting('audio_player_prg_boxshadow_blur', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
	
	$wp_customize->add_control( 'prg_boxshadow_blur', array(
        'label'    => __('Progress Bar Background Drop Shadow Blur', 'chaplinchild'),
        'section'  => 'audio_player_section',
        'settings' => 'audio_player_prg_boxshadow_blur',
    ));
	
	$wp_customize->add_setting('audio_player_prg_boxshadow_spread', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
	
	$wp_customize->add_control( 'prg_boxshadow_spread', array(
        'label'    => __('Progress Bar Background Drop Shadow Spread', 'chaplinchild'),
        'section'  => 'audio_player_section',
        'settings' => 'audio_player_prg_boxshadow_spread',
    ));
	
}

add_action( 'customize_register' , 'chaplin_child_customizer_options' );
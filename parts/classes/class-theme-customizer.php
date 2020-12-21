<?php 

/* ---------------------------------------------------------------------------------------------
   CUSTOMIZER SETTINGS
   --------------------------------------------------------------------------------------------- */

if ( ! class_exists( 'Chaplin_Customize' ) ) :
	class Chaplin_Customize {

		public static function chaplin_register( $wp_customize ) {

			/* ------------------------------------------------------------------------
			 * Theme Options Panel
			 * ------------------------------------------------------------------------ */

			$wp_customize->add_panel( 'chaplin_theme_options', array(
				'priority'       => 30,
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => __( 'RADIO FREE Options', 'chaplinchild' ),
				'description'    => __( 'Options included in the Chaplin theme.', 'chaplinchild' ),
			) );

			
			
			
			
			
	
			/* ------------------------------------------------------------------------
			 * SEO Settings
			 * ------------------------------------------------------------------------ */
			/* Adding SEO Section ------------------ */
			
			$wp_customize->add_section( 'chaplin_seo_settings', array(
				'title' 		=> __( 'SEO', 'chaplinchild' ),
				'priority' 		=> 30,
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Setup SEO for your site.', 'chaplinchild' ),
				'panel'			=> 'chaplin_theme_options',
			) );

				/* SEO Site Name ------------------ */		
			$wp_customize->add_setting('chaplin_seo_site_name', array( 'default' => '', 
			) ) ;
			$wp_customize->add_control('chaplin_seo_site_name', array(
 				'label'   => 'Meta Site Name',
 				'section' => 'chaplin_seo_settings',
 				'type'    => 'text',
			) ) ;	
				$wp_customize->add_setting('chaplin_seo_site_description', array( 'default' => '', 
			) ) ;
				/* SEO Site Description ------------------ */		

			$wp_customize->add_control('chaplin_seo_site_description', array(
 				'label'   => 'Meta Description',
 				'section' => 'chaplin_seo_settings',
 				'type'    => 'textarea',
			) ) ;
				$wp_customize->add_setting('chaplin_seo_site_keywords', array( 'default' => '', 
			) ) ;
			
				/* SEO Site Keywords ------------------ */		

			$wp_customize->add_control('chaplin_seo_site_keywords', array(
 				'label'   => 'Meta Keywords',
 				'section' => 'chaplin_seo_settings',
 				'type'    => 'textarea',
				'description'	=> __( 'Add keywords separated by using a comma.', 'chaplinchild' ),
			) ) ;
	
				/* SEO Twitter Settings ------------------ */	
			
			$wp_customize->add_setting('chaplin_seo_twitter', array( 'default' => '', 
			) ) ;
			$wp_customize->add_control('chaplin_seo_twitter', array(
 				'label'   => 'Twitter Account',
 				'section' => 'chaplin_seo_settings',
 				'type'    => 'text',
				'description'	=> __( 'Do not include the @ symbol.', 'chaplinchild' ),
			) ) ;
			
				/* SEO Image ------------------ */	
			$wp_customize->add_setting( 'chaplin_seo_image', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_seo_image', array(
				'label'			=> __( 'SEO Default Image', 'chaplinchild' ),
				'description'	=> __( '1920 x 1080 OpenGraph Image', 'chaplinchild' ),
				'priority'		=> 8,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_seo_settings',
			) ) );
			
			
			


			
			
			
			
			
			
			
			
			
			
			
			
			
			/* ------------------------------------------------------------------------
			 * Brand Identity
			 * ------------------------------------------------------------------------ */
			/* Adding Brand Section ------------------ */
			
			$wp_customize->add_section( 'chaplin_brand_identity', array(
				'title' 		=> __( 'Brand', 'chaplinchild' ),
				'priority' 		=> 60,
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Set the brand of your site.', 'chaplinchild' ),
				'panel'			=> 'chaplin_theme_options',
			) );

			/* Brand Name and Tagline ------------------ */
			
			$wp_customize->add_setting('chaplin_brand_name', array( 'default' => '', 
			) ) ;
			$wp_customize->add_control('chaplin_brand_name', array(
 				'label'   => 'Brand Name',
 				'section' => 'chaplin_brand_identity',
 				'type'    => 'text',
			) ) ;	
				$wp_customize->add_setting('chaplin_brand_tagline', array( 'default' => '', 
			) ) ;
			$wp_customize->add_control('chaplin_brand_tagline', array(
 				'label'   => 'Brand Tagline',
 				'section' => 'chaplin_brand_identity',
 				'type'    => 'textarea',
			) ) ;	
	
			/* Brand Logo ------------------ */	

			$wp_customize->add_setting( 'chaplin_brand_logo_light', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_brand_logo_light', array(
				'label'			=> __( 'Brand Logo (light)', 'chaplinchild' ),
				'description'	=> __( 'Used to set the official brand of the site.', 'chaplinchild' ),
				'priority'		=> 8,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_brand_identity',
			) ) );

			$wp_customize->add_setting( 'chaplin_brand_logo_dark', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_brand_logo_dark', array(
				'label'			=> __( 'Brand Logo (dark)', 'chaplinchild' ),
				'description'	=> __( 'Used to set the official brand of the site.', 'chaplinchild' ),
				'priority'		=> 8,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_brand_identity',
			) ) );
			
			$wp_customize->add_setting( 'chaplin_brand_icon_light', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_brand_icon_light', array(
				'label'			=> __( 'Brand Icon (light)', 'chaplinchild' ),
				'description'	=> __( 'Used to set the official brand of the site.', 'chaplinchild' ),
				'priority'		=> 8,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_brand_identity',
			) ) );
			
					$wp_customize->add_setting( 'chaplin_brand_icon_dark', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_brand_icon_dark', array(
				'label'			=> __( 'Brand Icon (dark)', 'chaplinchild' ),
				'description'	=> __( 'Used to set the official brand of the site.', 'chaplinchild' ),
				'priority'		=> 8,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_brand_identity',
			) ) );
			
			/* Brand Color 1 ------------------ */
			
		$wp_customize->add_setting( 'chaplin_brand_color_1', array(
				'default' 			=> get_theme_mod( 'chaplin_accent_color', '#FFFFFF' ),
				'type' 				=> 'theme_mod',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'chaplin_brand_color_1', array(
				'label' 		=> __( 'Brand Color 1', 'chaplinchild' ),
				'description'	=> __( '', 'chaplinchild' ),
				'section' 		=> 'chaplin_brand_identity',
				'settings' 		=> 'chaplin_brand_color_1',
			) ) );	
			
			/* Brand Color 2 ------------------ */
			
				$wp_customize->add_setting( 'chaplin_brand_color_2', array(
				'default' 			=> get_theme_mod( 'chaplin_accent_color', '#007C89' ),
				'type' 				=> 'theme_mod',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'chaplin_brand_color_2', array(
				'label' 		=> __( 'Brand Color 2', 'chaplinchild' ),
				'description'	=> __( '', 'chaplinchild' ),
				'section' 		=> 'chaplin_brand_identity',
				'settings' 		=> 'chaplin_brand_color_2',
			) ) );	
		
			/* Brand Color 3 ------------------ */
			
				$wp_customize->add_setting( 'chaplin_brand_color_3', array(
				'default' 			=> get_theme_mod( 'chaplin_accent_color', '#FFDB14' ),
				'type' 				=> 'theme_mod',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'chaplin_brand_color_3', array(
				'label' 		=> __( 'Brand Color 3', 'chaplinchild' ),
				'description'	=> __( '', 'chaplinchild' ),
				'section' 		=> 'chaplin_brand_identity',
				'settings' 		=> 'chaplin_brand_color_3',
			) ) );	
		
			/* Brand Color 4 ------------------ */
			
				$wp_customize->add_setting( 'chaplin_brand_color_4', array(
				'default' 			=> get_theme_mod( 'chaplin_accent_color', '#000000' ),
				'type' 				=> 'theme_mod',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'chaplin_brand_color_4', array(
				'label' 		=> __( 'Brand Color 4', 'chaplinchild' ),
				'description'	=> __( '', 'chaplinchild' ),
				'section' 		=> 'chaplin_brand_identity',
				'settings' 		=> 'chaplin_brand_color_4',
			) ) );	
					
			/* Brand Color 5 ------------------ */
		
				$wp_customize->add_setting( 'chaplin_brand_color_5', array(
				'default' 			=> get_theme_mod( 'chaplin_accent_color', '#OC234B' ),
				'type' 				=> 'theme_mod',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'chaplin_brand_color_5', array(
				'label' 		=> __( 'Brand Color 5', 'chaplinchild' ),
				'description'	=> __( '', 'chaplinchild' ),
				'section' 		=> 'chaplin_brand_identity',
				'settings' 		=> 'chaplin_brand_color_5',
			) ) );	
			
			/* Brand Photo 1 ------------------ */
			
			$wp_customize->add_setting( 'chaplin_brand_photography_1', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_brand_photography_1', array(
				'label'			=> __( 'Brand Photography 1', 'chaplinchild' ),
				'description'	=> __( 'Used to set the official brand of the site.', 'chaplinchild' ),
				'priority'		=> 60,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_brand_identity',
			) ) );
			
			/* Brand Photo 2 ------------------ */
			
			$wp_customize->add_setting( 'chaplin_brand_photography_2', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_brand_photography_2', array(
				'label'			=> __( 'Brand Photography 2', 'chaplinchild' ),
				'description'	=> __( 'Used to set the official brand of the site.', 'chaplinchild' ),
				'priority'		=> 60,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_brand_identity',
			) ) );
			
			/* Brand Photo 3 ------------------ */
			
			$wp_customize->add_setting( 'chaplin_brand_photography_3', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_brand_photography_3', array(
				'label'			=> __( 'Brand Photography 3', 'chaplinchild' ),
				'description'	=> __( 'Used to set the official brand of the site.', 'chaplinchild' ),
				'priority'		=> 60,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_brand_identity',
			) ) );
			
			/* Brand Photo 4 ------------------ */
			
			$wp_customize->add_setting( 'chaplin_brand_photography_4', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_brand_photography_4', array(
				'label'			=> __( 'Brand Photography 4', 'chaplinchild' ),
				'description'	=> __( 'Used to set the official brand of the site.', 'chaplinchild' ),
				'priority'		=> 60,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_brand_identity',
			) ) );
			
			/* Brand Photo 5 ------------------ */
			
			$wp_customize->add_setting( 'chaplin_brand_photography_5', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_brand_photography_5', array(
				'label'			=> __( 'Brand Photography 5', 'chaplinchild' ),
				'description'	=> __( 'Used to set the official brand of the site.', 'chaplinchild' ),
				'priority'		=> 60,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_brand_identity',
			) ) );
			
			
			
			
			
			
			
			
			
			
			
		

			
			
			
			
			
			
			
			
			
			
		
			/* ------------------------------------------------------------------------
			 * Site Title & Description
			 * ------------------------------------------------------------------------ */

			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

			$wp_customize->selective_refresh->add_partial( 'blogname', array(
				'selector'        => '.site-title a',
				'render_callback' => 'chaplin_customize_partial_blogname',
			) );

			$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
				'selector'        => '.site-description',
				'render_callback' => 'chaplin_customize_partial_blogdescription',
			) );

			/* ------------------------------------------------------------------------
			 * Site Identity
			 * ------------------------------------------------------------------------ */

			/* Overlay Logo ------------------ */

			$wp_customize->add_setting( 'chaplin_overlay_logo', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_overlay_logo', array(
				'label'			=> __( 'Overlay Logo', 'chaplinchild' ),
				'description'	=> __( 'Displayed instead of the regular logo on pages using the Cover Template.', 'chaplinchild' ),
				'priority'		=> 8,
				'mime_type'		=> 'image',
				'section' 		=> 'title_tagline',
			) ) );

			/* 2X Header Logo ---------------- */

			$wp_customize->add_setting( 'chaplin_retina_logo', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'chaplin_sanitize_checkbox',
				'transport'			=> 'postMessage',
			) );

			$wp_customize->add_control( 'chaplin_retina_logo', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'title_tagline',
				'priority'		=> 10,
				'label' 		=> __( 'Retina logo', 'chaplinchild' ),
				'description' 	=> __( 'Scales the logo to half its uploaded size, making it sharp on high-res screens.', 'chaplinchild' ),
			) );

			/* ------------------------------------------------------------------------
			 * General Options
			 * ------------------------------------------------------------------------ */

			$wp_customize->add_section( 'chaplin_general_options', array(
				'title' 		=> __( 'General Options', 'chaplinchild' ),
				'priority' 		=> 40,
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'General theme options for Chaplin.', 'chaplinchild' ),
				'panel'			=> 'chaplin_theme_options',
			) );

			/* Disable Smooth Scroll --------- */

			$wp_customize->add_setting( 'chaplin_disable_smooth_scroll', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> false,
				'sanitize_callback' => 'chaplin_sanitize_checkbox'
			) );

			$wp_customize->add_control( 'chaplin_disable_smooth_scroll', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_general_options',
				'priority'		=> 5,
				'label' 		=> __( 'Disable Smooth Scroll', 'chaplinchild' ),
				'description'	=> __( 'By default, Chaplin will animate the scroll when an anchor link is clicked. Check this to disable that behavior.', 'chaplinchild' ),
			) );


			/* ------------------------------------------------------------------------
			 * Color Schemes
			 * ------------------------------------------------------------------------ */

			$wp_customize->add_section( 'chaplin_color_schemes', array(
				'title' 		=> __( 'Color Schemes', 'chaplinchild' ),
				'priority' 		=> 40,
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Select which color scheme to use.', 'chaplinchild' ),
				'panel'			=> 'chaplin_theme_options',
			) );

			/* Color Scheme Selector --------- */

			$color_schemes = chaplin_get_color_schemes();

			if ( $color_schemes ) {

				$wp_customize->add_setting( 'chaplin_color_schemes_selector', array(
					'default' 			=> 'default',
					'sanitize_callback' => 'chaplin_sanitize_select',
					'transport'			=> 'refresh',
				) );

				$wp_customize->add_control( new Chaplin_Colour_Scheme_Control( $wp_customize, 'chaplin_color_schemes_selector', array(
					'label' 		=> __( 'Color Schemes', 'chaplinchild' ),
					'description'	=> __( 'Selecting a color scheme will update the settings on the "Colors" Customizer panel.', 'chaplinchild' ),
					'section' 		=> 'chaplin_color_schemes',
					'settings' 		=> 'chaplin_color_schemes_selector',
					'transport'		=> 'postMessage',
					'choices' 		=> $color_schemes,
				) ) );

			}

			/* ------------------------------------------------------------------------
			 * Colors
			 * ------------------------------------------------------------------------ */

			$chaplin_accent_color_options = self::chaplin_get_color_options();

			// Loop over the color options and add them to the customizer
			foreach ( $chaplin_accent_color_options as $color_option_name => $color_option ) {

				$wp_customize->add_setting( $color_option_name, array(
					'default' 			=> $color_option['default'],
					'type' 				=> 'theme_mod',
					'sanitize_callback' => 'sanitize_hex_color',
				) );

				$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color_option_name, array(
					'label' 		=> $color_option['label'],
					'section' 		=> 'colors',
					'settings' 		=> $color_option_name,
					'priority' 		=> 10,
				) ) );

			}

			// Update background color with postMessage, so inline CSS output is updated as well
			$wp_customize->get_setting( 'background_color' )->transport = 'refresh';

			$wp_customize->add_section( 'chaplin_color_schemes', array(
				'title' 		=> __( 'Color Schemes', 'chaplinchild' ),
				'priority' 		=> 40,
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Select which color scheme to use.', 'chaplinchild' ),
				'panel'			=> 'chaplin_theme_options',
			) );

			/* ------------------------------------------------------------------------
			 * Fonts
			 * ------------------------------------------------------------------------ */

			$wp_customize->add_section( 'chaplin_fonts_options', array(
				'title' 		=> __( 'Fonts', 'chaplinchild' ),
				'priority' 		=> 40,
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Specify which fonts to use. Chaplin supports all fonts on <a href="https://fonts.google.com" target="_blank">Google Fonts</a> and all <a href="https://www.w3schools.com/cssref/css_websafe_fonts.asp" target="_blank">web safe fonts</a>.', 'chaplinchild' ),
				'panel'			=> 'chaplin_theme_options',
			) );

			/* Font Options ------------------ */

			$chaplin_font_options = apply_filters( 'chaplin_font_options', array(
				'chaplin_body_font' => array(
					'default'	=> '',
					'label'		=> __( 'Body Font', 'chaplinchild' ),
					'slug'		=> 'body'
				),
				'chaplin_headings_font' => array(
					'default'	=> 'Merriweather',
					'label'		=> __( 'Headings Font', 'chaplinchild' ),
					'slug'		=> 'headings'
				),
			) );

			// Loop over the font options and add them to the customizer
			foreach ( $chaplin_font_options as $font_option_name => $font_option ) {
				$wp_customize->add_setting( $font_option_name, array(
					'default' 			=> $font_option['default'],
					'sanitize_callback' => 'wp_filter_nohtml_kses',
					'type'				=> 'theme_mod',
				) );

				$wp_customize->add_control( $font_option_name, array(
					'type'			=> 'text',
					'label' 		=> $font_option['label'],
					'description'	=> self::chaplin_suggested_fonts_data_list( $font_option['slug'] ),
					'section' 		=> 'chaplin_fonts_options',
					'input_attrs' 	=> array(
						'autocapitalize'	=> 'off',
						'autocomplete'		=> 'off',
						'autocorrect'		=> 'off',
						'class'				=> 'font-suggestions',
						'list'  			=> 'chaplin-suggested-fonts-list-' . $font_option['slug'],
						'placeholder' 		=> __( 'Enter the font name', 'chaplinchild' ),
						'spellcheck'		=> 'false',
					),
				) );
			}

			/* Separator --------------------- */

			$wp_customize->add_setting( 'chaplin_fonts_separator_1', array(
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			) );

			$wp_customize->add_control( new Chaplin_Separator_Control( $wp_customize, 'chaplin_fonts_separator_1', array(
				'section'		=> 'chaplin_fonts_options',
			) ) );

			/* Headings Weight --------------- */

			$wp_customize->add_setting( 'chaplin_headings_weight', array(
				'default' 			=> '700',
				'sanitize_callback' => 'chaplin_sanitize_select',
			) );

			$wp_customize->add_control( 'chaplin_headings_weight', array(
				'label' 		=> __( 'Headings Weight', 'chaplinchild' ),
				'description'	=> __( 'Note: All fonts do not support all weights.', 'chaplinchild' ),
				'section' 		=> 'chaplin_fonts_options',
				'settings' 		=> 'chaplin_headings_weight',
				'type' 			=> 'select',
				'choices' 		=> array(
					'100' 			=> __( 'Thin (100)', 'chaplinchild' ),
					'200' 			=> __( 'Ultra Light (200)', 'chaplinchild' ),
					'300' 			=> __( 'Light (300)', 'chaplinchild' ),
					'400' 			=> __( 'Normal (400)', 'chaplinchild' ),
					'500' 			=> __( 'Medium (500)', 'chaplinchild' ),
					'600' 			=> __( 'Semi Bold (600)', 'chaplinchild' ),
					'700' 			=> __( 'Bold (700)', 'chaplinchild' ),
					'800' 			=> __( 'Extra Bold (800)', 'chaplinchild' ),
					'900' 			=> __( 'Black (900)', 'chaplinchild' ),
				),
			) );

			/* Headings Text Case ------------ */

			$wp_customize->add_setting( 'chaplin_headings_letter_case', array(
				'default' 			=> 'normal',
				'sanitize_callback' => 'chaplin_sanitize_select',
			) );

			$wp_customize->add_control( 'chaplin_headings_letter_case', array(
				'label' 		=> __( 'Headings Case', 'chaplinchild' ),
				'section' 		=> 'chaplin_fonts_options',
				'settings' 		=> 'chaplin_headings_letter_case',
				'type' 			=> 'select',
				'choices' 		=> array(
					'normal' 		=> __( 'Normal', 'chaplinchild' ),
					'uppercase' 	=> __( 'Uppercase', 'chaplinchild' ),
					'lowercase' 	=> __( 'Lowercase', 'chaplinchild' ),
				),
			) );

			/* Headings Letter Spacing ------- */

			$wp_customize->add_setting( 'chaplin_headings_letterspacing', array(
				'default' 			=> 'normal',
				'sanitize_callback' => 'chaplin_sanitize_select',
			) );

			$wp_customize->add_control( 'chaplin_headings_letterspacing', array(
				'label' 		=> __( 'Headings Letterspacing', 'chaplinchild' ),
				'section' 		=> 'chaplin_fonts_options',
				'settings' 		=> 'chaplin_headings_letterspacing',
				'type' 			=> 'select',
				'choices' 		=> array(
					'-0_3125' 		=> __( '-50%', 'chaplinchild' ),
					'-0_28125' 		=> __( '-45%', 'chaplinchild' ),
					'-0_25' 		=> __( '-40%', 'chaplinchild' ),
					'-0_21875' 		=> __( '-35%', 'chaplinchild' ),
					'-0_1875' 		=> __( '-30%', 'chaplinchild' ),
					'-0_15625' 		=> __( '-25%', 'chaplinchild' ),
					'-0_125' 		=> __( '-20%', 'chaplinchild' ),
					'-0_09375' 		=> __( '-15%', 'chaplinchild' ),
					'-0_0625' 		=> __( '-10%', 'chaplinchild' ),
					'-0_03125' 		=> __( '-5%', 'chaplinchild' ),
					'normal' 		=> __( 'Normal', 'chaplinchild' ),
					'0_03125' 		=> __( '5%', 'chaplinchild' ),
					'0_0625' 		=> __( '10%', 'chaplinchild' ),
					'0_09375' 		=> __( '15%', 'chaplinchild' ),
					'0_125' 		=> __( '20%', 'chaplinchild' ),
					'0_15625' 		=> __( '25%', 'chaplinchild' ),
					'0_1875' 		=> __( '30%', 'chaplinchild' ),
					'0_21875' 		=> __( '35%', 'chaplinchild' ),
					'0_25' 			=> __( '40%', 'chaplinchild' ),
					'0_28125' 		=> __( '45%', 'chaplinchild' ),
					'0_3125' 		=> __( '50%', 'chaplinchild' ),
				),
			) );

			/* Separator --------------------- */

			$wp_customize->add_setting( 'chaplin_fonts_separator_2', array(
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			) );

			$wp_customize->add_control( new Chaplin_Separator_Control( $wp_customize, 'chaplin_fonts_separator_2', array(
				'section'		=> 'chaplin_fonts_options',
			) ) );

			/* Languages --------------------- */

			$wp_customize->add_setting( 'chaplin_font_languages', array(
				'capability' 		=> 'edit_theme_options',
				'default'           => array( 'latin' ),
				'sanitize_callback' => 'chaplin_sanitize_multiple_checkboxes',
			) );

			$wp_customize->add_control( new Chaplin_Customize_Control_Checkbox_Multiple( $wp_customize, 'chaplin_font_languages', array(
				'section' 		=> 'chaplin_fonts_options',
				'label'   		=> __( 'Languages', 'chaplinchild' ),
				'description'	=> __( 'Note: All fonts do not support all languages. Check Google Fonts to make sure.', 'chaplinchild' ),
				'choices' 		=> apply_filters( 'chaplin_font_languages', array(
					'latin'			=> __( 'Latin', 'chaplinchild' ),
					'latin-ext'		=> __( 'Latin Extended', 'chaplinchild' ),
					'cyrillic'		=> __( 'Cyrillic', 'chaplinchild' ),
					'cyrillic-ext'	=> __( 'Cyrillic Extended', 'chaplinchild' ),
					'greek'			=> __( 'Greek', 'chaplinchild' ),
					'greek-ext'		=> __( 'Greek Extended', 'chaplinchild' ),
					'vietnamese'	=> __( 'Vietnamese', 'chaplinchild' ),
				) ),
			) ) );


			/* ------------------------------------------------------------------------
			 * Fallback Image Options
			 * ------------------------------------------------------------------------ */

			$wp_customize->add_section( 'chaplin_image_options', array(
				'title' 		=> __( 'Images', 'chaplinchild' ),
				'priority' 		=> 40,
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Settings for images in Chaplin.', 'chaplinchild' ),
				'panel'			=> 'chaplin_theme_options',
			) );

			// Activate low-resolution images setting
			$wp_customize->add_setting( 'chaplin_activate_low_resolution_images', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> false,
				'sanitize_callback' => 'chaplin_sanitize_checkbox'
			) );

			$wp_customize->add_control( 'chaplin_activate_low_resolution_images', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_image_options',
				'priority'		=> 5,
				'label' 		=> __( 'Use Low-Resolution Images', 'chaplinchild' ),
				'description'	=> __( 'Checking this will decrease load times, but also make images look less sharp on high-resolution screens.', 'chaplinchild' ),
			) );

			// Fallback image setting
			$wp_customize->add_setting( 'chaplin_fallback_image', array(
				'capability' 		=> 'edit_theme_options',
				'sanitize_callback' => 'absint'
			) );

			$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'chaplin_fallback_image', array(
				'label'			=> __( 'Fallback Image', 'chaplinchild' ),
				'description'	=> __( 'The selected image will be used when a post is missing a featured image. A default fallback image included in the theme will be used if no image is set.', 'chaplinchild' ),
				'priority'		=> 10,
				'mime_type'		=> 'image',
				'section' 		=> 'chaplin_image_options',
			) ) );

			// Disable fallback image setting
			$wp_customize->add_setting( 'chaplin_disable_fallback_image', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> false,
				'sanitize_callback' => 'chaplin_sanitize_checkbox'
			) );

			$wp_customize->add_control( 'chaplin_disable_fallback_image', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_image_options',
				'priority'		=> 15,
				'label' 		=> __( 'Disable Fallback Image', 'chaplinchild' )
			) );

			/* ------------------------------------------------------------------------
			 * Site Header Options
			 * ------------------------------------------------------------------------ */

			$wp_customize->add_section( 'chaplin_site_header_options', array(
				'title' 		=> __( 'Site Header', 'chaplinchild' ),
				'priority' 		=> 40,
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Settings for the site header.', 'chaplinchild' ),
				'panel'			=> 'chaplin_theme_options',
			) );

			/* Sticky Header ----------------- */

			$wp_customize->add_setting( 'chaplin_sticky_header', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> false,
				'sanitize_callback' => 'chaplin_sanitize_checkbox',
			) );

			$wp_customize->add_control( 'chaplin_sticky_header', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_site_header_options',
				'priority'		=> 10,
				'label' 		=> __( 'Sticky Header', 'chaplinchild' ),
				'description' 	=> __( 'Stick the header to the top of the window when the visitor scrolls.', 'chaplinchild' ),
			) );

			/* Disable Header Search --------- */

			$wp_customize->add_setting( 'chaplin_disable_header_search', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> false,
				'sanitize_callback' => 'chaplin_sanitize_checkbox',
			) );

			$wp_customize->add_control( 'chaplin_disable_header_search', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_site_header_options',
				'priority'		=> 10,
				'label' 		=> __( 'Disable Search Button', 'chaplinchild' ),
				'description' 	=> __( 'Check to disable the search button in the header.', 'chaplinchild' ),
			) );

			/* Disable Menu Modal on Desktop - */

			$wp_customize->add_setting( 'chaplin_disable_menu_modal_on_desktop', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> false,
				'sanitize_callback' => 'chaplin_sanitize_checkbox',
			) );

			$wp_customize->add_control( 'chaplin_disable_menu_modal_on_desktop', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_site_header_options',
				'priority'		=> 10,
				'label' 		=> __( 'Disable Menu Modal on Desktop', 'chaplinchild' ),
				'description' 	=> __( 'Check to display a regular menu on desktop screens, instead of the search and menu toggles.', 'chaplinchild' ),
			) );

			/* ------------------------------------------------------------------------
			 * Posts
			 * ------------------------------------------------------------------------ */

			$wp_customize->add_section( 'chaplin_post_archive_options', array(
				'title' 		=> __( 'Post Archive', 'chaplinchild' ),
				'priority' 		=> 50,
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Settings for post archives.', 'chaplinchild' ),
				'panel'			=> 'chaplin_theme_options',
			) );

			$wp_customize->add_section( 'chaplin_single_post_options', array(
				'title' 		=> __( 'Single Post', 'chaplinchild' ),
				'priority' 		=> 60,
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Settings for single posts.', 'chaplinchild' ),
				'panel'			=> 'chaplin_theme_options',
			) );

			/* ------------------------------------------------------------------------
			 * Posts > Single Post
			 * ------------------------------------------------------------------------ */

			/* Enable Related Posts ---------- */

			$wp_customize->add_setting( 'chaplin_enable_related_posts', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> true,
				'sanitize_callback' => 'chaplin_sanitize_checkbox',
			) );

			$wp_customize->add_control( 'chaplin_enable_related_posts', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_single_post_options',
				'label' 		=> __( 'Show Related Posts', 'chaplinchild' ),
				'description' 	=> __( 'Check to show related posts on single posts.', 'chaplinchild' ),
			) );

			/* Separator --------------------- */

			$wp_customize->add_setting( 'chaplin_single_post_separator_1', array(
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			) );

			$wp_customize->add_control( new Chaplin_Separator_Control( $wp_customize, 'chaplin_single_post_separator_1', array(
				'section'		=> 'chaplin_single_post_options',
			) ) );

			/* Post Meta Single -------------- */

			$post_meta_choices = array(
				'author'		=> __( 'Author', 'chaplinchild' ),
				'categories'	=> __( 'Categories', 'chaplinchild' ),
				'comments'		=> __( 'Comments', 'chaplinchild' ),
				'edit-link'		=> __( 'Edit link (for logged in users)', 'chaplinchild' ),
				'post-date'		=> __( 'Post date', 'chaplinchild' ),
				'sticky'		=> __( 'Sticky status', 'chaplinchild' ),
				'tags'			=> __( 'Tags', 'chaplinchild' ),
			);

			if ( post_type_exists( 'jetpack-portfolio' ) ) {
				if ( taxonomy_exists( 'jetpack-portfolio-type' ) ) {
					$post_meta_choices['jetpack-portfolio-type'] = __( 'Portfolio types', 'chaplinchild' );
				}
				if ( taxonomy_exists( 'jetpack-portfolio-tag' ) ) {
					$post_meta_choices['jetpack-portfolio-tag'] = __( 'Project tags', 'chaplinchild' );
				}
			}

			$post_meta_choices = apply_filters( 'chaplin_post_meta_choices_in_the_customizer', $post_meta_choices );

			// Sort the choices alphabetically, by value (localized description string).
			asort( $post_meta_choices );

			// Post Meta Single Top Setting
			$wp_customize->add_setting( 'chaplin_post_meta_single_top', array(
				'capability' 		=> 'edit_theme_options',
				'default'           => array( 'post-date', 'categories' ),
				'sanitize_callback' => 'chaplin_sanitize_multiple_checkboxes',
			) );

			$wp_customize->add_control( new Chaplin_Customize_Control_Checkbox_Multiple( $wp_customize, 'chaplin_post_meta_single_top', array(
				'section' 		=> 'chaplin_single_post_options',
				'label'   		=> __( 'Top Post Meta', 'chaplinchild' ),
				'description'	=> __( 'Select post meta to display above the content.', 'chaplinchild' ),
				'choices' 		=> $post_meta_choices,
			) ) );

			// Post Meta Single Bottom Setting
			$wp_customize->add_setting( 'chaplin_post_meta_single_bottom', array(
				'capability' 		=> 'edit_theme_options',
				'default'           => array( 'tags' ),
				'sanitize_callback' => 'chaplin_sanitize_multiple_checkboxes',
			) );

			$wp_customize->add_control( new Chaplin_Customize_Control_Checkbox_Multiple( $wp_customize, 'chaplin_post_meta_single_bottom', array(
				'section' 		=> 'chaplin_single_post_options',
				'label'   		=> __( 'Bottom Post Meta', 'chaplinchild' ),
				'description'	=> __( 'Select post meta to display below the content.', 'chaplinchild' ),
				'choices' 		=> $post_meta_choices,
			) ) );

			/* ------------------------------------------------------------------------
			 * Posts > Archive Posts
			 * ------------------------------------------------------------------------ */

			/* Pagination Type --------------- */

			$wp_customize->add_setting( 'chaplin_pagination_type', array(
				'capability' 		=> 'edit_theme_options',
				'default'           => 'button',
				'sanitize_callback' => 'chaplin_sanitize_select',
			) );

			$wp_customize->add_control( 'chaplin_pagination_type', array(
				'type'			=> 'select',
				'section' 		=> 'chaplin_post_archive_options',
				'label'   		=> __( 'Pagination Type', 'chaplinchild' ),
				'description'	=> __( 'Determines how the pagination on archive pages should be displayed.', 'chaplinchild' ),
				'choices' 		=> array(
					'button'		=> __( 'Load more on button click', 'chaplinchild' ),
					'scroll'		=> __( 'Load more on scroll', 'chaplinchild' ),
					'links'			=> __( 'Previous and next page links', 'chaplinchild' ),
				),
			) );

			/* Number of Post Columns -------- */

			$wp_customize->add_setting( 'chaplin_post_grid_columns', array(
				'capability' 		=> 'edit_theme_options',
				'default'           => '2',
				'sanitize_callback' => 'chaplin_sanitize_select',
			) );

			$wp_customize->add_control( 'chaplin_post_grid_columns', array(
				'type'			=> 'select',
				'section' 		=> 'chaplin_post_archive_options',
				'label'   		=> __( 'Number of Columns', 'chaplinchild' ),
				'description'	=> __( 'The maximum number of columns to use in the post grid.', 'chaplinchild' ),
				'choices' 		=> array(
					'1'				=> __( 'One', 'chaplinchild' ),
					'2'				=> __( 'Two', 'chaplinchild' ),
					'3'				=> __( 'Three', 'chaplinchild' ),
					'4'				=> __( 'Four', 'chaplinchild' ),
				),
			) );

			/* Preview Image Aspect Ratio ---- */

			$wp_customize->add_setting( 'chaplin_preview_image_aspect_ratio', array(
				'capability' 		=> 'edit_theme_options',
				'default'           => '16x10',
				'sanitize_callback' => 'chaplin_sanitize_select',
			) );

			$wp_customize->add_control( 'chaplin_preview_image_aspect_ratio', array(
				'type'			=> 'select',
				'section' 		=> 'chaplin_post_archive_options',
				'label'   		=> __( 'Preview Image Aspect Ratio', 'chaplinchild' ),
				'description'	=> __( 'Aspect ratio of featured images on archive pages.', 'chaplinchild' ),
				'choices' 		=> array(
					'9x16'			=> __( '9:16', 'chaplinchild' ),
					'10x16'			=> __( '10:16', 'chaplinchild' ),
					'3x4'			=> __( '3:4', 'chaplinchild' ),
					'1x1'			=> __( '1:1', 'chaplinchild' ),
					'4x3'			=> __( '4:3', 'chaplinchild' ),
					'16x10'			=> __( '16:10', 'chaplinchild' ),
					'16x9'			=> __( '16:9', 'chaplinchild' ),
					'original'		=> __( 'Original aspect ratio of each image', 'chaplinchild' ),
				),
			) );

			/* Separator --------------------- */

			$wp_customize->add_setting( 'chaplin_post_archive_separator_1', array(
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			) );

			$wp_customize->add_control( new Chaplin_Separator_Control( $wp_customize, 'chaplin_post_archive_separator_1', array(
				'section'		=> 'chaplin_post_archive_options',
			) ) );

			/* Show Archive Header On Home --- */

			$wp_customize->add_setting( 'chaplin_show_archive_header_on_home', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> false,
				'sanitize_callback' => 'chaplin_sanitize_checkbox',
			) );

			$wp_customize->add_control( 'chaplin_show_archive_header_on_home', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_post_archive_options',
				'label' 		=> __( 'Show Archive Header On The Blog Page', 'chaplinchild' ),
				'description' 	=> __( 'Whether to display the archive title and description on the main posts page.', 'chaplinchild' ),
			) );

			/* Enable Excerpts --------------- */

			$wp_customize->add_setting( 'chaplin_display_excerpts', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> false,
				'sanitize_callback' => 'chaplin_sanitize_checkbox',
			) );

			$wp_customize->add_control( 'chaplin_display_excerpts', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_post_archive_options',
				'label' 		=> __( 'Show Excerpts', 'chaplinchild' ),
				'description' 	=> __( 'Whether to display excerpts in post previews.', 'chaplinchild' ),
			) );

			/* Separator --------------------- */

			$wp_customize->add_setting( 'chaplin_post_archive_separator_2', array(
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			) );

			$wp_customize->add_control( new Chaplin_Separator_Control( $wp_customize, 'chaplin_post_archive_separator_2', array(
				'section'		=> 'chaplin_post_archive_options',
			) ) );

			/* Post Meta Archive ------------- */

			$wp_customize->add_setting( 'chaplin_post_meta_archive', array(
				'capability' 		=> 'edit_theme_options',
				'default'           => array( 'post-date' ),
				'sanitize_callback' => 'chaplin_sanitize_multiple_checkboxes',
			) );

			$wp_customize->add_control( new Chaplin_Customize_Control_Checkbox_Multiple( $wp_customize, 'chaplin_post_meta_archive', array(
				'section' 		=> 'chaplin_post_archive_options',
				'label'   		=> __( 'Archive Post Meta', 'chaplinchild' ),
				'description'	=> __( 'Select post meta to display on archive pages.', 'chaplinchild' ),
				'choices' 		=> $post_meta_choices,
			) ) );

			/* ------------------------------------------------------------------------
			 * Template: Cover Template
			 * ------------------------------------------------------------------------ */

			$wp_customize->add_section( 'chaplin_cover_template_options', array(
				'title' 		=> __( 'Cover Template', 'chaplinchild' ),
				'capability' 	=> 'edit_theme_options',
				'description' 	=> __( 'Settings for the "Cover Template" page template.', 'chaplinchild' ),
				'priority'      => 43,
				'panel'			=> 'chaplin_theme_options',
			) );

			/* Overlay Fixed Background ------ */

			$wp_customize->add_setting( 'chaplin_cover_template_fixed_background', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> true,
				'sanitize_callback' => 'chaplin_sanitize_checkbox',
			) );

			$wp_customize->add_control( 'chaplin_cover_template_fixed_background', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_cover_template_options',
				'label' 		=> __( 'Fixed Background Image', 'chaplinchild' ),
				'description' 	=> __( 'Creates a parallax effect when the visitor scrolls.', 'chaplinchild' ),
			) );

			/* Overlay Fade Text ------------- */

			$wp_customize->add_setting( 'chaplin_cover_template_fade_text', array(
				'capability' 		=> 'edit_theme_options',
				'default'			=> true,
				'sanitize_callback' => 'chaplin_sanitize_checkbox',
			) );

			$wp_customize->add_control( 'chaplin_cover_template_fade_text', array(
				'type' 			=> 'checkbox',
				'section' 		=> 'chaplin_cover_template_options',
				'label' 		=> __( 'Fade Text On Scroll', 'chaplinchild' ),
				'description' 	=> __( 'Fade out the text in the header as the visitor scrolls down the page.', 'chaplinchild' ),
			) );

			/* Separator --------------------- */

			$wp_customize->add_setting( 'chaplin_cover_template_separator_1', array(
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			) );

			$wp_customize->add_control( new Chaplin_Separator_Control( $wp_customize, 'chaplin_cover_template_separator_1', array(
				'section'		=> 'chaplin_cover_template_options',
			) ) );

			/* Overlay Background Color ------ */

			$wp_customize->add_setting( 'chaplin_cover_template_overlay_background_color', array(
				'default' 			=> get_theme_mod( 'chaplin_accent_color', '#007C89' ),
				'type' 				=> 'theme_mod',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'chaplin_cover_template_overlay_background_color', array(
				'label' 		=> __( 'Image Overlay Background Color', 'chaplinchild' ),
				'description'	=> __( 'The color used for the featured image overlay. Defaults to the accent color.', 'chaplinchild' ),
				'section' 		=> 'chaplin_cover_template_options',
				'settings' 		=> 'chaplin_cover_template_overlay_background_color',
			) ) );

			/* Overlay Text Color ------------ */

			$wp_customize->add_setting( 'chaplin_cover_template_overlay_text_color', array(
				'default' 			=> '#FFFFFF',
				'type' 				=> 'theme_mod',
				'sanitize_callback' => 'sanitize_hex_color',
			) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'chaplin_cover_template_overlay_text_color', array(
				'label' 		=> __( 'Image Overlay Text Color', 'chaplinchild' ),
				'description'	=> __( 'The color used for the text in the featured image overlay.', 'chaplinchild' ),
				'section' 		=> 'chaplin_cover_template_options',
				'settings' 		=> 'chaplin_cover_template_overlay_text_color',
			) ) );

			/* Overlay Blend Mode ------------ */

			$wp_customize->add_setting( 'chaplin_cover_template_overlay_blend_mode', array(
				'default' 			=> 'multiply',
				'sanitize_callback' => 'chaplin_sanitize_select',
			) );

			$wp_customize->add_control( 'chaplin_cover_template_overlay_blend_mode', array(
				'label' 		=> __( 'Image Overlay Blend Mode', 'chaplinchild' ),
				'description'	=> __( 'How the overlay color will blend with the image. Some browsers, like Internet Explorer and Edge, only support the "Normal" mode.', 'chaplinchild' ),
				'section' 		=> 'chaplin_cover_template_options',
				'settings' 		=> 'chaplin_cover_template_overlay_blend_mode',
				'type' 			=> 'select',
				'choices' 		=> array(
					'normal' 			=> __( 'Normal', 'chaplinchild' ),
					'multiply' 			=> __( 'Multiply', 'chaplinchild' ),
					'screen' 			=> __( 'Screen', 'chaplinchild' ),
					'overlay' 			=> __( 'Overlay', 'chaplinchild' ),
					'darken' 			=> __( 'Darken', 'chaplinchild' ),
					'lighten' 			=> __( 'Lighten', 'chaplinchild' ),
					'color-dodge' 		=> __( 'Color Dodge', 'chaplinchild' ),
					'color-burn' 		=> __( 'Color Burn', 'chaplinchild' ),
					'hard-light' 		=> __( 'Hard Light', 'chaplinchild' ),
					'soft-light' 		=> __( 'Soft Light', 'chaplinchild' ),
					'difference' 		=> __( 'Difference', 'chaplinchild' ),
					'exclusion' 		=> __( 'Exclusion', 'chaplinchild' ),
					'hue' 				=> __( 'Hue', 'chaplinchild' ),
					'saturation' 		=> __( 'Saturation', 'chaplinchild' ),
					'color' 			=> __( 'Color', 'chaplinchild' ),
					'luminosity' 		=> __( 'Luminosity', 'chaplinchild' ),
				),
			) );

			/* Overlay Color Opacity --------- */

			$wp_customize->add_setting( 'chaplin_cover_template_overlay_opacity', array(
				'default' 			=> '80',
				'sanitize_callback' => 'chaplin_sanitize_select',
			) );

			$wp_customize->add_control( 'chaplin_cover_template_overlay_opacity', array(
				'label' 		=> __( 'Image Overlay Opacity', 'chaplinchild' ),
				'description'	=> __( 'Make sure that the value is high enough that the text is readable.', 'chaplinchild' ),
				'section' 		=> 'chaplin_cover_template_options',
				'settings' 		=> 'chaplin_cover_template_overlay_opacity',
				'type' 			=> 'select',
				'choices' 		=> array(
					'0' 			=> __( '0%', 'chaplinchild' ),
					'10' 			=> __( '10%', 'chaplinchild' ),
					'20' 			=> __( '20%', 'chaplinchild' ),
					'30' 			=> __( '30%', 'chaplinchild' ),
					'40' 			=> __( '40%', 'chaplinchild' ),
					'50' 			=> __( '50%', 'chaplinchild' ),
					'60' 			=> __( '60%', 'chaplinchild' ),
					'70' 			=> __( '70%', 'chaplinchild' ),
					'80' 			=> __( '80%', 'chaplinchild' ),
					'90' 			=> __( '90%', 'chaplinchild' ),
					'100' 			=> __( '100%', 'chaplinchild' ),
				),
			) );


			/* Sanitation Functions ---------- */

			// Sanitize boolean for checkbox
			function chaplin_sanitize_checkbox( $checked ) {
				return ( ( isset( $checked ) && true == $checked ) ? true : false );
			}

			// Sanitize booleans for multiple checkboxes
			function chaplin_sanitize_multiple_checkboxes( $values ) {
				$multi_values = ! is_array( $values ) ? explode( ',', $values ) : $values;
				return ! empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
			}

			// Sanitize radio
			function chaplin_sanitize_radio( $input, $setting ) {
				$input = sanitize_key( $input );
				$choices = $setting->manager->get_control( $setting->id )->choices;
				return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
			}

			// Sanitize select
			function chaplin_sanitize_select( $input, $setting ) {
				$input = sanitize_key( $input );
				$choices = $setting->manager->get_control( $setting->id )->choices;
				return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
			}

		}

		// Return an array of suggested fonts
		public static function chaplin_suggested_fonts_data_list( $font_option ) {

			$suggested_fonts = Chaplin_Google_Fonts::get_suggested_fonts( $font_option );

			$list = '<datalist id="chaplin-suggested-fonts-list-' . esc_attr( $font_option ) . '">';
			foreach ( $suggested_fonts as $font ) {
				$list .= '<option value="' . esc_attr( $font ) . '">';
			}
			$list .= '</datalist>';

			return $list;
		}

		// Return the sitewide color options included
		public static function chaplin_get_color_options() {

			return apply_filters( 'chaplin_accent_color_options', array(
				'chaplin_accent_color' => array(
					'default'	=> '#007C89',
					'label'		=> __( 'Accent Color', 'chaplinchild' ),
					'slug'		=> 'accent',
				),
				'chaplin_primary_text_color' => array(
					'default'	=> '#1A1B1F',
					'label'		=> __( 'Primary Text Color', 'chaplinchild' ),
					'slug'		=> 'primary',
				),
				'chaplin_headings_text_color' => array(
					'default'	=> '#1A1B1F',
					'label'		=> __( 'Headings Text Color', 'chaplinchild' ),
					'slug'		=> 'headings',
				),
				'chaplin_buttons_background_color' => array(
					'default'	=> '#007C89',
					'label'		=> __( 'Buttons Background Color', 'chaplinchild' ),
					'slug'		=> 'buttons-background',
				),
				'chaplin_buttons_text_color' => array(
					'default'	=> '#FFFFFF',
					'label'		=> __( 'Buttons Text Color', 'chaplinchild' ),
					'slug'		=> 'buttons-text',
				),
				'chaplin_secondary_text_color' => array(
					'default'	=> '#747579',
					'label'		=> __( 'Secondary Text Color', 'chaplinchild' ),
					'slug'		=> 'secondary',
				),
				'chaplin_border_color' => array(
					'default'	=> '#E1E1E3',
					'label'		=> __( 'Border Color', 'chaplinchild' ),
					'slug'		=> 'border',
				),
				'chaplin_light_background_color' => array(
					'default'	=> '#F1F1F3',
					'label'		=> __( 'Light Background Color', 'chaplinchild' ),
					'slug'		=> 'light-background',
				),
			) );
		}

		// Initiate the customize controls js
		public static function chaplin_customize_controls() {
			wp_enqueue_script( 'chaplin-customize-controls', get_template_directory_uri() . '/assets/js/customize-controls.js', array( 'jquery', 'customize-controls' ), '', true );

			// Setup AJAX
			$ajax_url = admin_url( 'admin-ajax.php' );

			// AJAX Color Schemes
			wp_localize_script( 'chaplin-customize-controls', 'chaplin_ajax_get_color_scheme_colors', array(
				'ajaxurl'   => esc_url( $ajax_url ),
			) );
		}

	}

	// Setup the Theme Customizer settings and controls
	add_action( 'customize_register', array( 'Chaplin_Customize', 'chaplin_register' ) );

	// Enqueue customize controls javascript in Theme Customizer admin screen
	add_action( 'customize_controls_init', array( 'Chaplin_Customize', 'chaplin_customize_controls' ) );

endif;


/* ---------------------------------------------------------------------------------------------
   CUSTOM CONTROLS
   --------------------------------------------------------------------------------------------- */


if ( class_exists( 'WP_Customize_Control' ) ) :

	/* Separator Control --------------------- */

	if ( ! class_exists( 'Chaplin_Separator_Control' ) ) :
		class Chaplin_Separator_Control extends WP_Customize_Control {

			public function render_content() {
				echo '<hr/>';
			}

		}
	endif;

	/* Image Radio Button Control ------------------ */
	/* Based on a solution by @maddisondesigns: https://github.com/maddisondesigns/customizer-custom-controls */

	if ( ! class_exists( 'Chaplin_Colour_Scheme_Control' ) ) :
		class Chaplin_Colour_Scheme_Control extends WP_Customize_Control {

			// Set the type
			public $type = 'chaplin_image_radio_button';

			// Enqueue custom styles
			public function enqueue() {
				wp_enqueue_style( 'chaplin-customizer-custom-controls-css', get_template_directory_uri() . '/assets/css/customizer.css', array(), '1.0', 'all' );
			}

			// Render the content
			public function render_content() {
				?>

				<div class="chaplin-color-scheme-control">

					<?php if ( ! empty( $this->label ) ) : ?>
						<span class="customize-control-title"><?php echo wp_kses_post( $this->label ); ?></span>
					<?php endif; ?>

					<?php if ( ! empty( $this->description ) ) : ?>
						<span class="customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
					<?php endif; ?>

					<div class="radio-button-labels">

						<?php foreach ( $this->choices as $key => $value ) : 

							$accent_color 		= isset( $value['colors']['chaplin_accent_color'] ) ? $value['colors']['chaplin_accent_color'] : '';
							$primary_color 		= isset( $value['colors']['chaplin_primary_text_color'] ) ? $value['colors']['chaplin_primary_text_color'] : '';
							$secondary_color 	= isset( $value['colors']['chaplin_secondary_text_color'] ) ? $value['colors']['chaplin_secondary_text_color'] : '';
							$background_color 	= isset( $value['colors']['background_color'] ) ? '#' . $value['colors']['background_color'] : '';

							$active = false;

							// First, check if the current option is the selected one
							if ( $this->value() === $key ) {

								// Second, make sure that the user hasn't changed any colors independently
								foreach ( $value['colors'] as $setting_name => $color_scheme_value  ) {
									$setting_value = strtoupper( get_theme_mod( $setting_name ) );

									// The colour scheme value matches the colour setting
									if ( $color_scheme_value == $setting_value ) {
										$active = true;

									// We have a mismatch between the colour scheme and the color settings, so the scheme is not active
									} else {
										$active = false;
										break;
									}
								}

								// If we're not active at this point, the chosen color scheme is no longer valid, so we can unset the color scheme setting
								if ( ! $active ) {
									set_theme_mod( 'chaplin_color_schemes_selector', '' );
								}


							}
						
							?>
							<label class="radio-button-label">
								<input type="radio" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php $this->link(); ?> <?php checked( $active ); ?>/>
								<div class="color-scheme-preview">
									<?php if ( $accent_color ) : ?>
										<div class="color color-accent" style="background-color: <?php echo $accent_color; ?>"></div>
									<?php endif; ?>
									<?php if ( $primary_color ) : ?>
										<div class="color color-primary" style="background-color: <?php echo $primary_color; ?>"></div>
									<?php endif; ?>
									<?php if ( $secondary_color ) : ?>
										<div class="color color-secondary" style="background-color: <?php echo $secondary_color; ?>"></div>
									<?php endif; ?>
									<?php if ( $background_color ) : ?>
										<div class="color color-background" style="background-color: <?php echo $background_color; ?>"></div>
									<?php endif; ?>
								</div><!-- .color-scheme-preview -->
								<span class="radio-button-label-text"><?php echo wp_kses_post( $value['name'] ); ?></span>
							</label>
						<?php endforeach; ?>
					
					</div><!-- .radio-button-labels -->

				</div><!-- .chaplin-image-radio-button-control -->

			<?php
			}

		}
	endif;

endif; 


/* ---------------------------------------------------------------------------------------------
   PARTIAL REFRESH FUNCTIONS
   --------------------------------------------------------------------------------------------- */

/* Render the site title for the selective refresh partial */
if ( ! function_exists( 'chaplin_customize_partial_blogname' ) ) : 
	function chaplin_customize_partial_blogname() {
		bloginfo( 'name' );
	}
endif;

/* Render the site description for the selective refresh partial */
if ( ! function_exists( 'chaplin_customize_partial_blogdescription' ) ) : 
	function chaplin_customize_partial_blogdescription() {
		bloginfo( 'description' );
	}
endif;


/* ---------------------------------------------------------------------------------------------
   GET COLOR SCHEMES
   Returns a filterable list with all color schemes.
   --------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'chaplin_get_color_schemes' ) ) :
	function chaplin_get_color_schemes() {

		return apply_filters( 'chaplin_color_schemes', array(
			'default' 			=> array(
				'name'			=> _x( 'Default', 'Color scheme name', 'chaplinchild' ),
				'colors'		=> array(
					'background_color'									=> 'FFFFFF',
					'chaplin_primary_text_color'						=> '#1A1B1F',
					'chaplin_headings_text_color'						=> '#1A1B1F',
					'chaplin_secondary_text_color'						=> '#747579',
					'chaplin_accent_color'								=> '#007C89',
					'chaplin_buttons_background_color'					=> '#007C89',
					'chaplin_buttons_text_color'						=> '#FFFFFF',
					'chaplin_border_color'								=> '#E1E1E3',
					'chaplin_light_background_color'					=> '#F1F1F3',
					'chaplin_cover_template_overlay_text_color' 		=> '#FFFFFF',
					'chaplin_cover_template_overlay_background_color'	=> '#007C89',
				),
			),
			'macchiato' 		=> array(
				'name'			=> _x( 'Macchiato', 'Color scheme name', 'chaplinchild' ),
				'colors'		=> array(
					'background_color'									=> 'F6F2F0',
					'chaplin_primary_text_color'						=> '#1A1A1B',
					'chaplin_headings_text_color'						=> '#AE9254',
					'chaplin_secondary_text_color'						=> '#747579',
					'chaplin_accent_color'								=> '#AE9254',
					'chaplin_buttons_background_color'					=> '#AE9254',
					'chaplin_buttons_text_color'						=> '#FFFFFF',
					'chaplin_border_color'								=> '#E0DDDB',
					'chaplin_light_background_color'					=> '#EAE6E4',
					'chaplin_cover_template_overlay_text_color' 		=> '#FFFFFF',
					'chaplin_cover_template_overlay_background_color'	=> '#AE9254',
				),
			),
			'naxos' 		=> array(
				'name'			=> _x( 'Naxos', 'Color scheme name', 'chaplinchild' ),
				'colors'		=> array(
					'background_color'									=> '0C1B31',
					'chaplin_primary_text_color'						=> '#F6F2F0',
					'chaplin_headings_text_color'						=> '#E9513D',
					'chaplin_secondary_text_color'						=> '#808690',
					'chaplin_accent_color'								=> '#E9513D',
					'chaplin_buttons_background_color'					=> '#E9513D',
					'chaplin_buttons_text_color'						=> '#FFFFFF',
					'chaplin_border_color'								=> '#313D4F',
					'chaplin_light_background_color'					=> '#1F2B40',
					'chaplin_cover_template_overlay_text_color' 		=> '#F6F2F0',
					'chaplin_cover_template_overlay_background_color'	=> '#0C1B31',
				),
			),
			'twisted-sisters' 	=> array(
				'name'			=> _x( 'Twisted Sisters', 'Color scheme name', 'chaplinchild' ),
				'colors'		=> array(
					'background_color'									=> '1C1C1C',
					'chaplin_primary_text_color'						=> '#FFFFFF',
					'chaplin_headings_text_color'						=> '#790AFF',
					'chaplin_secondary_text_color'						=> '#AAAAAA',
					'chaplin_accent_color'								=> '#790AFF',
					'chaplin_buttons_background_color'					=> '#790AFF',
					'chaplin_buttons_text_color'						=> '#FFFFFF',
					'chaplin_border_color'								=> '#3C3C3C',
					'chaplin_light_background_color'					=> '#2C2C2C',
					'chaplin_cover_template_overlay_text_color' 		=> '#FFFFFF',
					'chaplin_cover_template_overlay_background_color'	=> '#790AFF',
				),
			),
			'taxi'				=> array(
				'name'			=> _x( 'Taxi', 'Color scheme name', 'chaplinchild' ),
				'colors'		=> array(
					'background_color'									=> 'FFCC02',
					'chaplin_primary_text_color'						=> '#000000',
					'chaplin_headings_text_color'						=> '#000000',
					'chaplin_secondary_text_color'						=> '#000000',
					'chaplin_accent_color'								=> '#000000',
					'chaplin_buttons_background_color'					=> '#000000',
					'chaplin_buttons_text_color'						=> '#FFFFFF',
					'chaplin_border_color'								=> '#000000',
					'chaplin_light_background_color'					=> '#FFD327',
					'chaplin_cover_template_overlay_text_color' 		=> '#FFFFFF',
					'chaplin_cover_template_overlay_background_color'	=> '#FFCC02',
				),
			),
			'mint-condition' 	=> array(
				'name'			=> _x( 'Mint Condition', 'Color scheme name', 'chaplinchild' ),
				'colors'		=> array(
					'background_color'									=> '292B29',
					'chaplin_primary_text_color'						=> '#A6D1C9',
					'chaplin_headings_text_color'						=> '#A6D1C9',
					'chaplin_secondary_text_color'						=> '#A6D1C9',
					'chaplin_accent_color'								=> '#A6D1C9',
					'chaplin_buttons_background_color'					=> '#A6D1C9',
					'chaplin_buttons_text_color'						=> '#292B29',
					'chaplin_border_color'								=> '#A6D1C9',
					'chaplin_light_background_color'					=> '#3D3F3D',
					'chaplin_cover_template_overlay_text_color' 		=> '#A6D1C9',
					'chaplin_cover_template_overlay_background_color'	=> '#292B29',
				),
			),
			'tilted-cyan' 	=> array(
				'name'			=> _x( 'Tilted Cyan', 'Color scheme name', 'chaplinchild' ),
				'colors'		=> array(
					'background_color'									=> 'A4C5C6',
					'chaplin_primary_text_color'						=> '#062421',
					'chaplin_headings_text_color'						=> '#062421',
					'chaplin_secondary_text_color'						=> '#547473',
					'chaplin_accent_color'								=> '#CD7468',
					'chaplin_buttons_background_color'					=> '#CD7468',
					'chaplin_buttons_text_color'						=> '#FFFFFF',
					'chaplin_border_color'								=> '#84A4A5',
					'chaplin_light_background_color'					=> '#94B5B5',
					'chaplin_cover_template_overlay_text_color' 		=> '#FFFFFF',
					'chaplin_cover_template_overlay_background_color'	=> '#FFC3BC',
				),
			),
			'bloom' 	=> array(
				'name'			=> _x( 'Bloom', 'Color scheme name', 'chaplinchild' ),
				'colors'		=> array(
					'background_color'									=> '05234F',
					'chaplin_primary_text_color'						=> '#FFC3BC',
					'chaplin_headings_text_color'						=> '#FFFFFF',
					'chaplin_secondary_text_color'						=> '#FFC3BC',
					'chaplin_accent_color'								=> '#FFC3BC',
					'chaplin_buttons_background_color'					=> '#FFFFFF',
					'chaplin_buttons_text_color'						=> '#05234F',
					'chaplin_border_color'								=> '#4F6483',
					'chaplin_light_background_color'					=> '#2A4369',
					'chaplin_cover_template_overlay_text_color' 		=> '#FFFFFF',
					'chaplin_cover_template_overlay_background_color'	=> '#05234F',
				),
			),
			'daisys' 	=> array(
				'name'			=> _x( 'Daisy&rsquo;s', 'Color scheme name', 'chaplinchild' ),
				'colors'		=> array(
					'background_color'									=> 'FFFFFF',
					'chaplin_primary_text_color'						=> '#082E54',
					'chaplin_headings_text_color'						=> '#FF345F',
					'chaplin_secondary_text_color'						=> '#4F6483',
					'chaplin_accent_color'								=> '#FF345F',
					'chaplin_buttons_background_color'					=> '#082E54',
					'chaplin_buttons_text_color'						=> '#FFFFFF',
					'chaplin_border_color'								=> '#DAE0E6',
					'chaplin_light_background_color'					=> '#FFF6F8',
					'chaplin_cover_template_overlay_text_color' 		=> '#FFFFFF',
					'chaplin_cover_template_overlay_background_color'	=> '#FF345F',
				),
			),
			'inverness' 	=> array(
				'name'			=> _x( 'Inverness', 'Color scheme name', 'chaplinchild' ),
				'colors'		=> array(
					'background_color'									=> 'FCEACD',
					'chaplin_primary_text_color'						=> '#025B55',
					'chaplin_headings_text_color'						=> '#025B55',
					'chaplin_secondary_text_color'						=> '#7EA291',
					'chaplin_accent_color'								=> '#025B55',
					'chaplin_buttons_background_color'					=> '#025B55',
					'chaplin_buttons_text_color'						=> '#FFFFFF',
					'chaplin_border_color'								=> '#D6D5BB',
					'chaplin_light_background_color'					=> '#FCD6CF',
					'chaplin_cover_template_overlay_text_color' 		=> '#F7C87A',
					'chaplin_cover_template_overlay_background_color'	=> '#025B55',
				),
			),
		) );

	}
endif;


/*	-----------------------------------------------------------------------------------------------
	AJAX GET COLOR SCHEME COLORS
	Returns the colors of the color scheme specified. Used by customize-controls.js to set the values 
	of the color pickers when a new color scheme is selected.
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'chaplin_ajax_get_color_scheme_colors' ) ) :
	function chaplin_ajax_get_color_scheme_colors() {

		$color_scheme = wp_unslash( $_POST['color_scheme'] );

		$color_schemes = chaplin_get_color_schemes();
		$color_scheme_colors = isset( $color_schemes[$color_scheme]['colors'] ) ? $color_schemes[$color_scheme]['colors'] : array();

		if ( $color_scheme_colors ) {
			echo json_encode( $color_scheme_colors );
		}

		wp_die();

	}
	add_action( 'wp_ajax_nopriv_chaplin_ajax_get_color_scheme_colors', 'chaplin_ajax_get_color_scheme_colors' );
	add_action( 'wp_ajax_chaplin_ajax_get_color_scheme_colors', 'chaplin_ajax_get_color_scheme_colors' );
endif;

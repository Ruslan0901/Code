<?php

if ( ! function_exists( 'artgallery_sanitize_checkbox' ) ) :
	/**
	 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
	 * as a boolean value, either TRUE or FALSE.
	 *
	 * @param bool $checked Whether the checkbox is checked.
	 * @return bool Whether the checkbox is checked.
	 */
	function artgallery_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}
endif; // artgallery_sanitize_checkbox

if ( ! function_exists( 'artgallery_sanitize_html' ) ) :

	function artgallery_sanitize_html( $html ) {
		return wp_kses_post( $html );
	}

endif; // artgallery_sanitize_html

if ( ! function_exists( 'artgallery_sanitize_url' ) ) :

	function artgallery_sanitize_url( $url ) {
		return esc_url_raw( $url );
	}

endif; // artgallery_sanitize_url

if ( ! function_exists( 'artgallery_customize_register' ) ) :
	/**
	 * Add postMessage support for site title and description for the Theme Customizer.
	 *
	 */
	function artgallery_customize_register( $wp_customize ) {

		/**
		 * Add Slider Section
		 */
		$wp_customize->add_section(
			'artgallery_slider_section',
			array(
				'title'       => __( 'Slider', 'artgallery' ),
				'capability'  => 'edit_theme_options',
			)
		);

		// Add display slider option
		$wp_customize->add_setting(
				'artgallery_slider_display',
				array(
						'default'           => 0,
						'sanitize_callback' => 'artgallery_sanitize_checkbox',
				)
		);

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'artgallery_slider_display',
								array(
									'label'          => __( 'Display Slider on a Static Front Page', 'artgallery' ),
									'section'        => 'artgallery_slider_section',
									'settings'       => 'artgallery_slider_display',
									'type'           => 'checkbox',
								)
							)
		);
		
		for ($i = 1; $i <= 3; ++$i) {
		
			$slideContentId = 'artgallery_slide'.$i.'_content';
			$slideImageId = 'artgallery_slide'.$i.'_image';
			$defaultSliderImagePath = get_template_directory_uri().'/images/slider/'.$i.'.jpg';
		
			// Add Slide Content
			$wp_customize->add_setting(
				$slideContentId,
				array(
					'sanitize_callback' => 'artgallery_sanitize_html',
				)
			);
			
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, $slideContentId,
										array(
											'label'          => sprintf( esc_html__( 'Slide #%s Content', 'artgallery' ), $i ),
											'section'        => 'artgallery_slider_section',
											'settings'       => $slideContentId,
											'type'           => 'textarea',
											)
										)
			);
			
			// Add Slide Background Image
			$wp_customize->add_setting( $slideImageId,
				array(
					'default' => $defaultSliderImagePath,
					'sanitize_callback' => 'artgallery_sanitize_url'
				)
			);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $slideImageId,
					array(
						'label'   	 => sprintf( esc_html__( 'Slide #%s Image', 'artgallery' ), $i ),
						'section' 	 => 'artgallery_slider_section',
						'settings'   => $slideImageId,
					) 
				)
			);
		}

		/**
	     * Add Animations Section
	     */
	    $wp_customize->add_section(
	        'artgallery_animations_display',
	        array(
	            'title'       => __( 'Animations', 'artgallery' ),
	            'capability'  => 'edit_theme_options',
	        )
	    );

	    // Add display Animations option
	    $wp_customize->add_setting(
	            'artgallery_animations_display',
	            array(
	                    'default'           => 1,
	                    'sanitize_callback' => 'artgallery_sanitize_checkbox',
	            )
	    );

	    $wp_customize->add_control( new WP_Customize_Control( $wp_customize,
	                        'artgallery_animations_display',
	                            array(
	                                'label'          => __( 'Enable Animations', 'artgallery' ),
	                                'section'        => 'artgallery_animations_display',
	                                'settings'       => 'artgallery_animations_display',
	                                'type'           => 'checkbox',
	                            )
	                        )
	    );

		/**
		 * Add Footer Section
		 */
		$wp_customize->add_section(
			'artgallery_footer_section',
			array(
				'title'       => __( 'Footer', 'artgallery' ),
				'capability'  => 'edit_theme_options',
			)
		);
		
		// Add Footer Copyright Text
		$wp_customize->add_setting(
			'artgallery_footer_copyright',
			array(
			    'default'           => '',
			    'sanitize_callback' => 'sanitize_text_field',
			)
		);

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'artgallery_footer_copyright',
	        array(
	            'label'          => __( 'Copyright Text', 'artgallery' ),
	            'section'        => 'artgallery_footer_section',
	            'settings'       => 'artgallery_footer_copyright',
	            'type'           => 'text',
	            )
	        )
		);
	}
endif; // artgallery_customize_register
add_action( 'customize_register', 'artgallery_customize_register' );

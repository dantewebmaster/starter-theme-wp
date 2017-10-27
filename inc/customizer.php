<?php
/**
 * DW Theme Customizer
 */
function dw_customize_register( $wp_customize ) {
	// remove settings sections
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'themes' );
	$wp_customize->remove_section( 'header_text' );

	/**
	 * Settings sanitization
	 */
	// sanitize text
	function dw_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	}
	// sanitize url 
	function dw_sanitize_url( $url ) {
		return esc_url( $url );
	}
	// sanitize checkboxes
	function dw_sanitize_checkbox_option( $input ) {
		if ( $input == 1 ) {
			return 1;
		} else {
			return '';
		}
	}

	/**
	 * General settings
	 */
	$wp_customize->add_section(
        'general_settings',
        array(
            'title'       => 'Configurações Gerais',
            'description' => 'Configurações gerais do site.',
            'priority'    => 35
        )
	);

	// copyright
	$wp_customize->add_setting(
		'site_copyright',
		array(
			'sanitize_callback' => 'dw_sanitize_text'
		)
	);
	$wp_customize->add_control(
		'site_copyright',
		array(
			'label'       => 'Texto de copyright',
			'description' => 'Insira o texto de copyright (Aceita HTML).',
			'section'     => 'general_settings',
			'type'        => 'textarea'
		)
	);

	/**
	 * Home settings
	 */
	$wp_customize->add_section(
        'home_settings',
        array(
            'title'       => 'Configurações da Home',
            'description' => 'Opções da homepage do site.',
            'priority'    => 35
        )
    );
	// home slider shortcode
	$wp_customize->add_setting(
		'home_slider',
		array(
			'sanitize_callback' => 'dw_sanitize_text'
		)
	);
	$wp_customize->add_control(
    'home_slider',
		array(
			'label'       => 'Home Slider Shortcode',
			'description' => 'Insira o shortcode do slider para a homepage.',
			'section'     => 'home_settings',
			'type'        => 'text'
		)
	);

	/**
	 * Social settings
	 */
	$wp_customize->add_section(
        'social_settings',
        array(
            'title'       => 'Redes Sociais',
            'description' => 'Links das redes sociais e RSS.',
            'priority'    => 35
        )
    );
	// facebook
	$wp_customize->add_setting(
		'facebook_url',
		array(
			'sanitize_callback' => 'dw_sanitize_url'
		)
	);
	$wp_customize->add_control(
		'facebook_url',
		array(
			'label'   => 'URL do Facebook',
			'section' => 'social_settings',
			'type'    => 'text',
		)
	);
	// twitter
	$wp_customize->add_setting(
		'twitter_url',
		array(
			'sanitize_callback' => 'dw_sanitize_url'
		)
	);
	$wp_customize->add_control(
		'twitter_url',
		array(
			'label'   => 'URL do Twitter',
			'section' => 'social_settings',
			'type'    => 'text',
		)
	);
	// instagram
	$wp_customize->add_setting(
		'instagram_url',
		array(
			'sanitize_callback' => 'dw_sanitize_url'
		)
	);
	$wp_customize->add_control(
		'instagram_url',
		array(
			'label'   => 'URL do Instagram',
			'section' => 'social_settings',
			'type'    => 'text',
		)
	);
	// linkedin
	$wp_customize->add_setting(
		'linkedin_url',
		array(
			'sanitize_callback' => 'dw_sanitize_url'
		)
	);
	$wp_customize->add_control(
		'linkedin_url',
		array(
			'label'   => 'URL do Linkedin',
			'section' => 'social_settings',
			'type'    => 'text',
		)
	);
	// googleplus
	$wp_customize->add_setting(
		'googleplus_url',
		array(
			'sanitize_callback' => 'dw_sanitize_url'
		)
	);
	$wp_customize->add_control(
		'googleplus_url',
		array(
			'label'   => 'URL do Google+',
			'section' => 'social_settings',
			'type'    => 'text',
		)
	);
	// youtube
	$wp_customize->add_setting(
		'youtube_url',
		array(
			'sanitize_callback' => 'dw_sanitize_url'
		)
	);
	$wp_customize->add_control(
		'youtube_url',
		array(
			'label'   => 'URL do Youtube',
			'section' => 'social_settings',
			'type'    => 'text',
		)
	);
	// rss
	$wp_customize->add_setting(
		'show_rss_url'
	);
	$wp_customize->add_control(
		'show_rss_url',
		array(
			'label'   => 'Mostrar link RSS',
			'section' => 'social_settings',
			'type'    => 'checkbox',
		)
	);

	/**
	 * Seo settings
	 */
	$wp_customize->add_section(
        'seo_settings',
        array(
            'title'       => 'Configurações de SEO',
            'description' => 'Configurações relacionadas ao SEO do site.',
            'priority'    => 35
        )
    );
	// analytics
	$wp_customize->add_setting(
		'google_analytics_id',
		array(
			'sanitize_callback' => 'dw_sanitize_text'
		)
	);
	$wp_customize->add_control(
    'google_analytics_id',
		array(
			'label'       => 'Google Analytics',
			'description' => 'Insira aqui a  ID acompanhamento do Google Analytics ex. UA-XXXXX-X',
			'section'     => 'seo_settings',
			'type'        => 'text'
		)
	);
	// google verification
	$wp_customize->add_setting(
		'google_verification',
		array(
			'sanitize_callback' => 'dw_sanitize_text'
		)
	);
	$wp_customize->add_control(
    'google_verification',
		array(
			'label'   => 'ID de verificação do Google',
			'section' => 'seo_settings',
			'type'    => 'text',
		)
	);

}
add_action( 'customize_register', 'dw_customize_register' );

<?php

function coderblog_customize_register($wp_customize)
{
    // Settings
    $wp_customize->add_setting('coderblog_header_text',[
        'default' => 'Latest Media Trends'
    ]);

    $wp_customize->add_setting('coderblog_footer_copyright_text',[
        'default' => 'Copyrights © 2017 All Rights Reserved by codenrx.'
    ]);

    $wp_customize->add_setting('coderblog_facebook_url',[
        'default' => ''
    ]);

    $wp_customize->add_setting('coderblog_twitter_url',[
        'default' => ''
    ]);

    $wp_customize->add_setting('coderblog_youtube_url',[
        'default' => ''
    ]);

    $wp_customize->add_setting('coderblog_github_url',[
        'default' => ''
    ]);

    // Section
    $wp_customize->add_section('ju_misc_section', [
        'title' => __( 'Theme Settings', 'coderblog' ),
        'priority' => 30
    ]);

    // Control
    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'coderblog_header_text',
		array(
			'label'                 =>  __( 'Home Page Header Text', 'coderblog' ),
			'section'               => 'ju_misc_section',
			'settings'              => 'coderblog_header_text',
		)
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'coderblog_footer_copyright_text',
		array(
			'label'                 =>  __( 'Footer CopyRight Text', 'coderblog' ),
			'section'               => 'ju_misc_section',
			'settings'              => 'coderblog_footer_copyright_text',
		)
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'coderblog_facebook_url',
		array(
			'label'                 =>  __( 'Facebook Url', 'coderblog' ),
			'section'               => 'ju_misc_section',
			'settings'              => 'coderblog_facebook_url',
		)
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'coderblog_twitter_url',
		array(
			'label'                 =>  __( 'Twitter Url', 'coderblog' ),
			'section'               => 'ju_misc_section',
			'settings'              => 'coderblog_twitter_url',
		)
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'coderblog_youtube_url',
		array(
			'label'                 =>  __( 'Youtube Url', 'coderblog' ),
			'section'               => 'ju_misc_section',
			'settings'              => 'coderblog_youtube_url',
		)
    ));

    $wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'coderblog_github_url',
		array(
			'label'                 =>  __( 'Github Url', 'coderblog' ),
			'section'               => 'ju_misc_section',
			'settings'              => 'coderblog_github_url',
		)
    ));
    
}
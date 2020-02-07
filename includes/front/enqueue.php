<?php

function coderblog_style()
{
    $uri = get_theme_file_uri();

    wp_register_style( 'coderblog_google_fonts', 'https://fonts.googleapis.com/css?family=Acme|Cabin:700|Merriweather+Sans&display=swap' );
    wp_register_style( 'coderblog_icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_register_style( 'coderblog_bootstrap', $uri.'/assets/css/bootstrap.min.css');
    wp_register_style( 'coderblog_style', $uri.'/assets/css/style.css');

    wp_enqueue_style( 'coderblog_google_fonts' );
    wp_enqueue_style( 'coderblog_icons' );
    wp_enqueue_style( 'coderblog_bootstrap' );
    wp_enqueue_style( 'coderblog_style' );

    wp_register_script( 'coderblog_popper_js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true );
    wp_register_script( 'coderblog_bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', [], false, true );
    
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'coderblog_popper_js' );
	wp_enqueue_script( 'coderblog_bootstrap_js' );

}
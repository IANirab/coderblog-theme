<?php

// Includes
include get_template_directory().'/includes/front/enqueue.php';
include get_template_directory().'/includes/setup.php';
include get_template_directory().'/includes/custom-nav-walker.php';
include get_template_directory().'/includes/widget.php';
include get_template_directory().'/includes/customizer.php';

// Hooks
add_action( 'wp_enqueue_scripts', 'coderblog_style' );
add_action( 'after_setup_theme', 'coderblog_setup_theme' );
add_action( 'widgets_init', 'coderblog_widgets' );
add_action( 'customize_register', 'coderblog_customize_register' );
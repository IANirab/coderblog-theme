<?php

function coderblog_widgets()
{
    register_sidebar([
        'name' => __( 'My Theme sidebar', 'coderblog' ),
        'id'   => 'coderblog_sidebar',
        'description' => __( 'sidebar for theme', 'coderblog' ),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ]);
}
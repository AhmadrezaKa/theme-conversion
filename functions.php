<?php

/**
 * Theme setup.
 */
function ahmadreza_portfolio_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
    
    // Enable comments on posts by default
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'ahmadreza_portfolio_setup' );

/**
 * Enqueue styles.
 */
function ahmadreza_portfolio_scripts() {
    wp_enqueue_style(
        'ahmadreza-portfolio-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'ahmadreza_portfolio_scripts' );


<?php

if ( ! function_exists( 'clearify_setup' )) :
function clearify_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'comment-form', 'comment-list'
    ));
    add_theme_support( 'custom-header', custom_header_defaults() );
}
endif;
add_action( 'after_setup_theme', 'clearify_setup' );

function clearify_widgets_init() {
    register_sidebar (array (
        'name'          => __('Sidebar', 'clearify'),
        'id'            => "sidebar-widget-area",
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title"><span>',
        'after_title'   => '</span></h2>' )
    );

    register_sidebar (array (
        'name'          => __('Search', 'clearify'),
        'id'            => "top-search-area",
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>' )
    );
}
add_action( 'init', 'clearify_widgets_init' );


function template_fonts_url() {
    return 'http://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Roboto+Condensed:400,700';
}

function clearify_scripts() {
    wp_enqueue_style( 'googleFonts', template_fonts_url() );
    wp_enqueue_style( 'clearify-font-awesome', get_template_directory_uri() .
        "/inc/fontawesome/font-awesome.min.css", array(), '4.3.0', 'screen' );
    wp_enqueue_style( 'clearify-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'clearify_scripts' );

function social_media_sites() {
    return array(
        'facebook'          => 'Facebook',
        'google-plus'       => 'Google Plus',
        'twitter'           => 'Twitter',
        'linkedin'          => 'Linkedin',
        'github'            => 'Github',
        'youtube'           => 'Youtube',
        'rss'               => 'RSS Feed'
    );
}

function clearify_customize_register($wp_customize) {
    $wp_customize->add_section( 'social_share', array(
        'title'         => __('Social Media Icons', 'clearify'),
        'description'   => '',
        'priority'      => 75,
    ));

    $sites = social_media_sites();
    $priority = 5;

    foreach($sites as $key => $value) {
        $wp_customize->add_setting( $key, array(
            'capability'        => 'edit_theme_options',
            'type'              => 'theme_mod',
            'sanitize_callback' =>  'esc_url_raw',
        ));

        $wp_customize->add_control( $key, array(
            'label'         => $value,
            'section'       => 'social_share',
            'type'          => 'text',
            'priority'      => $priority,
        ));

        $priority += 5;
    }
}
add_action( 'customize_register', 'clearify_customize_register' );

function active_social_sites() {
    $sites = social_media_sites();
    foreach($sites as $key => $value) {
        if ( strlen( get_theme_mod( $key ) ) > 0 ) {
            $active_sites[] = $key;
        }
    }
    return $active_sites;
}

function custom_header_defaults() {
    return array(
        'width'         => '150',
        'height'        => '150',
        'default-image' => get_template_directory_uri() . '/img/header.png',
    );
}

?>
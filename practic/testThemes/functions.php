<?php
/**
 * TestThemes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TestThemes
 */

if (!defined('_S_VERSION')) {
    // Замените номер версии темы при каждом обновлении.
    define('_S_VERSION', '1.0.0');
}

function testthemes_setup()
{
    load_theme_textdomain('testthemes', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'testthemes'),
    ));
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
    add_theme_support(
        'custom-background',
        apply_filters(
            'testthemes_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'testthemes_setup');

function testthemes_content_width()
{
    $GLOBALS['content_width'] = apply_filters('testthemes_content_width', 640);
}
add_action('after_setup_theme', 'testthemes_content_width', 0);

function testthemes_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'testthemes'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'testthemes'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'testthemes_widgets_init');

function testthemes_scripts()
{
    wp_enqueue_style('testthemes-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('testthemes-style', 'rtl', 'replace');
    wp_enqueue_script('testthemes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'testthemes_scripts');

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}



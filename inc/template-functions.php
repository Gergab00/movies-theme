<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package movies_theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function movies_theme_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (! is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (! is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter('body_class', 'movies_theme_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function movies_theme_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'movies_theme_pingback_header');

/**
 * Register menu locations.
 *
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 *
 */
function register_menu()
{
    register_nav_menu('primary', __('Primary'));
}
add_action('init', 'register_menu');

// Filter custom logo with correct classes.
add_filter('get_custom_logo', 'theme_change_logo_class');

if (! function_exists('theme_change_logo_class')) {
    /**
     * Replaces logo CSS class.
     *
     * @param string $html Markup.
     *
     * @return string
     */
    function theme_change_logo_class($html)
    {
        $html = str_replace('class="custom-logo"', 'class="img-fluid"', $html);
        $html = str_replace('class="custom-logo-link"', 'class="navbar-brand custom-logo-link"', $html);
        $html = str_replace('alt=""', 'title="Home" alt="logo"', $html);

        return $html;
    }
}

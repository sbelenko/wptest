<?php
// Disable Theme and Plugin Editors
define('DISALLOW_FILE_EDIT', true);

// Remove WordPress Generator
remove_action('wp_head', 'wp_generator');

// Remove version from RSS
add_filter('the_generator', '__return_empty_string');

// Remove WordPress version from scripts and styles
function theme_remove_version($src) {
    if (strpos($src, 'ver=' . get_bloginfo('version'))) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}
add_filter('style_loader_src', 'theme_remove_version');
add_filter('script_loader_src', 'theme_remove_version');

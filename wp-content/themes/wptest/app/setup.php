<?php
/*
 * Default theme settings
 */

// Staging restrictions
if (file_exists(sys_get_temp_dir() . '/staging-restrictions.php')) {
    define('STAGING_RESTRICTIONS', true);
    require_once sys_get_temp_dir() . '/staging-restrictions.php';
}

//
add_action('themecheck_checks_loaded', function () {
    $disabled_checks = ['TagCheck', 'Plugin_Territory', 'CustomCheck', 'EditorStyleCheck'];
    global $themechecks;

    foreach ($themechecks as $key => $check) {
        if (is_object($check) && in_array(get_class($check), $disabled_checks)) {
            unset($themechecks[$key]);
        }
    }
});

add_theme_support('automatic-feed-links');

# Custom logo support. Uncomment or delete on production
function theme_add_logo_support() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_add_logo_support');


if (!isset($content_width)) {
    $content_width = 900;
}

function theme_localization() {
    load_theme_textdomain('base', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'theme_localization');

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support('title-tag');


// Replace standard wp menu classes
add_filter('nav_menu_css_class', function ($css_classes) {
    return str_replace(['current-menu-item', 'current-menu-parent', 'current-menu-ancestor'], 'active', $css_classes);
});

//Allow tags in category description
$filters = array('pre_term_description', 'pre_link_description', 'pre_link_notes', 'pre_user_description');
foreach ($filters as $filter) {
    remove_filter($filter, 'wp_filter_kses');
}

// fix gutenberg width
add_action('admin_head', function () {
    if (class_exists('acf') && is_admin()) {
        echo '<style>.editor-styles-wrapper .wp-block {max-width: 1400px !important;}</style>';
    }
});

// disable comments on pages by default
function theme_page_comment_status($post_ID, $post, $update) {
    if (!$update) {
        remove_action('save_post_page', 'theme_page_comment_status', 10);
        wp_update_post(array(
            'ID' => $post->ID,
            'comment_status' => 'closed',
        ));
        add_action('save_post_page', 'theme_page_comment_status', 10, 3);
    }
}

add_action('save_post_page', 'theme_page_comment_status', 10, 3);


function basetheme_options_capability() {
    $role = get_role('administrator');
    $role->add_cap('theme_options_view');
}

add_action('admin_init', 'basetheme_options_capability');

// theme options tab in appearance
if (function_exists('acf_add_options_sub_page') && current_user_can('theme_options_view')) {
    acf_add_options_sub_page(array(
        'title' => 'Theme Options',
        'parent' => 'themes.php',
    ));
}

// commented block below, because there may be errors with js, if need you can uncomment this block
add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if (!is_admin())
        $tag = str_replace(' src=', ' defer src=', $tag);

    return $tag;
}, 99, 3);

// disable gutenberg for flexible template
add_filter('use_block_editor_for_post', function ($use_block_editor, $post) {
    if ($post->post_type == 'page' &&
        get_page_template_slug($post->ID) == 'page-templates/flexible.php') {
        $use_block_editor = false;
    }

    return $use_block_editor;
}, 10, 2);

// category template
add_filter('template_include', function ($template) {
    if (is_category()) {
        $template = get_template_directory() . '/index.php';
    }

    return $template;
});

// disable gutenberg for flexible template
add_filter('use_block_editor_for_post', function ($use_block_editor, $post) {
    if ($post->post_type == 'page' &&
        get_page_template_slug($post->ID) == 'page-templates/flexible.php') {
        $use_block_editor = false;
    }

    return $use_block_editor;
}, 10, 2);

// Disable default pages.
function theme_disable_default_pages() {
    /* Conditional checks examples:
        is_category()
        is_tag()
        is_date()
        is_author()
        is_tax()
        is_search() ... */

    // Return a 404 for selected pages.
    if (
        is_archive() ||
        is_category() ||
        is_tag() ||
        is_date() ||
        is_author() ||
        is_tax()
    ) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
    }
}
add_action('template_redirect', 'theme_disable_default_pages');

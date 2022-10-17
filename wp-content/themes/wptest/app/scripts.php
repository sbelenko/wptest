<?php
/*
 * Add Theme JS
 */

add_action('wp_enqueue_scripts', function () {
    /*
    * Adds JavaScript to pages with the comment form to support
    * sites with threaded comments (when in use).
    */
    wp_deregister_script('comment-reply');
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script(
            'comment-reply',
            get_template_directory_uri() . '/js/comment-reply.js',
            null,
            null,
            true
        );
    }

    // Loads JavaScript file with functionality specific.
    wp_enqueue_script(
        'main-script',
        get_template_directory_uri() . '/js/app.js',
        ['jquery'],
        null,
        true
    );
});

/*
 * Add Theme CSS
 */
add_action('wp_enqueue_scripts', function () {
    // Loads our main stylesheet.
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );
});

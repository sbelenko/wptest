<?php
 /*
|--------------------------------------------------------------------------
| Theme sidebar
|--------------------------------------------------------------------------
|
| Builds the definition for a single sidebar and returns the ID.
|
| Accepts either a string or an array and then parses that against a set
| of default arguments for the new sidebar. WordPress will automatically
| generate a sidebar ID and name based on the current number of registered
| sidebars if those arguments are not included.
|
*/

add_action('widgets_init', function () {
    register_sidebar([
        'id' => 'default-sidebar',
        'name' => __('Default Sidebar', 'base'),
        'before_widget' => '<div class="widget %2$s" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ]);
});

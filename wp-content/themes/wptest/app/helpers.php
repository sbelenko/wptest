<?php
/*
 * Theme functions
 */

function theme_attachment_image($id = false, $size = 'full', $attr = []) {
    if (!$id || !is_numeric($id)) {
        return;
    }

    $render_image = wp_get_attachment_image($id, $size, null, $attr);
    echo preg_replace('/(height|width)="\d*"\s/', '', $render_image);
}

function theme_bg_image($id, $size = 'full') {
    if (!$id || !is_numeric($id)) {
        return;
    }

    $_img = wp_get_attachment_image_src($id, $size);
    echo ' style="background-image: url(' . $_img[0] . ');"';
}

function theme_bg_color($bg_color = false) {
    if (!$bg_color) {
        return;
    }

    echo ' style="background-color: ' . $bg_color . '"';
}

// clean phone
function clean_phone($phone) {
    return preg_replace('/[^0-9]/', '', $phone);
}

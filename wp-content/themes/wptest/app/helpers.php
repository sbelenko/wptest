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

// logo
function logoPath() {
    $logoPath = get_template_directory_uri() . '/images/logo.svg';

    if ($custom_logo_id = get_theme_mod('custom_logo')) {
        $logoPath = wp_get_attachment_url($custom_logo_id);
    }

    return $logoPath;
}

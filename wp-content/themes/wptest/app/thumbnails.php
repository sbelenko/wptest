<?php
/*
|--------------------------------------------------------------------------
| Add additional default image sub-sizes
|--------------------------------------------------------------------------
|
| These sizes are meant to enhance the way WordPress displays images on the front-end on larger,
| high-density devices. They make it possible to generate more suitable `srcset` and `sizes` attributes
| when the users upload large images.
|
| The sizes can be changed or removed by themes and plugins but that is not recommended.
| The size "names" reflect the image dimensions, so changing the sizes would be quite misleading.
|
*/

add_theme_support('post-thumbnails');
set_post_thumbnail_size(50, 50, true); // Normal post thumbnails
// add_image_size('image_400x9999', 400, 9999, true);

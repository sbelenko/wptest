<?php
/*
Template Name: Flexible
*/
get_header() ?>
    <main class="main" id="main">
        <?php
        if (have_rows('flexible_content')) {
            while (have_rows('flexible_content')) {
                the_row();
                get_template_part('template-parts/acf-flexible/' . get_row_layout());
            }
        }
        ?>
    </main>
<?php get_footer() ?>

<?php get_header() ?>
    <div id="content">
        <div class="title">
            <?php the_archive_title('<h1>', '</h1>') ?>
        </div>
        <?php get_template_part('template-parts/loop') ?>
    </div>
    <?php get_sidebar() ?>
<?php get_footer() ?>

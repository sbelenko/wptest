<?php get_header() ?>
    <div class="container">
        <?php while (have_posts()): the_post() ?>
            <?php the_title('<div class="title"><h1>', '</h1></div>') ?>
            <?php the_post_thumbnail('full') ?>
            <?php the_content() ?>
        <?php endwhile; ?>
        <?php wp_link_pages() ?>
    </div>
<?php get_footer() ?>

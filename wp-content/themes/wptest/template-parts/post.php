<div <?php post_class() ?> id="post-<?php the_ID() ?>">
    <div class="title">
        <?php the_title('<h2><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>') ?>
        <p class="meta-info">
            <time datetime="<?php echo get_the_date('Y-m-d') ?>">
                <?php the_time('F jS, Y') ?>
            </time>
            <?php _e('by', 'base') ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')) ?>"><?php the_author() ?></a>
        </p>
    </div>
    <div class="content">
        <?php the_post_thumbnail('full') ?>
        <?php the_excerpt() ?>
    </div>
    <?php wp_link_pages() ?>
    <?php get_template_part('template-parts/meta') ?>
</div>

<?php get_header() ?>
    <div class="container">
        <?php if (have_posts()): ?>
            <?php get_template_part('template-parts/loop') ?>
        <?php else: ?>
            <?php get_template_part('template-parts/not-found') ?>
        <?php endif; ?>
    </div>
<?php get_footer() ?>

<?php if (have_rows('slider')): ?>
    <section class="intro-section intro-slider">
        <?php while (have_rows('slider')): the_row() ?>
            <?php
            $info = get_sub_field('info');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $imageId = get_sub_field('image');
            ?>
            <?php if ($info || $title || $text || $imageId): ?>
                <div class="slide">
                    <div class="flex-container">
                        <?php if ($info || $title || $text): ?>
                            <div class="text-holder">
                                <?php if ($info): ?>
                                    <strong class="subtitle"><?php echo $info ?></strong>
                                <?php endif; ?>
                                <?php if ($title): ?>
                                    <h1><?php echo $title ?></h1>
                                <?php endif; ?>
                                <?php echo $text ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($imageId): ?>
                            <div class="img-holder">
                                <?php theme_attachment_image($imageId) ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    </section>
<?php endif; ?>

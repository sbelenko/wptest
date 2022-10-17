<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
        <?php wp_body_open() ?>
        <div class="wrapper">
            <header class="header">
                <div class="container">
                    <strong class="logo">
                        <a href="<?php echo esc_url(home_url('/')) ?>">
                            <img src="<?php echo logoPath() ?>" alt="<?php bloginfo('name') ?>" />
                        </a>
                    </strong>
                    <div class="nav-holder">
                        <?php if (has_nav_menu('primary')): ?>
                            <?php
                            wp_nav_menu([
                                'container' => 'nav',
                                'menu_class' => 'nav',
                                'theme_location' => 'primary'
                            ]);
                            ?>
                        <?php endif; ?>
                        <?php get_template_part('template-parts/header/user-links') ?>
                    </div>
                    <a href="#" class="nav-opener"><span></span></a>
                </div>
            </header>

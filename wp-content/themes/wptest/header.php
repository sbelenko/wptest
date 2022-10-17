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
                            <img src="images/logo.svg" alt="<?php bloginfo('name') ?>" />
                        </a>
                    </strong>
                    <div class="nav-holder">
                        <nav>
                            <ul class="nav">
                                <li><a href="#">Home</a></li>
                                <li>
                                    <a href="#">Products</a>
                                    <ul>
                                        <li><a href="#">Product 1</a></li>
                                        <li><a href="#">Product 2</a></li>
                                        <li><a href="#">Product 3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Resources</a>
                                    <ul>
                                        <li><a href="#">Resource 1</a></li>
                                        <li><a href="#">Resource 2</a></li>
                                        <li><a href="#">Resource 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pricing</a></li>
                            </ul>
                        </nav>
                        <div class="buttons-holder">
                            <a href="#" class="btn btn-link">Log in</a>
                            <a href="#" class="btn btn-primary">Sign up</a>
                        </div>
                    </div>
                    <a href="#" class="nav-opener"><span></span></a>
                </div>
            </header>

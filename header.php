<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" as="video" href="<?php echo get_template_directory_uri(); ?>/assets/videos/opening.mp4" type="video/mp4">
    <link rel="preload" as="video" href="<?php echo get_template_directory_uri(); ?>/assets/videos/menu2.mp4" type="video/mp4">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">

        <p class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>#hero">
                HanaCafe
            </a>
        </p>

        <button class="menu-button" aria-label="メニューを開く">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="side-menu">

            <button class="close-button" aria-label="メニューを閉じる">
                <span></span>
                <span></span>
            </button>

            <ul>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>#hero">
                        Home
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>#concept">
                        Concept
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>#news">
                        News
                    </a>
                </li>
                <li class="menu-parent">
                    <a href="<?php echo esc_url(home_url('/')); ?>#menu" class="menu-toggle">
                        Menu
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>coffee/">
                                Coffee
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>tea/">
                                Tea
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>bakery/">
                                Bakery
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/')); ?>chocolate/">
                                Chocolate
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>#access">
                        Access
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>#gallery">
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>#contact">
                        Contact
                    </a>
                </li>
            </ul>

        </nav>

    </header>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'herofed'); ?></a>

    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid box_header">
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/space-pizza.png" alt="Space Pizza" class="logo" />
                    <span class="logo_text">Space Pizza</span>

                </a>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <div>
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'main-menu',
                        'container'       => 'div',
                        'container_id'    => 'main-nav',
                        'container_class' => '',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav ',
                        'depth'           => 3,

                    ));
                    ?>

                </div>
            </div>
        </div>
    </nav>

    <div id="main-content">
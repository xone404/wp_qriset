<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header class="site-header">
        <div class="container">
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/LogoHeader.svg" alt="Logo Qriset Indonesia">
                </a>
            </div>
        </div>
    </header>
    
    <nav class="main-navigation" id="main-nav">
        <div class="container">
            <button class="hamburger-menu" id="hamburger-toggle" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>

            <?php
            // Memanggil menu yang dikelola dari dashboard WordPress
            wp_nav_menu( array(
                'theme_location' => 'primary_menu',
                'container'      => false,
                'menu_id'        => 'main-menu',
            ) );
            ?>

            <div class="header-search">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label>
                        <span class="screen-reader-text">Search for:</span>
                        <input type="search" class="search-field" placeholder="Cari Buku..." value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
    </nav>
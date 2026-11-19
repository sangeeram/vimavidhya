
<header class="site-header" id="masthead">
    <div class="navbar-container">

        <!-- LOGO -->
        <div class="navbar-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"
               class="logo-link">

                <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png"
                    alt="<?php bloginfo('name'); ?>"
                    class="logo-img"
                >
            </a>
        </div>

        <!-- MOBILE MENU TOGGLE -->
        <button
            class="menu-toggle"
            aria-controls="primary-menu"
            aria-expanded="false"
            aria-label="<?php esc_attr_e('Toggle navigation', 'textdomain'); ?>"
        >
            <span class="screen-reader-text">
                <?php esc_html_e('Primary Menu', 'textdomain'); ?>
            </span>
            <span class="hamburger-bar"></span>
        </button>

        <!-- MAIN NAVIGATION -->
        <nav class="main-navigation" id="primary-menu">

            <?php
            wp_nav_menu([
                'theme_location' => 'primary-menu',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'fallback_cb'    => false,
            ]);
            ?>

            <!-- START LEARNING BUTTON -->
            <!-- <a
                href="<?php echo esc_url(home_url('/education/')); ?>"
                class="header-learning-btn"
            >
                <span>Start Learning</span>
                <span class="learning-arrow">↗</span>
            </a> -->

            <!-- LANGUAGE SWITCHER -->
            <?php if (shortcode_exists('gtranslate')) : ?>
                <div class="vv-language-switcher">
                    <span class="vv-language-icon"
                          aria-hidden="true">🌐</span>

                    <?php echo do_shortcode('[gtranslate]'); ?>
                </div>
            <?php endif; ?>

        </nav>

    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const siteHeader = document.querySelector('.site-header');
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main-navigation');

    // MOBILE MENU
    if (menuToggle && mainNav) {

        menuToggle.addEventListener('click', function () {

            const isExpanded =
                menuToggle.getAttribute('aria-expanded') === 'true';

            menuToggle.setAttribute(
                'aria-expanded',
                String(!isExpanded)
            );

            mainNav.classList.toggle('is-active');

        });

    }

    // STICKY HEADER
    if (siteHeader) {

        const updateStickyHeader = function () {

            if (window.scrollY > 50) {
                siteHeader.classList.add('is-sticky');
            } else {
                siteHeader.classList.remove('is-sticky');
            }

        };

        window.addEventListener('scroll', updateStickyHeader, {
            passive: true
        });

        updateStickyHeader();

    }

});
</script>

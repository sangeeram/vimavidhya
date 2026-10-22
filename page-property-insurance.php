```php
<?php
/**
 * Vima Vidya — Property Insurance
 */

get_header();
?>

<!-- =========================================================
     FLOATING HANGING SIDE MENU
========================================================= -->
<nav class="hanging-side-menu" aria-label="Page Navigation">

    <!-- Home -->
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
       class="tab-item tab-blue">

        <svg viewBox="0 0 24 24" class="tab-icon">
            <path fill="currentColor"
                  d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
        </svg>

        <span class="tab-label">Home</span>
    </a>


    <!-- Awareness -->
    <a href="<?php echo esc_url( home_url( '/awareness/' ) ); ?>"
       class="tab-item tab-navy">

        <svg viewBox="0 0 24 24" class="tab-icon">
            <path fill="currentColor"
                  d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10
                     10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.25
                     -.9.92C13.45 13.4 13 14 13 15h-2v-.5c0-1 .45-1.6
                     1.17-2.32l1.24-1.26c.37-.36.59-.86.59-1.42
                     0-1.1-.9-2-2-2s-2 .9-2 2H10c0-2.21 1.79-4
                     4-4s4 1.79 4 4c0 .88-.36 1.68-0.93 2.25z"/>
        </svg>

        <span class="tab-label">Awareness</span>
    </a>


    <!-- Property Insurance -->
    <a href="<?php echo esc_url( home_url( '/property-insurance/' ) ); ?>"
       class="tab-item tab-purple">

        <svg viewBox="0 0 24 24" class="tab-icon">
            <path fill="currentColor"
                  d="M12 3L3 10v11h6v-7h6v7h6V10l-9-7z"/>
        </svg>

        <span class="tab-label">Property</span>
    </a>


    <!-- Understand -->
    <a href="<?php echo esc_url( home_url( '/property-understand/' ) ); ?>"
       class="tab-item tab-yellow">

        <svg viewBox="0 0 24 24" class="tab-icon">
            <path fill="currentColor"
                  d="M12 2a10 10 0 1 0 0 20
                     10 10 0 0 0 0-20zm1 17h-2v-2h2v2zm2.07-7.25
                     -.9.92C13.45 13.4 13 14 13 15h-2v-.5c0-1
                     .45-1.6 1.17-2.32l1.24-1.26c.37-.36.59-.86
                     .59-1.42 0-1.1-.9-2-2-2s-2 .9-2 2H9c0-2.21
                     1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-0.93 2.25z"/>
        </svg>

        <span class="tab-label">Understand</span>
    </a>


    <!-- Layers -->
    <a href="#layers"
       class="tab-item tab-teal">

        <svg viewBox="0 0 24 24" class="tab-icon">
            <path fill="currentColor"
                  d="M12 2L2 7l10 5 10-5-10-5zm0 9L2 6v4l10 5
                     10-5V6l-10 5zm0 7L2 13v4l10 5 10-5v-4l-10 5z"/>
        </svg>

        <span class="tab-label">Layers</span>
    </a>

</nav>


<!-- =========================================================
     MAIN CONTENT
========================================================= -->
<main id="primary" class="awareness-single">

    <?php
    get_template_part(
        'template-parts/awareness/typesofinsurance/propertyinsurance/propertyhero'
    );
    ?>


    <?php
    get_template_part(
        'template-parts/awareness/typesofinsurance/propertyinsurance/layers'
    );
    ?>

</main>


<!-- =========================================================
     HANGING MENU STYLES
========================================================= -->
<style>

.hanging-side-menu {
    position: fixed;
    right: 0;
    top: 50%;
    transform: translateY(-50%);

    display: flex;
    flex-direction: column;
    gap: 4px;

    z-index: 9999;
}


/* ---------------------------------------------------------
   BASE TAB
--------------------------------------------------------- */

.hanging-side-menu .tab-item {
    display: flex;
    align-items: center;
    gap: 10px;

    width: 140px;
    height: 38px;

    padding: 0 10px;

    color: #ffffff;

    font-size: 11px;
    font-weight: 700;

    letter-spacing: 0.4px;
    text-transform: uppercase;

    text-decoration: none;

    border-radius: 6px 0 0 6px;

    box-shadow:
        -2px 2px 8px rgba(0, 0, 0, 0.12);

    cursor: pointer;

    /*
     * Only a small portion is visible
     * until the user hovers.
     */
    transform: translateX(96px);

    transition:
        transform 0.25s cubic-bezier(0.2, 0, 0.2, 1),
        filter 0.2s ease;
}


/* ---------------------------------------------------------
   HOVER
--------------------------------------------------------- */

.hanging-side-menu .tab-item:hover {
    transform: translateX(0);
    filter: brightness(1.08);
}


/* ---------------------------------------------------------
   ICON
--------------------------------------------------------- */

.hanging-side-menu .tab-icon {
    width: 18px;
    height: 18px;

    min-width: 18px;

    fill: currentColor;
}


/* ---------------------------------------------------------
   LABEL
--------------------------------------------------------- */

.hanging-side-menu .tab-label {
    white-space: nowrap;

    overflow: hidden;
    text-overflow: ellipsis;
}


/* ---------------------------------------------------------
   COLORS
--------------------------------------------------------- */

.hanging-side-menu .tab-blue {
    background-color: #199bf1;
}

.hanging-side-menu .tab-yellow {
    background-color: #f7b731;
    color: #1c1c1c;
}

.hanging-side-menu .tab-purple {
    background-color: #8854d0;
}

.hanging-side-menu .tab-teal {
    background-color: #0fb9b1;
}

.hanging-side-menu .tab-navy {
    background-color: #1b1464;
}


/* ---------------------------------------------------------
   SMOOTH SCROLL
--------------------------------------------------------- */

html {
    scroll-behavior: smooth;
}


/* ---------------------------------------------------------
   MOBILE
--------------------------------------------------------- */

@media (max-width: 991px) {
    .hanging-side-menu {
        position: fixed !important;
        bottom: 0 !important;
        left: 0 !important;
        right: 0 !important;
        top: auto !important;
        transform: none !important;
        display: flex !important;
        flex-direction: row !important;
        justify-content: space-around !important;
        align-items: center !important;
        overflow-x: visible !important;
        background: #ffffff !important;
        padding: 8px 4px !important;
        gap: 4px !important;
        z-index: 99999 !important;
        box-shadow: 0 -4px 16px rgba(0, 0, 0, 0.15) !important;
        border-top: 1px solid #e2e8f0 !important;
    }

    .hanging-side-menu .tab-item {
        position: relative !important; /* Required for tooltip positioning */
        width: 40px !important;
        height: 40px !important;
        min-width: unset !important;
        padding: 0 !important;
        justify-content: center !important;
        border-radius: 50% !important;
        transform: none !important;
        flex-shrink: 0;
    }

    .hanging-side-menu .tab-icon {
        width: 20px !important;
        height: 20px !important;
        min-width: 20px !important;
    }

    /* Transform the label into a floating tooltip */
    .hanging-side-menu .tab-label {
        display: none; /* Hidden by default */
        position: absolute;
        bottom: 50px; /* Position right above the circular icon */
        left: 50%;
        transform: translateX(-50%);
        background: #1c1c1c;
        color: #ffffff;
        font-size: 10px;
        font-weight: 600;
        padding: 4px 8px;
        border-radius: 4px;
        white-space: nowrap;
        pointer-events: none;
        box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        z-index: 100000;
    }

    /* Small triangle pointer for the tooltip */
    .hanging-side-menu .tab-label::after {
        content: '';
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        border-width: 4px;
        border-style: solid;
        border-color: #1c1c1c transparent transparent transparent;
    }

    /* Show tooltip when hovering or touching an icon */
    .hanging-side-menu .tab-item:hover .tab-label,
    .hanging-side-menu .tab-item:active .tab-label {
        display: block !important;
    }

    .mobile-spacer {
        height: 65px;
    }
}

</style>


<?php get_footer(); ?>


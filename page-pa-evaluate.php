<?php
/**
 * Vima Vidya — What is Insurance
 */

get_header();
?>

<!-- Floating Hanging Side Menu (Desktop & Mobile Adapted) -->
<nav class="hanging-side-menu" aria-label="Page Sections">
    <!-- What It Is -->
    <a href="#evaluate-pa-premium-logic" class="tab-item tab-blue">
        <svg viewBox="0 0 24 24" class="tab-icon"><path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
        <span class="tab-label">Premium Logic</span>
    </a>

    <!-- Why It Matters -->
    <a href="#evaluate-pa-actual-costs" class="tab-item tab-yellow">
        <svg viewBox="0 0 24 24" class="tab-icon"><path fill="currentColor" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
        <span class="tab-label">Real Costs</span>
    </a>

    <!-- Types -->
    <a href="#evaluate-pa-suitability" class="tab-item tab-red">
        <svg viewBox="0 0 24 24" class="tab-icon"><path fill="currentColor" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"/></svg>
        <span class="tab-label">Suitability</span>
    </a>

    <!-- Who Can Buy -->
    <a href="#evaluate-pa-choosing-policy" class="tab-item tab-purple">
        <svg viewBox="0 0 24 24" class="tab-icon"><path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
        <span class="tab-label">Choosing a Policy</span>
    </a>

    <!-- Impact -->
    <a href="#pa-evaluate-myths" class="tab-item tab-dark">
        <svg viewBox="0 0 24 24" class="tab-icon"><path fill="currentColor" d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/></svg>
        <span class="tab-label">Myths</span>
    </a>

    <!-- 10 Things -->
    <a href="#evaluate-pa-real-scenerios" class="tab-item tab-teal">
        <svg viewBox="0 0 24 24" class="tab-icon"><path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
        <span class="tab-label">Real Scenerios</span>
    </a>

    <!-- Back to Property -->
    <a href="<?php echo esc_url( home_url( '/personal-accident/' ) ); ?>" class="tab-item tab-gray">
        <svg viewBox="0 0 24 24" class="tab-icon"><path fill="currentColor" d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
        <span class="tab-label">Personal Accident</span>
    </a>

    <!-- Back to Awareness -->
    <a href="<?php echo esc_url( home_url( '/awareness/' ) ); ?>" class="tab-item tab-navy">
        <svg viewBox="0 0 24 24" class="tab-icon"><path fill="currentColor" d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
        <span class="tab-label">Awareness</span>
    </a>
</nav>

<main id="primary" class="awareness-single">

    <?php
    get_template_part(
        'template-parts/awareness/typesofinsurance/personalaccident/evaluate/evaluate_hero_pa'
    );
    ?>

    <?php
    get_template_part(
        'template-parts/awareness/typesofinsurance/personalaccident/evaluate/evaluate_premium_logic'
    );
    ?>

<?php
    get_template_part(
        'template-parts/awareness/typesofinsurance/personalaccident/evaluate/evaluate_what_pa_insurance_cost'
    );
    ?>

    <?php
    get_template_part(
        'template-parts/awareness/typesofinsurance/personalaccident/evaluate/evaluate_suitability'
    );
    ?>

    <?php
    get_template_part(
        'template-parts/awareness/typesofinsurance/personalaccident/evaluate/when_choose_policy'
    );
    ?>
    
    <?php
    get_template_part(
        'template-parts/awareness/typesofinsurance/personalaccident/evaluate/evaluate_myth_fact'
    );
    ?>

     <?php
    get_template_part(
        'template-parts/awareness/typesofinsurance/personalaccident/evaluate/evaluate_lived_experience'
    );
    ?>
     <?php
    get_template_part(
        'template-parts/awareness/typesofinsurance/personalaccident/evaluate/next-file'
    );
    ?>
</main>

<style>
/* Desktop Side Menu Styles */
.hanging-side-menu {
    position: fixed;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 4px;
    z-index: 999;
}

/* Base tab styles */
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
    box-shadow: -2px 2px 8px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    
    /* Peek tab out, reveal completely on hover */
    transform: translateX(96px);
    transition: transform 0.25s cubic-bezier(0.2, 0, 0.2, 1), filter 0.2s ease;
}

.hanging-side-menu .tab-item:hover {
    transform: translateX(0);
    filter: brightness(1.08);
}

/* Icon & label handling */
.hanging-side-menu .tab-icon {
    width: 18px;
    height: 18px;
    min-width: 18px;
    fill: currentColor;
}

.hanging-side-menu .tab-label {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Color Palette Matching */
.hanging-side-menu .tab-blue   { background-color: #199bf1; }
.hanging-side-menu .tab-yellow { background-color: #f7b731; color: #1c1c1c; }
.hanging-side-menu .tab-red    { background-color: #eb4d4b; }
.hanging-side-menu .tab-purple { background-color: #8854d0; }
.hanging-side-menu .tab-dark   { background-color: #2c3a47; }
.hanging-side-menu .tab-teal   { background-color: #0fb9b1; }
.hanging-side-menu .tab-gray   { background-color: #63768d; }
.hanging-side-menu .tab-navy   { background-color: #1b1464; }

/* Enable smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Mobile Responsive Transformation: Bottom Horizontal Scroll Bar */
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
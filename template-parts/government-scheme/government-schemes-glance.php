<?php
/**
 * =========================================================
 * VIMA VIDYA
 * GOVERNMENT SCHEMES — AT A GLANCE (11 SCHEMES INTERACTIVE)
 * =========================================================
 */

$all_schemes = [
    [
        'id'          => 'pmsby',
        'num'         => '1',
        'icon'        => '🛡️',
        'name'        => 'PMSBY',
        'full_name'   => 'Pradhan Mantri Suraksha Bima Yojana',
        'protects'    => 'Accidental Death & Disability',
        'premium'     => '₹20/yr',
        'cover'       => '₹2 Lakh',
        'for_whom'    => '18–70 yrs',
        'image'       => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&q=85&w=800',
        'link'        => '#pmsby-details'
    ],
    [
        'id'          => 'pmjjby',
        'num'         => '2',
        'icon'        => '🌙',
        'name'        => 'PMJJBY',
        'full_name'   => 'Pradhan Mantri Jeevan Jyoti Bima Yojana',
        'protects'    => 'Life Insurance (Any Cause)',
        'premium'     => '₹436/yr',
        'cover'       => '₹2 Lakh',
        'for_whom'    => '18–50 yrs',
        'image'       => 'https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?auto=format&fit=crop&q=85&w=800',
        'link'        => '#pmjjby-details'
    ],
    [
        'id'          => 'pmfby',
        'num'         => '3',
        'icon'        => '🌾',
        'name'        => 'PMFBY',
        'full_name'   => 'Pradhan Mantri Fasal Bima Yojana',
        'protects'    => 'Crop / Agricultural Loss',
        'premium'     => '2–5% premium (base is crop value)',
        'cover'       => 'Scale of Finance',
        'for_whom'    => 'All Farmers',
        'image'       => 'https://images.unsplash.com/photo-1595814432178-b14447477f01?auto=format&fit=crop&q=85&w=800',
        'link'        => '#pmfby-details'
    ],
    [
        'id'          => 'pmjay',
        'num'         => '4',
        'icon'        => '🏥',
        'name'        => 'PMJAY',
        'full_name'   => 'Ayushman Bharat PM-JAY',
        'protects'    => 'Cashless Hospital Treatment',
        'premium'     => 'FREE',
        'cover'       => '₹5 Lakh/yr',
        'for_whom'    => 'SECC families, + all 70+',
        'image'       => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=85&w=800',
        'link'        => '#pmjay-details'
    ],
    [
        'id'          => 'cashless-gi',
        'num'         => '5',
        'icon'        => '💳',
        'name'        => 'Cashless GI',
        'full_name'   => 'Cashless General Insurance',
        'protects'    => 'Private Cashless Health',
        'premium'     => 'Policy premium',
        'cover'       => '₹1L–₹1Cr',
        'for_whom'    => 'All policyholders',
        'image'       => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?auto=format&fit=crop&q=85&w=800',
        'link'        => '#cashless-gi-details'
    ],
    [
        'id'          => 'bharat-yatra',
        'num'         => '6',
        'icon'        => '✈️',
        'name'        => 'Bharat Yatra Suraksha',
        'full_name'   => 'Bharat Yatra Suraksha',
        'protects'    => 'Domestic Travel Accidents',
        'premium'     => 'Trip-based',
        'cover'       => '₹1L–₹1Cr AD',
        'for_whom'    => '18+ (child Day 1)',
        'image'       => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&q=85&w=800',
        'link'        => '#bharat-yatra-details'
    ],
    [
        'id'          => 'hit-and-run',
        'num'         => '7',
        'icon'        => '🚗',
        'name'        => 'Hit & Run Accidents',
        'full_name'   => 'Hit & Run Accident Compensation Scheme',
        'protects'    => 'Unidentified Vehicle Accident',
        'premium'     => 'FREE',
        'cover'       => '₹2L death / ₹50K hurt',
        'for_whom'    => 'Any victim',
        'image'       => 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&q=85&w=800',
        'link'        => '#hit-run-details'
    ],
    [
        'id'          => 'pm-rahat',
        'num'         => '8',
        'icon'        => '🚑',
        'name'        => 'PM RAHAT',
        'full_name'   => 'Pradhan Mantri RAHAT Scheme',
        'protects'    => 'Golden Hour Road Accident',
        'premium'     => 'FREE',
        'cover'       => '₹1.5L / 7 days',
        'for_whom'    => 'Any road victim',
        'image'       => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&q=85&w=800',
        'link'        => '#pm-rahat-details'
    ],
    [
        'id'          => 'aaby',
        'num'         => '9',
        'icon'        => '👷',
        'name'        => 'AABY',
        'full_name'   => 'Aam Aadmi Bima Yojana',
        'protects'    => 'Life+Disability Unorg. Sector',
        'premium'     => '₹200/yr',
        'cover'       => '₹30K–₹75K',
        'for_whom'    => '18–59, BPL/unorg.',
        'image'       => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=85&w=800',
        'link'        => '#aaby-details'
    ],
    [
        'id'          => 'apy',
        'num'         => '10',
        'icon'        => '🫙',
        'name'        => 'APY',
        'full_name'   => 'Atal Pension Yojana',
        'protects'    => 'Guaranteed Pension at 60',
        'premium'     => '₹42–₹1,454/mth',
        'cover'       => '₹1K–₹5K/mth',
        'for_whom'    => '18–40 yrs',
        'image'       => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=85&w=800',
        'link'        => '#apy-details'
    ],
    [
        'id'          => 'saral-jeevan',
        'num'         => '11',
        'icon'        => '📜',
        'name'        => 'Saral Jeevan',
        'full_name'   => 'Saral Jeevan Bima',
        'protects'    => 'Standard Term Life',
        'premium'     => 'Affordable',
        'cover'       => '₹5L–₹25L',
        'for_whom'    => '18–65 yrs',
        'image'       => 'https://images.unsplash.com/photo-1450133064473-71024230f91b?auto=format&fit=crop&q=85&w=800',
        'link'        => '#saral-jeevan-details'
    ]
];
?>

<section class="gov-glance-section" id="schemes-at-a-glance">
    <div class="gov-glance__container">

        <!-- SECTION HEADER -->
        <div class="gov-glance__header">
            <!-- <span class="gov-glance__eyebrow">Quick Directory</span> -->
            <h2 class="gov-glance__title">At A Glance: All 11 Schemes</h2>
            <p class="gov-glance__subtitle">Select any scheme from the list to view its complete specifications, protections, and coverage metrics.</p>
        </div>

        <!-- INTERACTIVE WRAPPER (BLUE BACKGROUND) -->
        <div class="gov-glance__interactive-box">
            
            <!-- LEFT COLUMN: SCHEMES BUTTON LIST -->
            <div class="gov-glance__nav-list">
                <?php foreach ($all_schemes as $index => $scheme) : ?>
                    <button 
                        type="button"
                        class="gov-glance__tab-btn <?php echo $index === 0 ? 'active' : ''; ?>" 
                        data-target="scheme-<?php echo esc_attr($scheme['id']); ?>"
                    >
                        <span class="tab-num"><?php echo esc_html($scheme['num']); ?></span>
                        <span class="tab-icon"><?php echo esc_html($scheme['icon']); ?></span>
                        <span class="tab-name"><?php echo esc_html($scheme['name']); ?></span>
                        <span class="tab-arrow">→</span>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- RIGHT COLUMN: DYNAMIC DETAILS PANEL -->
            <div class="gov-glance__content-panel">
                <?php foreach ($all_schemes as $index => $scheme) : ?>
                    <div 
                        class="gov-glance__pane <?php echo $index === 0 ? 'active' : ''; ?>" 
                        id="scheme-<?php echo esc_attr($scheme['id']); ?>"
                    >
                        <div class="gov-glance__pane-media">
                            <img src="<?php echo esc_url($scheme['image']); ?>" alt="<?php echo esc_attr($scheme['full_name']); ?>" />
                            <div class="gov-glance__pane-badge"><?php echo esc_html($scheme['icon']); ?> <?php echo esc_html($scheme['name']); ?></div>
                        </div>

                        <div class="gov-glance__pane-info">
                            <span class="pane-category">Scheme #<?php echo esc_html($scheme['num']); ?> Overview</span>
                            <h3 class="pane-title"><?php echo esc_html($scheme['full_name']); ?></h3>
                            
                            <div class="pane-specs-grid">
                                <div class="spec-item">
                                    <span class="spec-label">Protects Against</span>
                                    <strong class="spec-val"><?php echo esc_html($scheme['protects']); ?></strong>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Premium</span>
                                    <strong class="spec-val"><?php echo esc_html($scheme['premium']); ?></strong>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">Cover Amount</span>
                                    <strong class="spec-val"><?php echo esc_html($scheme['cover']); ?></strong>
                                </div>
                                <div class="spec-item">
                                    <span class="spec-label">For Whom</span>
                                    <strong class="spec-val"><?php echo esc_html($scheme['for_whom']); ?></strong>
                                </div>
                            </div>

                            <div class="pane-action-footer">
                                <a href="<?php echo esc_url($scheme['link']); ?>" class="pane-link-btn">
                                    Jump to Detailed Section <span>→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
</section>

<!-- LIGHTWEIGHT JAVASCRIPT FOR TAB SWITCHING -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.gov-glance__tab-btn');
    const panes = document.querySelectorAll('.gov-glance__pane');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');

            // Remove active states
            buttons.forEach(btn => btn.classList.remove('active'));
            panes.forEach(pane => pane.classList.remove('active'));

            // Add active state to clicked button and target pane
            this.classList.add('active');
            const targetPane = document.getElementById(targetId);
            if (targetPane) {
                targetPane.classList.add('active');
            }
        });
    });
});
</script>
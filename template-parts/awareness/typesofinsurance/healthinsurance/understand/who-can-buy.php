<?php
/**
 * ============================================================
 * VIMA VIDYA
 * HEALTH INSURANCE MASTER COMPONENT (Policy Type Tabs)
 * ============================================================
 */

$health_master_data = [

    'individual' => [
        'tab_title' => 'Individual Health Policy',
        'tab_icon' => '
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
        ',
        'card_title' => 'Individual Health Policy — Entry & Coverage Rules',
        'html_content' => '
            <p>
                Most individual health insurance policies in India are available to anyone between 18 and 65 years of age at entry. Many insurers now offer policies without an upper age limit at renewal, subject to loadings. Dependent children can typically be covered from 91 days of age up to 25 years under a family floater.
            </p>
            <p>
                Unlike Personal Accident Insurance, most health policies require a pre-insurance medical examination for applicants above 45–55 years of age. Below this threshold, coverage is typically based on your self-declared health at proposal.
            </p>
            <h4>Key Parameters</h4>
            <ul>
                <li><strong>Min Entry Age:</strong> 18 years</li>
                <li><strong>Max Entry Age:</strong> 65 years</li>
                <li><strong>Max Renewal Age:</strong> Lifetime (most)</li>
                <li><strong>Dependent Children:</strong> —</li>
            </ul>
        '
    ],

    'floater' => [
        'tab_title' => 'Family Floater',
        'tab_icon' => '
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
        ',
        'card_title' => 'Family Floater (Primary Insured) — Comprehensive Coverage',
        'html_content' => '
            <p>
                Most individual health insurance policies in India are available to anyone between 18 and 65 years of age at entry. Many insurers now offer policies without an upper age limit at renewal, subject to loadings. Dependent children can typically be covered from 91 days of age up to 25 years under a family floater.
            </p>
            <p>
                Unlike Personal Accident Insurance, most health policies require a pre-insurance medical examination for applicants above 45–55 years of age. Below this threshold, coverage is typically based on your self-declared health at proposal.
            </p>
            <h4>Key Parameters</h4>
            <ul>
                <li><strong>Min Entry Age:</strong> 18 years</li>
                <li><strong>Max Entry Age:</strong> 65 years</li>
                <li><strong>Max Renewal Age:</strong> Lifetime</li>
                <li><strong>Dependent Children:</strong> 91 days – 25 years</li>
            </ul>
        '
    ],

    'senior' => [
        'tab_title' => 'Senior Citizen Policy',
        'tab_icon' => '
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="8" r="4"/>
                <path d="M6 21v-2a6 6 0 0 1 12 0v2"/>
            </svg>
        ',
        'card_title' => 'Senior Citizen Policy — Protection in Later Years',
        'html_content' => '
            <p>
                Most individual health insurance policies in India are available to anyone between 18 and 65 years of age at entry. Many insurers now offer policies without an upper age limit at renewal, subject to loadings. Dependent children can typically be covered from 91 days of age up to 25 years under a family floater.
            </p>
            <p>
                Unlike Personal Accident Insurance, most health policies require a pre-insurance medical examination for applicants above 45–55 years of age. Below this threshold, coverage is typically based on your self-declared health at proposal.
            </p>
            <h4>Key Parameters</h4>
            <ul>
                <li><strong>Min Entry Age:</strong> 60 years</li>
                <li><strong>Max Entry Age:</strong> 80+ (varies)</li>
                <li><strong>Max Renewal Age:</strong> Lifetime</li>
                <li><strong>Dependent Children:</strong> —</li>
            </ul>
        '
    ],

    'critical' => [
        'tab_title' => 'Critical Illness Policy',
        'tab_icon' => '
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
        ',
        'card_title' => 'Critical Illness Policy — Specialized Coverage',
        'html_content' => '
            <p>
                Most individual health insurance policies in India are available to anyone between 18 and 65 years of age at entry. Many insurers now offer policies without an upper age limit at renewal, subject to loadings. Dependent children can typically be covered from 91 days of age up to 25 years under a family floater.
            </p>
            <p>
                Unlike Personal Accident Insurance, most health policies require a pre-insurance medical examination for applicants above 45–55 years of age. Below this threshold, coverage is typically based on your self-declared health at proposal.
            </p>
            <h4>Key Parameters</h4>
            <ul>
                <li><strong>Min Entry Age:</strong> 18 years</li>
                <li><strong>Max Entry Age:</strong> 65 years</li>
                <li><strong>Max Renewal Age:</strong> 70–75 years</li>
                <li><strong>Dependent Children:</strong> Some products include children</li>
            </ul>
        '
    ],

    'group' => [
        'tab_title' => 'Group Health (Employer)',
        'tab_icon' => '
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect width="18" height="12" x="3" y="4" rx="2"/>
                <path d="M12 16v4M8 20h8"/>
            </svg>
        ',
        'card_title' => 'Group Health (Employer) — Corporate & Workplace Covers',
        'html_content' => '
            <p>
                Most individual health insurance policies in India are available to anyone between 18 and 65 years of age at entry. Many insurers now offer policies without an upper age limit at renewal, subject to loadings. Dependent children can typically be covered from 91 days of age up to 25 years under a family floater.
            </p>
            <p>
                Unlike Personal Accident Insurance, most health policies require a pre-insurance medical examination for applicants above 45–55 years of age. Below this threshold, coverage is typically based on your self-declared health at proposal.
            </p>
            <h4>Key Parameters</h4>
            <ul>
                <li><strong>Min Entry Age:</strong> Per employment</li>
                <li><strong>Max Entry Age:</strong> Retirement age</li>
                <li><strong>Max Renewal Age:</strong> Tied to employment</li>
                <li><strong>Dependent Children:</strong> Policy-specific</li>
            </ul>
        '
    ],

    'ayushman' => [
        'tab_title' => 'Ayushman Bharat',
        'tab_icon' => '
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
        ',
        'card_title' => 'Ayushman Bharat — Government Healthcare Scheme',
        'html_content' => '
            <p>
                Most individual health insurance policies in India are available to anyone between 18 and 65 years of age at entry. Many insurers now offer policies without an upper age limit at renewal, subject to loadings. Dependent children can typically be covered from 91 days of age up to 25 years under a family floater.
            </p>
            <p>
                Unlike Personal Accident Insurance, most health policies require a pre-insurance medical examination for applicants above 45–55 years of age. Below this threshold, coverage is typically based on your self-declared health at proposal.
            </p>
            <h4>Key Parameters</h4>
            <ul>
                <li><strong>Min Entry Age:</strong> Any (family-based)</li>
                <li><strong>Max Entry Age:</strong> No limit</li>
                <li><strong>Max Renewal Age:</strong> Annual renewal</li>
                <li><strong>Dependent Children:</strong> Included in family</li>
            </ul>
        '
    ]

];
?>

<section class="health-insurance-master-section" id="health-who-can-buy">
    <div class="master-container">

        <!-- HEADER -->
        <header class="whocanbuy-section-header">
            <h2 class="section-title">
                Who Can Buy a Health Insurance Policy?
            </h2>
            <p class="section-lead">
                Most individual health insurance policies in India are available to anyone between 18 and 65 years of age at entry. Many insurers now offer policies without an upper age limit at renewal, subject to loadings. Dependent children can typically be covered from 91 days of age up to 25 years under a family floater.
            </p>

            <!-- CATEGORY TABS -->
            <div class="category-tabs" role="tablist" aria-label="Health insurance policy types">
                <?php
                $i = 0;
                foreach ($health_master_data as $key => $tab):
                ?>
                <button type="button" role="tab" class="tab-btn <?= $i === 0 ? 'is-active' : ''; ?>"
                    data-target="<?= esc_attr($key); ?>" aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>"
                    aria-controls="pane-<?= esc_attr($key); ?>" onclick="switchHealthTab('<?= esc_js($key); ?>')">
                    <span class="tab-icon">
                        <?= $tab['tab_icon']; ?>
                    </span>
                    <span class="tab-name">
                        <?= esc_html($tab['tab_title']); ?>
                    </span>
                </button>
                <?php
                    $i++;
                endforeach;
                ?>
            </div>
        </header>

        <!-- CONTENT GRID -->
        <div class="master-content-grid">
            <?php
            $i = 0;
            foreach ($health_master_data as $key => $tab):
            ?>
            <div id="pane-<?= esc_attr($key); ?>" class="health-content-panel <?= $i === 0 ? 'is-active' : ''; ?>"
                data-pane-id="<?= esc_attr($key); ?>" role="tabpanel" aria-hidden="<?= $i === 0 ? 'false' : 'true'; ?>">
                <div class="info-pane">
                    <h3 class="pane-title">
                        <?= esc_html($tab['card_title']); ?>
                    </h3>
                    <div class="pane-body-text">
                        <?= $tab['html_content']; ?>
                    </div>
                </div>
            </div>
            <?php
                $i++;
            endforeach;
            ?>

            <!-- PRE-EXISTING DISEASE WAITING PERIOD NOTICE (Appears inside or below the white box) -->
            <div class="waiting-period-alert">
                <span class="alert-icon">⚠️</span>
                <div class="alert-content">
                    <strong>The Pre-Existing Disease Waiting Period:</strong>
                    <p>
                        Most health policies impose a waiting period of 2–4 years for pre-existing diseases (illnesses you had before buying the policy). During this period, expenses related to those conditions will not be reimbursed. This is why buying young — when you are healthy — is critical. The earlier you buy, the sooner your waiting periods are behind you.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- TAB JAVASCRIPT -->
<script>
function switchHealthTab(targetKey) {
    const section = document.querySelector('.health-insurance-master-section');
    if (!section) return;

    // Buttons
    section.querySelectorAll('.tab-btn').forEach(function(button) {
        const isActive = button.getAttribute('data-target') === targetKey;
        button.classList.toggle('is-active', isActive);
        button.setAttribute('aria-selected', isActive ? 'true' : 'false');
    });

    // Content Panels
    section.querySelectorAll('.health-content-panel').forEach(function(panel) {
        const isActive = panel.getAttribute('data-pane-id') === targetKey;
        panel.classList.toggle('is-active', isActive);
        panel.setAttribute('aria-hidden', isActive ? 'false' : 'true');
    });
}
</script>
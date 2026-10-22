<?php
/**
 * =========================================================
 * VIMA VIDYA
 * INSURANCE AWARENESS — TYPES OF INSURANCE
 * =========================================================
 */

$section_tagline = 'INSURANCE AWARENESS';
$section_title   = 'Insurance — A risk management tool to protect you through the unexpected';
$section_text    = 'Insurance is a great risk management tool. It is an agreement between an insurer and an individual that helps to compensate for the economic loss suffered. Insurance policies cover various types of risks — when these risks occur, the insurer financially compensates for the loss suffered depending on the agreed terms. A quick look at various types of insurance policies for an individual and what they mean.';

$insurance_items = [
    [
        'number'      => '01',
        'slug'        => 'life',
        'title'       => 'Life Insurance',
        'short_title' => 'Life',
        'icon'        => '❤️',
        'url'         => get_permalink(get_page_by_path('life-insurance')),
        'image'       => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Financial security for your dependents — parents, spouse, children — when the primary earner is no longer around.',
        'why'         => [
            '<strong>Income replacement</strong> — Replaces lost income so family commitments — EMIs, school fees — can continue uninterrupted.',
            '<strong>Long-term goals</strong> — Protects children\'s education and retirement savings from being derailed by an untimely loss.',
            '<strong>Debt protection</strong> — Covers outstanding loans so debts don\'t become a burden on your family.'
        ],
        'benefits'    => [
            '<strong>Low cost, high cover</strong> — High coverage at very low premiums, especially when purchased young.',
            '<strong>Tax benefit</strong> — Deductions under Section 80C on premiums paid annually.',
            '<strong>Lock in early</strong> — The younger you buy, the lower the premium for life — rates only rise with age.'
        ],
        'footer'      => 'Mandatory in India? No — but essential if you have dependents. Term plan recommended.'
    ],
    [
        'number'      => '02',
        'slug'        => 'health',
        'title'       => 'Health Insurance',
        'short_title' => 'Health',
        'icon'        => '🏥',
        'url'         => get_permalink(get_page_by_path('health-insurance')),
        'image'       => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Protect yourself and your family from the rising cost of medical treatment.',
        'why'         => [
            '<strong>Hospital expenses</strong> — Helps manage large medical bills.',
            '<strong>Family protection</strong> — Provides financial support during medical emergencies.',
            '<strong>Cashless treatment</strong> — Eligible treatments can be covered through network hospitals.'
        ],
        'benefits'    => [
            '<strong>Hospitalisation cover</strong> — Coverage for eligible hospitalisation expenses.',
            '<strong>Pre and post treatment</strong> — Certain plans cover related medical expenses.',
            '<strong>Tax benefit</strong> — Eligible premiums may qualify for tax deductions.'
        ],
        'footer'      => 'Not mandatory for everyone, but strongly recommended for financial protection.'
    ],
    [
        'number'      => '03',
        'slug'        => 'accident',
        'title'       => 'Accident Insurance',
        'short_title' => 'Accident',
        'icon'        => '🚨',
        'url'         => home_url('/personal-accident/'),
        'image'       => 'https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Financial protection against the unexpected impact of accidental injuries.',
        'why'         => [
            '<strong>Accidental injury</strong> — Provides financial support following covered accidents.',
            '<strong>Income protection</strong> — Helps manage financial disruption caused by injury.',
            '<strong>Family support</strong> — Can provide benefits in case of accidental death.'
        ],
        'benefits'    => [
            '<strong>Accidental death benefit</strong> — Financial benefit to nominees under covered conditions.',
            '<strong>Disability benefit</strong> — Support for eligible permanent disabilities.',
            '<strong>Affordable protection</strong> — Accident cover can be relatively inexpensive.'
        ],
        'footer'      => 'Useful additional protection against unexpected accidents.'
    ],
    [
        'number'      => '04',
        'slug'        => 'motor',
        'title'       => 'Motor Insurance',
        'short_title' => 'Motor',
        'icon'        => '🚗',
        'url'         => get_permalink(get_page_by_path('motor-insurance')),
        'image'       => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Protection for your vehicle against covered accidents, damage and third-party liabilities.',
        'why'         => [
            '<strong>Vehicle protection</strong> — Helps cover eligible repair or replacement costs.',
            '<strong>Third-party liability</strong> — Provides protection against covered third-party liabilities.',
            '<strong>Accident support</strong> — Helps reduce the financial impact of road accidents.'
        ],
        'benefits'    => [
            '<strong>Own damage cover</strong> — Available under relevant comprehensive policies.',
            '<strong>Third-party cover</strong> — Protects against eligible third-party liabilities.',
            '<strong>Roadside assistance</strong> — Available as an add-on in some policies.'
        ],
        'footer'      => 'Third-party motor insurance is mandatory for vehicles on Indian roads.'
    ],

    [
        'number'      => '05',
        'slug'        => 'property',
        'title'       => 'Property Insurance',
        'short_title' => 'Property',
        'icon'        => '🏠',
        'url'         =>  home_url('/property-insurance/'),
        'image'       => 'https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?auto=format&fit=crop&w=1200&q=85',
        'description' => 'Protection for your home and property against covered risks and unexpected damage.',
        'why'         => [
            '<strong>Home protection</strong> — Helps protect against covered property losses.',
            '<strong>Asset protection</strong> — Provides financial support for eligible damage.',
            '<strong>Peace of mind</strong> — Reduces the financial burden of unexpected property events.'
        ],
        'benefits'    => [
            '<strong>Building cover</strong> — Protection for eligible structural damage.',
            '<strong>Contents cover</strong> — Can protect eligible household belongings.',
            '<strong>Optional extensions</strong> — Additional protection may be available depending on the policy.'
        ],
        'footer'      => 'Home insurance is generally not mandatory, but can protect a major financial asset.'
    ]
];
?>

<section class="insurance-showcase" id="insurance-showcase">
    <div class="insurance-showcase-container">

        <!-- SECTION HEADER -->
        <header class="insurance-section-header">
            <span class="insurance-section-tagline"><?php echo esc_html($section_tagline); ?></span>
            <h2><?php echo esc_html($section_title); ?></h2>
            <p><?php echo esc_html($section_text); ?></p>
        </header>

        <!-- CARDS GRID -->
        <div class="insurance-cards">
            <?php foreach ($insurance_items as $index => $item) : ?>
            <article class="insurance-card" data-insurance="<?php echo esc_attr($item['slug']); ?>"
                data-number="<?php echo esc_attr($item['number']); ?>"
                data-title="<?php echo esc_attr($item['title']); ?>"
                data-description="<?php echo esc_attr($item['description']); ?>"
                data-image="<?php echo esc_url($item['image']); ?>"
                data-footer="<?php echo esc_attr($item['footer']); ?>" data-url="<?php echo esc_url($item['url']); ?>"
                data-why="<?php echo esc_attr(wp_json_encode($item['why'])); ?>"
                data-benefits="<?php echo esc_attr(wp_json_encode($item['benefits'])); ?>" tabindex="0" role="button"
                aria-label="Learn more about <?php echo esc_attr($item['title']); ?>">

                <div class="insurance-image-wrap">
                    <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>"
                        loading="<?php echo $index === 0 ? 'eager' : 'lazy'; ?>">
                    <div class="insurance-image-overlay"></div>
                </div>

                <div class="insurance-floating-icon">
                    <span><?php echo esc_html($item['icon']); ?></span>
                </div>

                <div class="insurance-card-content">
                    <span class="insurance-number"><?php echo esc_html($item['number']); ?></span>
                    <span class="insurance-blue-line"></span>
                    <h3><?php echo esc_html($item['title']); ?></h3>
                    <p><?php echo esc_html($item['description']); ?></p>
                    <span class="insurance-explore">
                        Explore <span class="insurance-explore-arrow">→</span>
                    </span>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- MODAL POPUP -->
    <!-- =====================================================
     MODAL (SLIM VERTICAL TEXT STRIP — NO IMAGE)
====================================================== -->
    <div class="insurance-modal" id="insuranceModal" aria-hidden="true">
        <div class="insurance-modal-overlay"></div>

        <div class="insurance-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="insuranceModalTitle">
            <!-- CLOSE BUTTON -->
            <button type="button" class="insurance-modal-close" aria-label="Close modal">
                <span aria-hidden="true">&times;</span>
            </button>

            <!-- SLIM TEXT-ONLY SIDEBAR (NO PHOTO) -->
            <div class="insurance-modal-side-bar">
                <span class="insurance-modal-vertical-title" id="insuranceModalVerticalTitle"></span>
            </div>

            <!-- EXPANDED CONTENT PANE (NO SCROLL) -->
            <div class="insurance-modal-content">
                <div class="insurance-modal-heading">
                    <span class="insurance-modal-number" id="insuranceModalNumber"></span>
                    <h2 id="insuranceModalTitle"></h2>
                    <p id="insuranceModalDescription"></p>
                </div>

                <div class="insurance-modal-grid">
                    <div class="insurance-modal-box">
                        <span class="insurance-modal-pill">Why it matters</span>
                        <ul id="insuranceModalWhy"></ul>
                    </div>

                    <div class="insurance-modal-box">
                        <span class="insurance-modal-pill">Key benefits</span>
                        <ul id="insuranceModalBenefits"></ul>
                    </div>

                    <div class="insurance-modal-bigger-picture">
                        <strong>The Bigger Picture</strong>
                        <p>Insurance isn't simply about paying for unexpected events — it's about protecting the people,
                            assets and plans that matter to you.</p>
                    </div>
                </div>

                <div class="insurance-modal-footer">
                    <div class="insurance-modal-footer-text">
                        <span class="footer-check">&#10003;</span>
                        <p id="insuranceModalFooter"></p>
                    </div>

                    <div class="insurance-modal-actions">
                        <button type="button" class="insurance-modal-know-more" id="insuranceModalKnowMore">
                            Know More <span>&rarr;</span>
                        </button>
                        <button type="button" class="insurance-modal-done">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.insurance-card');
    const modal = document.getElementById('insuranceModal');

    if (!cards.length || !modal) return;

    const modalVerticalTitle = document.getElementById('insuranceModalVerticalTitle');
    const modalNumber        = document.getElementById('insuranceModalNumber');
    const modalTitle         = document.getElementById('insuranceModalTitle');
    const modalDescription   = document.getElementById('insuranceModalDescription');
    const modalWhy           = document.getElementById('insuranceModalWhy');
    const modalBenefits      = document.getElementById('insuranceModalBenefits');
    const modalFooter        = document.getElementById('insuranceModalFooter');
    const modalKnowMore      = document.getElementById('insuranceModalKnowMore');
    const closeButton        = modal.querySelector('.insurance-modal-close');
    const doneButton         = modal.querySelector('.insurance-modal-done');
    const overlay            = modal.querySelector('.insurance-modal-overlay');

    function openModal(card) {
        const title       = card.dataset.title || '';
        const number      = card.dataset.number || '';
        const description = card.dataset.description || '';
        const footer      = card.dataset.footer || '';
        const url         = card.dataset.url || '';

        let why = [];
        let benefits = [];

        try {
            why = JSON.parse(card.dataset.why);
            benefits = JSON.parse(card.dataset.benefits);
        } catch (error) {
            console.error('Insurance modal JSON parse error:', error);
        }

        if (modalVerticalTitle) {
           modalVerticalTitle.textContent = title;
        }

        modalNumber.textContent      = number;
        modalTitle.textContent       = title;
        modalDescription.textContent = description;
        modalFooter.textContent      = footer;

        modalKnowMore.onclick = function() {
            if (url) window.location.href = url;
        };

        modalWhy.innerHTML = '';
        why.forEach(function(item) {
            const li = document.createElement('li');
            li.innerHTML = item;
            modalWhy.appendChild(li);
        });

        modalBenefits.innerHTML = '';
        benefits.forEach(function(item) {
            const li = document.createElement('li');
            li.innerHTML = item;
            modalBenefits.appendChild(li);
        });

        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('insurance-modal-open');

        setTimeout(function() {
            closeButton.focus();
        }, 100);
    }

    function closeModal() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('insurance-modal-open');
    }

    cards.forEach(function(card) {
        card.addEventListener('click', function() {
            openModal(this);
        });

        card.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                openModal(this);
            }
        });
    });

    closeButton.addEventListener('click', closeModal);
    doneButton.addEventListener('click', closeModal);
    overlay.addEventListener('click', closeModal);

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modal.classList.contains('is-open')) {
            closeModal();
        }
    });
});
</script>
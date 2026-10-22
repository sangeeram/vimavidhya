<?php
// Claims Process Accordion Content Array
$claims_steps = [
    [
        'step_number' => '01',
        'title'       => 'Notify immediately',
        'summary'     => 'Call your insurer\'s helpline and send written notification by email within 24–72 hours.',
        'callout'     => 'KEEP THE CLAIM REFERENCE NUMBER',
        'details'     => 'Most policies require notification within this window — a late report can be grounds for rejection.'
    ],
    [
        'step_number' => '02',
        'title'       => 'Protect and document',
        'summary'     => 'Move valuable contents to safety and document everything thoroughly before clearing.',
        'callout'     => 'DO NOT THROW AWAY DAMAGED ITEMS WITHOUT APPROVAL',
        'details'     => 'Photograph and video everything systematically, room by room, item by item.— the surveyor needs to assess them.'
    ],
    [
        'step_number' => '03',
        'title'       => 'The Surveyor visit',
        'summary'     => 'The insurer appoints a Licensed Surveyor (regulated by IRDAI) to inspect the damage.',
        'callout'     => 'HAVE YOUR STOCK & PURCHASE INVOICES READY',
        'details'     => 'You have the right to be present during inspection. For business claims, have your stock registers, purchase invoices, and sales records ready for the surveyor. Cooperate fully and ensure the surveyor sees all damage. If you disagree with the surveyor\'s assessment, you may appoint your own Loss Assessor at your cost.'
    ],
    [
        'step_number' => '04',
        'title'       => 'Settlement Offer',
        'summary'     => 'After survey and document verification, the insurer issues a Settlement Offer.',
        'callout'     => 'REVIEW DEDUCTIONS & EXCLUSIONS CAREFULLY',
        'details'     => 'Understand what is being paid, what deductions are being made (depreciation, excess, average clause), and why any items are excluded.'
    ],
    [
        'step_number' => '05',
        'title'       => 'Rebuilding / Restocking',
        'summary'     => 'For structural damage, the insurer may pay in tranches as reconstruction progresses.',
        'callout'     => 'DEBRIS REMOVAL & ARCHITECTS\' FEES ARE OFTEN CLAIMABLE',
        'details'     => 'For stock loss, keep all purchase invoices for replacement goods. Debris Removal Costs and Architects Fees are often claimable.'
    ]
];
?>

<section class="claims-section" id="claims-process">
    <div class="claims-section__container">
        <!-- Section Header -->
        <header class="claims-section__header">
            <!-- <span class="claims-section__subtitle">CLAIMS</span> -->
            <h2 class="claims-section__title">Step-by-Step Claims Process</h2>
            <p class="claims-section__description">
                A property insurance claim, if not reported and documented correctly, can be delayed or rejected. Here is what you and your family — and business — must know:
            </p>
        </header>

        <!-- Vertical Accordion -->
        <div class="claims-accordion">
            <?php foreach ($claims_steps as $index => $step): ?>
                <div class="claims-accordion__item <?php echo $index === 0 ? 'is-active' : ''; ?>">
                    <!-- Accordion Header / Trigger -->
                    <button class="claims-accordion__header" type="button" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                        <div class="claims-accordion__header-content">
                            <span class="claims-accordion__badge"><?php echo htmlspecialchars($step['step_number']); ?></span>
                            <div class="claims-accordion__header-text">
                                <h3 class="claims-accordion__title"><?php echo htmlspecialchars($step['title']); ?></h3>
                                <p class="claims-accordion__summary"><?php echo htmlspecialchars($step['summary']); ?></p>
                            </div>
                        </div>
                        <span class="claims-accordion__icon" aria-hidden="true">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span>
                    </button>

                    <!-- Accordion Body Content -->
                    <div class="claims-accordion__body">
                        <div class="claims-accordion__inner">
                            <?php if (!empty($step['callout'])): ?>
                                <div class="claims-accordion__callout">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                        <line x1="4" y1="22" x2="4" y2="15"></line>
                                    </svg>
                                    <span><?php echo htmlspecialchars($step['callout']); ?></span>
                                </div>
                            <?php endif; ?>
                            <p class="claims-accordion__text">
                                <?php echo htmlspecialchars($step['details']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
    const accordionItems = document.querySelectorAll('.claims-accordion__item');

    accordionItems.forEach(item => {
        const header = item.querySelector('.claims-accordion__header');
        const body = item.querySelector('.claims-accordion__body');

        // Set initial state for active item
        if (item.classList.contains('is-active')) {
            body.style.maxHeight = body.scrollHeight + 'px';
        }

        header.addEventListener('click', () => {
            const isActive = item.classList.contains('is-active');

            // Close all other accordion items (Single-open mode)
            accordionItems.forEach(otherItem => {
                otherItem.classList.remove('is-active');
                otherItem.querySelector('.claims-accordion__header').setAttribute('aria-expanded', 'false');
                otherItem.querySelector('.claims-accordion__body').style.maxHeight = null;
            });

            // Toggle selected item
            if (!isActive) {
                item.classList.add('is-active');
                header.setAttribute('aria-expanded', 'true');
                body.style.maxHeight = body.scrollHeight + 'px';
            }
        });
    });
});
</script>
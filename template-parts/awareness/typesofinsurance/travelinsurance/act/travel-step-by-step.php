<?php
/**
 * Claims Process Accordion Content Array (Travel Insurance - 7 Steps)
 */
$claims_steps = [
    [
        'step_number' => '01',
        'title'       => 'Call 24/7 Assistance for Medical Emergencies',
        'summary'     => 'Call the 24/7 Assistance helpline immediately for any medical emergency abroad — before paying anything at the hospital.',
        'callout'     => 'ARRANGE CASHLESS PRE-AUTHORISATION',
        'details'     => 'Call the 24/7 Assistance helpline immediately for any medical emergency abroad — before paying anything at the hospital. Cashless pre-authorisation must be arranged before the bill is presented.'
    ],
    [
        'step_number' => '02',
        'title'       => 'File Property Irregularity Report (PIR) for Baggage Loss',
        'summary'     => 'File a PIR at the airline\'s baggage desk before leaving the airport terminal.',
        'callout'     => 'MANDATORY FOR AIRLINE BAGGAGE CLAIMS',
        'details'     => 'For baggage loss at an airport: file a Property Irregularity Report (PIR) at the airline\'s baggage desk before leaving the airport terminal. Without a PIR, the insurer will not process a baggage loss claim.'
    ],
    [
        'step_number' => '03',
        'title'       => 'File a Police Report / FIR for Theft',
        'summary'     => 'File a police report / FIR at the nearest police station as soon as possible for any theft on a train or road journey.',
        'callout'     => 'REQUIRED FOR THEFT-RELATED CLAIMS',
        'details'     => 'For theft on a train or road journey: file a police report / FIR at the nearest police station as soon as possible. Mandatory documentation for any theft-related claim.'
    ],
    [
        'step_number' => '04',
        'title'       => 'Preserve Booking & Cancellation Proofs',
        'summary'     => 'Preserve all original booking invoices and cancellation confirmations along with proof of covered reason.',
        'callout'     => 'GATHER MEDICAL OR OFFICIAL NOTIFICATIONS',
        'details'     => 'For trip cancellation: preserve all original booking invoices and cancellation confirmations. Gather the proof of covered reason — medical certificate, death certificate, official disaster notification.'
    ],
    [
        'step_number' => '05',
        'title'       => 'Report the Claim Within Policy Timelines',
        'summary'     => 'Report the claim to the insurer within the timeframe in your policy — typically 24–72 hours for medical events; 7–30 days for other events.',
        'callout'     => 'AVOID LATE INTIMATION REJECTIONS',
        'details'     => 'Report the claim to the insurer within the timeframe in your policy — typically 24–72 hours for medical events; 7–30 days for other events. Late intimation can delay or reduce the settlement.'
    ],
    [
        'step_number' => '06',
        'title'       => 'Preserve Original Bills, Receipts, and Reports',
        'summary'     => 'Preserve all original bills, receipts, and reports for reimbursement claims.',
        'callout'     => 'ORIGINALS REQUIRED — PHOTOCOPIES INSUFFICIENT',
        'details'     => 'Preserve all original bills, receipts, and reports. For reimbursement claims, the insurer requires original documentation — photocopies alone are insufficient.'
    ],
    [
        'step_number' => '07',
        'title'       => 'Submit Complete Documentation & Follow Up',
        'summary'     => 'Submit your complete claim packet and maintain regular follow-up with the insurer for settlement.',
        'callout'     => 'TRACK YOUR CLAIM REFERENCE',
        'details'     => 'Ensure all mandatory forms, bills, PIR/FIR reports, and medical certificates are submitted together. Keep your claim reference number handy for all communications.'
    ]
];
?>

<section class="claims-section" id="claims-process">
    <div class="claims-section__container">
        <!-- Section Header -->
        <header class="claims-section__header">
            <h2 class="claims-section__title">Step-by-Step Claims Process</h2>
            <p class="claims-section__description">
                A travel insurance claim, if not reported and documented correctly, can be delayed or rejected. Here is what you and your family must know before departure — not when the event has already happened.
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
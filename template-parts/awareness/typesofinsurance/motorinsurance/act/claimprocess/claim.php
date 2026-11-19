<?php
// Motor Insurance Claims Process Accordion Content Array
$claims_steps = [
    [
        'step_number' => '01',
        'title'       => 'Ensure Safety First',
        'summary'     => 'Move to safety; switch on hazard lights; attend to any injured persons before anything else.',
        'callout'     => 'HUMAN SAFETY COMES FIRST',
        'details'     => 'Human safety is the first obligation — not the vehicle or the documentation. Move to safety, switch on hazard lights, and immediately attend to any injured persons before dealing with the vehicle or documentation.'
    ],
    [
        'step_number' => '02',
        'title'       => 'Photograph Everything',
        'summary'     => 'Photograph and video the vehicle damage, accident scene, third-party vehicles, road conditions, and skid marks.',
        'callout'     => 'PRIMARY EVIDENCE',
        'details'     => 'Photographs are your primary evidence. Take clear photos and videos of the vehicle damage, accident scene, third-party vehicles involved, road conditions, and skid marks before anything is moved or cleaned up.'
    ],
    [
        'step_number' => '03',
        'title'       => 'File FIR When Required',
        'summary'     => 'For third-party injury/death, theft, or major accident: file FIR at nearest police station within 24 hours.',
        'callout'     => 'MANDATORY FOR THIRDPARTY & THEFT',
        'details'     => 'For third-party injury/death, theft, or major accident, file an FIR at the nearest police station within 24 hours. For own-damage only with no third party, FIR may not be mandatory — verify with your insurer.'
    ],
    [
        'step_number' => '04',
        'title'       => 'Intimate the Insurer Immediately',
        'summary'     => 'Call your insurer\'s 24x7 claims helpline immediately — most policies require intimation within 24–48 hours.',
        'callout'     => 'TIMELY INTIMATION REQUIRED',
        'details'     => 'Call your insurer\'s 24x7 claims helpline immediately. Most policies require intimation within 24–48 hours. Delayed intimation gives insurers legitimate grounds to scrutinise your claim; always call first.'
    ],
    [
        'step_number' => '05',
        'title'       => 'Do Not Move the Vehicle Before Survey',
        'summary'     => 'Do not take the vehicle to a garage before the insurer\'s surveyor has inspected it (unless an immediate road safety hazard).',
        'callout'     => 'SURVEYOR INSPECTION CRITICAL',
        'details'     => 'The surveyor\'s inspection is the basis for settlement. Moving and repairing the vehicle before survey weakens your claim evidence. Do not take the vehicle to a garage before the insurer\'s surveyor has inspected it unless it poses an immediate road safety hazard.'
    ],
    [
        'step_number' => '06',
        'title'       => 'Cashless or Reimbursement',
        'summary'     => 'Network garages offer cashless settlement directly. Non-network requires reimbursement.',
        'callout'     => 'CHOOSE YOUR REPAIR ROUTE',
        'details'     => 'At network garages, you get cashless service where the insurer pays the garage directly. At non-network garages, it is reimbursement where you pay upfront and claim back. Cashless is faster, involves no upfront payment, and avoids the documentation burden of reimbursement claims.'
    ],
    [
        'step_number' => '07',
        'title'       => 'Submit Documents',
        'summary'     => 'Submit claim form, DL copy, RC copy, FIR copy (if applicable), repair estimate, and photographs.',
        'callout'     => 'AVOID DOCUMENTATION DELAYS',
        'details'     => 'Submit the completed claim form, driving licence copy, RC copy, FIR copy (if applicable), repair estimate, and photographs. Missing documents are the most common cause of claim delays — have digital copies of all key documents ready in advance.'
    ],
    [
        'step_number' => '08',
        'title'       => 'Settlement',
        'summary'     => 'OD claims are settled after repair or bills. Theft claims are settled after a 90-day waiting period if unrecovered.',
        'callout'     => 'IRDAI 30-DAY MANDATE',
        'details'     => 'Own Damage (OD) is settled after repair (cashless) or bills (reimbursement). Theft claims are settled after a 90-day waiting period if the vehicle remains unrecovered. IRDAI mandates claim settlement within 30 days of receiving all required documents.'
    ]
];
?>

<section class="motor-claims-section" id="claims-process">
    <div class="motor-claims-section__container">
        <!-- Section Header -->
        <header class="motor-claims-section__header">
            <!-- <span class="motor-claims-section__subtitle">CLAIMS</span> -->
             <h2 class="sec-title">What You Can Claim — A Complete Reference</h2>
            <h3 class="coverage-title">The Claims Process — Step by Step</h3>
           
            <p class="motor-claims-section__description">
                A motor insurance claim, if not reported and documented correctly, can be settled for significantly less than the actual loss — or rejected entirely. Here is what you and your family must know:
            </p>
        </header>

        <!-- Vertical Accordion -->
        <div class="motor-claims-accordion">
            <!-- Continuous Connecting Line -->
            <div class="motor-claims-accordion__line"></div>

            <?php foreach ($claims_steps as $index => $step): ?>
                <div class="motor-claims-accordion__item <?php echo $index === 0 ? 'is-active' : ''; ?>">
                    <!-- Accordion Header / Trigger -->
                    <button class="motor-claims-accordion__header" type="button" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                        <div class="motor-claims-accordion__header-content">
                            <span class="motor-claims-accordion__badge"><?php echo htmlspecialchars($step['step_number']); ?></span>
                            <div class="motor-claims-accordion__header-text">
                                <h3 class="motor-claims-accordion__title"><?php echo htmlspecialchars($step['title']); ?></h3>
                                <p class="motor-claims-accordion__summary"><?php echo htmlspecialchars($step['summary']); ?></p>
                            </div>
                        </div>
                        <span class="motor-claims-accordion__icon" aria-hidden="true">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span>
                    </button>

                    <!-- Accordion Body Content -->
                    <div class="motor-claims-accordion__body">
                        <div class="motor-claims-accordion__inner">
                            <?php if (!empty($step['callout'])): ?>
                                <div class="motor-claims-accordion__callout">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                        <line x1="4" y1="22" x2="4" y2="15"></line>
                                    </svg>
                                    <span><?php echo htmlspecialchars($step['callout']); ?></span>
                                </div>
                            <?php endif; ?>
                            <p class="motor-claims-accordion__text">
                                <?php echo htmlspecialchars($step['details']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Footer Key Takeaway Box -->
        <div class="motor-claims-section__footer-callout">
            <span class="callout-icon">✅</span>
            <p class="callout-text">
                <strong>Key Takeaway —</strong> IRDAI mandates that insurers settle claims within 30 days of receiving all required documents. If your claim is not settled within this period, file a complaint at the IRDAI Bima Bharosa portal (<a href="https://bimabharosa.irdai.gov.in" target="_blank" rel="noopener noreferrer">bimabharosa.irdai.gov.in</a>) or approach the nearest Insurance Ombudsman office (<a href="https://ombudsman.irdai.gov.in" target="_blank" rel="noopener noreferrer">ombudsman.irdai.gov.in</a>).
            </p>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const accordionItems = document.querySelectorAll('.motor-claims-accordion__item');

        accordionItems.forEach(item => {
            const header = item.querySelector('.motor-claims-accordion__header');
            const body = item.querySelector('.motor-claims-accordion__body');

            // Set initial state for active item
            if (item.classList.contains('is-active')) {
                body.style.maxHeight = body.scrollHeight + 'px';
            }

            header.addEventListener('click', () => {
                const isActive = item.classList.contains('is-active');

                // Close all other accordion items (Single-open mode)
                accordionItems.forEach(otherItem => {
                    otherItem.classList.remove('is-active');
                    otherItem.querySelector('.motor-claims-accordion__header').setAttribute('aria-expanded', 'false');
                    otherItem.querySelector('.motor-claims-accordion__body').style.maxHeight = null;
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
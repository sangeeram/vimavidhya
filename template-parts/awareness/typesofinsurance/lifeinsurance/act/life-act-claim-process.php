<?php
/**
 * Life Insurance — Claims Process Accordion Template
 */

$claims_steps = [
    [
        'step_number' => '01',
        'title'       => 'Step 1: Intimate the Insurer Immediately',
        'summary'     => 'Call the insurer\'s 24x7 claims helpline and register the death intimation — this starts the claim clock',
        'callout'     => 'TIMELY INTIMATION REQUIRED',
        'details'     => 'Call the insurer\'s 24x7 claims helpline and register the death intimation — this starts the claim clock. Most insurers require intimation within 90 days of death; earlier is always better.'
    ],
    [
        'step_number' => '02',
        'title'       => 'Step 2: Gather Required Documents',
        'summary'     => 'Death certificate, original policy document, nominee\'s identity proof and address proof, claimant\'s bank account details (cancelled cheque)',
        'callout'     => 'MANDATORY VERIFICATION',
        'details'     => 'Death certificate, original policy document, nominee\'s identity proof and address proof, claimant\'s bank account details (cancelled cheque). Death certificate must be an original or certified copy from the relevant municipal authority.'
    ],
    [
        'step_number' => '03',
        'title'       => 'Step 3: Complete the Claim Form',
        'summary'     => 'Fill the claim form available on the insurer\'s website or obtained from the nearest branch',
        'callout'     => 'ACCURATE DOCUMENTATION',
        'details'     => 'Fill the claim form available on the insurer\'s website or obtained from the nearest branch. Have a witness sign the claim form; keep a copy of every document submitted.'
    ],
    [
        'step_number' => '04',
        'title'       => 'Step 4: Submit to Insurer',
        'summary'     => 'Submit claim form and all documents to the insurer\'s nearest branch or through their online portal',
        'callout'     => 'GET ACKNOWLEDGEMENT',
        'details'     => 'Submit claim form and all documents to the insurer\'s nearest branch or through their online portal. Request a written acknowledgement with a reference number for every document submitted.'
    ],
    [
        'step_number' => '05',
        'title'       => 'Step 5: Additional Investigation (if any)',
        'summary'     => 'For claims within 3 years of policy issue, the insurer may investigate — cooperate fully and provide requested documents promptly',
        'callout'     => '3-YEAR CONTESTABILITY WINDOW',
        'details'     => 'For claims within 3 years of policy issue, the insurer may investigate — cooperate fully and provide requested documents promptly. Incontestability after 3 years means post-3-year claims cannot be contested for non-disclosure unless fraud.'
    ],
    [
        'step_number' => '06',
        'title'       => 'Step 6: Claim Settlement',
        'summary'     => 'IRDAI mandates settlement within 30 days of receiving all required documents (90 days if investigation required)',
        'callout'     => 'IRDAI MANDATED TIMELINE',
        'details'     => 'IRDAI mandates settlement within 30 days of receiving all required documents (90 days if investigation required). If settlement is delayed beyond the mandated period, the insurer must pay interest at 2% above the bank rate.'
    ]
];
?>

<section class="life-claims-section" id="claims-process">
    <div class="life-claims-section__container">
        <!-- Section Header -->
        <header class="life-claims-section__header">
            <h2 class="sec-title">The Claims Process — What Your Family Must Do</h2>
            <h3 class="coverage-title">Claims Procedure Step by Step</h3>
            <p class="life-claims-section__description">
                A life insurance claim is the moment the policy fulfils its purpose. When you are gone, your nominee must know exactly what to do. Ensure they read this section.
            </p>
        </header>

        <!-- Vertical Accordion -->
        <div class="life-claims-accordion">
            <!-- Continuous Connecting Line -->
            <div class="life-claims-accordion__line"></div>

            <?php foreach ($claims_steps as $index => $step): ?>
                <div class="life-claims-accordion__item <?php echo $index === 0 ? 'is-active' : ''; ?>">
                    <!-- Accordion Header / Trigger -->
                    <button class="life-claims-accordion__header" type="button" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                        <div class="life-claims-accordion__header-content">
                            <span class="life-claims-accordion__badge"><?php echo htmlspecialchars($step['step_number']); ?></span>
                            <div class="life-claims-accordion__header-text">
                                <h3 class="life-claims-accordion__title"><?php echo htmlspecialchars($step['title']); ?></h3>
                                <p class="life-claims-accordion__summary"><?php echo htmlspecialchars($step['summary']); ?></p>
                            </div>
                        </div>
                        <span class="life-claims-accordion__icon" aria-hidden="true">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span>
                    </button>

                    <!-- Accordion Body Content -->
                    <div class="life-claims-accordion__body">
                        <div class="life-claims-accordion__inner">
                            <?php if (!empty($step['callout'])): ?>
                                <div class="life-claims-accordion__callout">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                                        <line x1="4" y1="22" x2="4" y2="15"></line>
                                    </svg>
                                    <span><?php echo htmlspecialchars($step['callout']); ?></span>
                                </div>
                            <?php endif; ?>
                            <p class="life-claims-accordion__text">
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
        const accordionItems = document.querySelectorAll('.life-claims-accordion__item');

        accordionItems.forEach(item => {
            const header = item.querySelector('.life-claims-accordion__header');
            const body = item.querySelector('.life-claims-accordion__body');

            if (item.classList.contains('is-active')) {
                body.style.maxHeight = body.scrollHeight + 'px';
            }

            header.addEventListener('click', () => {
                const isActive = item.classList.contains('is-active');

                accordionItems.forEach(otherItem => {
                    otherItem.classList.remove('is-active');
                    otherItem.querySelector('.life-claims-accordion__header').setAttribute('aria-expanded', 'false');
                    otherItem.querySelector('.life-claims-accordion__body').style.maxHeight = null;
                });

                if (!isActive) {
                    item.classList.add('is-active');
                    header.setAttribute('aria-expanded', 'true');
                    body.style.maxHeight = body.scrollHeight + 'px';
                }
            });
        });
    });
</script>
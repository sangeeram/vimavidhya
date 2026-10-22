<?php
// Personal Accident Process Accordion Content Array
$claims_steps = [
    [
        'step_number' => '01',
        'title'       => 'Report the Claim',
        'summary'     => 'Inform your insurer within the time specified in your policy (typically 30–90 days of the event).',
        'callout'     => 'NOTIFY WITHIN SPECIFIED TIMEFRAME',
        'details'     => 'Report the claim to your insurer within the time specified in your policy (typically 30–90 days of the event). Inform them even if the full extent of injury is not yet determined.'
    ],
    [
        'step_number' => '02',
        'title'       => 'File an FIR',
        'summary'     => 'File an FIR with the police for road accidents, assault, or any accident in a public place.',
        'callout'     => 'MANDATORY DOCUMENTATION',
        'details'     => 'File an FIR with the police for road accidents, assault, or any accident in a public place. Insurers require this documentation.'
    ],
    [
        'step_number' => '03',
        'title'       => 'Preserve Medical Records',
        'summary'     => 'Keep all hospitalization records, doctor certificates, discharge summaries, and lab reports safe.',
        'callout'     => 'KEEP ALL MEDICAL PAPERS',
        'details'     => 'Preserve all medical records — hospitalization records, doctor certificates, discharge summaries, and lab reports.'
    ],
    [
        'step_number' => '04',
        'title'       => 'Obtain Disability Certificate',
        'summary'     => 'For disability claims, obtain a certificate from a government authorized medical officer.',
        'callout'     => 'CHECK QUALIFYING CRITERIA',
        'details'     => 'For disability claims, obtain a disability certificate from a government authorized medical officer. The policy schedule will specify the qualifying criteria.'
    ],
    [
        'step_number' => '05',
        'title'       => 'Appoint a Nominee Correctly',
        'summary'     => 'Ensure your nominee\'s details are accurate and updated to prevent settlement delays.',
        'callout'     => 'AVOID NOMINATION MISMATCH',
        'details'     => 'Appoint a Nominee correctly. Ensure your nominee\'s details are accurate and updated. Nomination mismatch is a leading cause of claim settlement delays.'
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
                A PA insurance claim, if not reported and documented correctly, can be delayed or rejected. Here is what you and your family must know:
            </p>
        </header>

        <!-- Vertical Accordion -->
        <div class="claims-accordion">
            <!-- Continuous Connecting Line -->
            <div class="claims-accordion__line"></div>

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
<?php
// Section Image URL
$section_image_url = 'https://images.unsplash.com/photo-1542038784456-1ea8e935640e?auto=format&fit=crop&q=80&w=1000';

$visual_sequence_steps = [
    [
        'title'       => 'EVERYDAY LIFE',
        'description' => 'We go about our lives — working, travelling, raising families — largely assuming things will remain stable.',
        'active'      => true,
    ],
    [
        'title'       => 'RISK',
        'description' => 'At any moment, something unexpected can disrupt stability — illness, accident, property damage, income loss.',
        'active'      => false,
    ],
    [
        'title'       => 'FINANCIAL IMPACT',
        'description' => 'Unexpected events often come with significant financial cost. Without preparation, this can devastate savings.',
        'active'      => false,
    ],
    [
        'title'       => 'RISK MANAGEMENT',
        'description' => 'By identifying risks in advance, we can take steps to reduce, avoid, or transfer the financial impact.',
        'active'      => false,
    ],
    [
        'title'       => 'INSURANCE',
        'description' => 'Insurance is a formal mechanism to transfer financial risk — pay a premium, and a loss is covered by the insurer.',
        'active'      => false,
    ],
];
?>

<section class="visual-sequence">
    <div class="visual-sequence__container">
        
        <!-- Left Content Column -->
        <div class="visual-sequence__left">
            <span class="visual-sequence__tagline">VISUAL SEQUENCE</span>
            <h2 class="visual-sequence__title">What is insurance?</h2>
            <div class="visual-sequence__image-wrapper">
                <img src="<?php echo htmlspecialchars($section_image_url); ?>" alt="Family celebrating together" class="visual-sequence__image">
            </div>
        </div>

        <!-- Right White Cards Column -->
        <div class="visual-sequence__right">
            <div class="visual-sequence__cards">
                <?php foreach ($visual_sequence_steps as $step): ?>
                    <div class="visual-sequence__card <?php echo $step['active'] ? 'is-active' : ''; ?>">
                        <div class="visual-sequence__marker-container">
                            <span class="visual-sequence__marker"></span>
                            <span class="visual-sequence__line"></span>
                        </div>
                        <div class="visual-sequence__content">
                            <h3 class="visual-sequence__step-title"><?php echo htmlspecialchars($step['title']); ?></h3>
                            <?php if (!empty($step['description'])): ?>
                                <p class="visual-sequence__step-desc"><?php echo htmlspecialchars($step['description']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.visual-sequence__card');

    cards.forEach(card => {
        card.addEventListener('click', () => {
            // Collapse all other cards
            cards.forEach(c => c.classList.remove('is-active'));

            // Expand clicked card
            card.classList.add('is-active');
        });
    });
});
</script>
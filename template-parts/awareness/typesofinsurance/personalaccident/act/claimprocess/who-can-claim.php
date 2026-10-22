<?php
$eligibility_cards = [
    [
        'title'       => 'The Insured (policyholder)',
        'event'       => 'PTD, PPD, TTD, Medical Reimbursement, all add-ons',
        'notes'       => 'Files the claim directly; provides own medical documentation',
        'image'       => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'The Insured'
    ],
    [
        'title'       => 'Nominee (named in policy)',
        'event'       => 'Accidental Death',
        'notes'       => 'Must submit nominee ID proof matching the policy record exactly',
        'image'       => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Nominee'
    ],
    [
        'title'       => 'Legal Heir (if no nominee)',
        'event'       => 'Accidental Death',
        'notes'       => 'Requires succession certificate or legal heir certificate — significantly slower process',
        'image'       => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Legal Heir'
    ],
    [
        'title'       => 'Employer (group policy)',
        'event'       => 'On behalf of employee, for employer-paid claims',
        'notes'       => 'Employer is the master policyholder; employee must cooperate with documentation',
        'image'       => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Employer'
    ]
];
?>

<section class="eligibility-section" id="who-can-claim-pa">
    <div class="container">
        <!-- <span class="subheading">2.3 Claim Process</span> -->
        <!-- <h2 class="main-heading">Claims Process — Who Can Apply, Where, and How</h2> -->
        <h3 class="sub-head">Who Can File a Claim?</h3>

        <div class="cards-grid">
            <?php foreach ($eligibility_cards as $card): ?>
                <div class="eligibility-card" style="background-image: url('<?php echo htmlspecialchars($card['image']); ?>');">
                    <div class="card-overlay"></div>
                    <div class="card-content">
                        <h3 class="card-title"><?php echo htmlspecialchars($card['title']); ?></h3>
                        
                        <div class="card-details">
                            <div class="card-meta">
                                <span class="meta-label">Under Which Event:</span>
                                <p class="meta-text"><?php echo htmlspecialchars($card['event']); ?></p>
                            </div>

                            <div class="card-meta">
                                <span class="meta-label">Notes:</span>
                                <p class="meta-text"><?php echo htmlspecialchars($card['notes']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
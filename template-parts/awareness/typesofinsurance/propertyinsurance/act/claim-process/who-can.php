<?php
$eligibility_cards = [
    [
        'title'       => 'The Insured (policyholder)',
        'event'       => 'All covered events — building damage, contents loss, theft, liability, stock loss, business interruption',
        'notes'       => 'File the claim directly; provide property/business documentation and evidence of loss',
        'image'       => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'The Insured'
    ],
    [
        'title'       => 'Legal Heir / Joint Owner',
        'event'       => 'On death of policyholder; jointly owned property or business',
        'notes'       => 'Requires succession certificate or legal heir certificate',
        'image'       => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Legal Heir or Joint Owner'
    ],
    [
        'title'       => 'Tenant (if contents policy is in tenant\'s name)',
        'event'       => 'All contents and portable equipment events',
        'notes'       => 'Tenant is the insured for their own contents policy; landlord\'s policy is irrelevant',
        'image'       => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Tenant'
    ],
    [
        'title'       => 'Small Business Owner (if commercial policy in business name)',
        'event'       => 'All covered events — stock loss, equipment, fire, flood, theft, business interruption',
        'notes'       => 'Business owner files directly; all stock and equipment documentation must be maintained as part of business records',
        'image'       => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80',
        'alt'         => 'Small Business Owner'
    ]
];
?>

<section class="eligibility-section">
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
<?php
/**
 * Who Can File a Claim Section Template (Travel Insurance)
 */

$eligibility_cards = [
    [
        'title'  => 'The Insured (policyholder)',
        'event'  => 'All events except Accidental Death — medical, baggage, delay, cancellation, liability',
        'notes'  => 'Files directly; claim paid to insured\'s bank account',
        'image'  => 'https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=800&q=80',
        'alt'    => 'The Insured'
    ],
    [
        'title'  => 'Nominee (named in policy)',
        'event'  => 'Accidental Death during the trip',
        'notes'  => 'Must submit ID proof matching the policy record; name mismatch causes significant delay',
        'image'  => 'https://images.unsplash.com/photo-1511895426328-dc8714191300?auto=format&fit=crop&w=800&q=80',
        'alt'    => 'Nominee'
    ],
    [
        'title'  => 'Legal Heir (if no nominee named)',
        'event'  => 'Accidental Death',
        'notes'  => 'Requires succession certificate — significantly slower',
        'image'  => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&w=800&q=80',
        'alt'    => 'Legal Heir'
    ],
    [
        'title'  => 'Parent / Guardian',
        'event'  => 'Any event involving a minor insured traveller',
        'notes'  => 'Parent files on behalf of minor; minor\'s policy documents and guardian ID required',
        'image'  => 'https://images.unsplash.com/photo-1485546246426-74dc88dec4d9?auto=format&fit=crop&w=800&q=80',
        'alt'    => 'Parent or Guardian'
    ],
    [
        'title'  => 'Employer (for corporate group policy)',
        'event'  => 'On behalf of employee for group-covered events',
        'notes'  => 'Employer is the master policyholder; employee must cooperate with documentation',
        'image'  => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=800&q=80',
        'alt'    => 'Employer'
    ]
];
?>

<section class="eligibility-section" id="who-can-claim">
    <div class="container">
        <h3 class="sub-head">Who Can File a Claim?</h3>

        <div class="cards-grid">
            <?php foreach ($eligibility_cards as $card): ?>
                <div class="eligibility-card" style="background-image: url('<?php echo htmlspecialchars($card['image']); ?>');" role="region" aria-label="<?php echo htmlspecialchars($card['alt']); ?>">
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
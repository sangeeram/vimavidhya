<?php
/**
 * Useful Contacts and Resources Section Template (Travel Insurance)
 */

$resources_heading = "Useful Contacts and Resources";

$resources = [
    [
        'name' => 'IRDAI Official Website',
        'url' => 'www.irdai.gov.in',
        'icon' => '🏛️',
        'badge' => 'Regulator',
        'description' => 'Official regulator. Insurer Claim Settlement Ratios, approved insurer list, policyholder protection guidelines, IGMS grievance filing portal.'
    ],
    [
        'name' => 'Bima Bharosa Portal',
        'url' => 'bimabharosa.irdai.gov.in',
        'icon' => '⚖️',
        'badge' => 'Grievances',
        'description' => 'Integrated grievance portal — file complaints against insurers online; track resolution status.'
    ],
    [
        'name' => 'Insurance Ombudsman',
        'url' => 'cioins.co.in',
        'icon' => '🤝',
        'badge' => 'Dispute Resolution',
        'description' => 'Free, fast dispute resolution for claims up to ₹50 lakh — 17 offices across India.'
    ],
    [
        'name' => 'DigiLocker',
        'url' => 'digilocker.gov.in',
        'icon' => '📱',
        'badge' => 'Digital Storage',
        'description' => 'Store your policy certificate digitally; accessible by your nominee even if the physical copy is unavailable.'
    ],
    [
        'name' => 'Ministry of External Affairs',
        'url' => 'mea.gov.in',
        'icon' => '🌐',
        'badge' => 'Advisories',
        'description' => 'India\'s official travel advisories by country — relevant for understanding exclusions for advisory-listed destinations.'
    ]
];
?>

<section class="useful-resources-section" id="useful-contacts">
    <div class="useful-resources__container">
        <header class="useful-resources__header">
            <span class="useful-resources__eyebrow">SUPPORT & REGULATORY CHANNELS</span>
            <h2 class="useful-resources__title"><?php echo htmlspecialchars($resources_heading); ?></h2>
        </header>

        <div class="useful-resources__grid">
            <?php foreach ($resources as $res): ?>
                <div class="resource-card">
                    <div class="resource-card__top">
                        <span class="resource-card__icon" aria-hidden="true"><?php echo $res['icon']; ?></span>
                        <span class="resource-card__badge"><?php echo htmlspecialchars($res['badge']); ?></span>
                    </div>

                    <div class="resource-card__body">
                        <h3 class="resource-card__name"><?php echo htmlspecialchars($res['name']); ?></h3>
                        <div class="resource-card__link-wrap">
                            <span class="link-bullet">🔗</span>
                            <span class="resource-card__url"><?php echo htmlspecialchars($res['url']); ?></span>
                        </div>
                        <p class="resource-card__desc"><?php echo htmlspecialchars($res['description']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>